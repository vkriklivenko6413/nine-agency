<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Variable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

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
            $variable = Variable::where('name', $key)->firstOrCreate(['name' => $key]);

            if ($request->hasFile($key)) {
                $validatedData = Validator::make($request->only($key), [
                    $key => 'file|mimes:jpg,jpeg,png,webp,gif,mp4,mov,avi,wmv|max:20480',
                ]);

                if ($validatedData->fails()) {
                    return back()->withErrors($validatedData->errors());
                }

                $media = $variable->addMedia($value)->toMediaCollection('images');

                $variable->value = $media->id;

            } else {
                $variable->value = $value;
            }

            $variable->save();
        }

        return back()->with('success', 'Homepage data updated successfully.');
    }

    /**
     * @param Media $media
     *
     * @return RedirectResponse
     */
    public function destroyMedia(Media $media): RedirectResponse
    {
        $variable = Variable::findOrFail($media->model_id);
        $variable->delete();
        $media->delete();

        return back()->with('success', 'Image deleted successfully.');
    }
}
