<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Variable;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Variable::pluck('value', 'name')->toArray();
        $settings = (object) $settings;

        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        foreach ($request->except(['_token', '_method']) as $key => $value) {
            $setting = Variable::where('name', $key)->firstOrNew(['name' => $key]);

            if ($request->hasFile($key)) {
                $validatedData = Variable::make($request->only($key), [
                    $key => 'file|mimes:jpg,jpeg,png,webp,gif,mp4,mov,avi,wmv|max:20480',
                ]);

                if ($validatedData->fails()) {
                    return back()->withErrors($validatedData->errors());
                }

                $path = $value->store('settings', 'public');
                $setting->value = $path;
            } else {
                $setting->value = $value;
            }

            $setting->save();
        }

        return back()->with('success', 'Settings updated successfully.');
    }
}
