<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Variable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomepageController extends Controller
{
    public function index()
    {
        $variables = Variable::pluck('value', 'name')->toArray();
        $variables = (object) $variables;

        return view('admin.homepage.index', compact('variables'));
    }

    public function update(Request $request)
    {
        foreach ($request->except(['_token', '_method']) as $key => $value) {
            $variable = Variable::where('name', $key)->firstOrNew(['name' => $key]);

            if ($request->hasFile($key)) {
                $validatedData = Validator::make($request->only($key), [
                    $key => 'file|mimes:jpg,jpeg,png,webp,gif,mp4,mov,avi,wmv|max:20480',
                ]);

                if ($validatedData->fails()) {
                    return back()->withErrors($validatedData->errors());
                }

                $path = $value->store('images', 'public');
                $variable->value = $path;

            } else {
                $variable->value = $value;
            }

            $variable->save();
        }

        return back()->with('success', 'Homepage data updated successfully.');
    }
}
