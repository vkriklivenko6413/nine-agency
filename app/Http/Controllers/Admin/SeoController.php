<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SeoController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $seos = Seo::latest()->get();

        return view('admin.seo.index', compact('seos'));
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('admin.seo.add');
    }

    /**
     * @param Request $request
     *
     * @return RedirectResponse
     *
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'title' => 'required|array',
            'title.*' => 'required|string|max:255',
            'description' => 'required|array',
            'description.*' => 'required|string',
            'slug' => 'nullable|string|unique:seos,slug',
            'images.*.*' => 'nullable|file|image',
        ]);

        $slug = $validatedData['slug'] ?? Str::slug($validatedData['title'][app()->getLocale()]) . rand(0, 10000);

        $seo = new Seo();
        $seo->slug = $slug;

        foreach ($validatedData['title'] as $locale => $title) {
            $seo->setTranslation('title', $locale, $title);
        }

        foreach ($validatedData['description'] as $locale => $description) {
            $seo->setTranslation('description', $locale, $description);
        }

        $seo->save();

        $locales = config('app.languages');

        foreach (array_keys($locales) as $locale) {
            if ($request->hasFile('images.' . $locale)) {
                foreach ($request->file('images.' . $locale) as $image) {
                    $seo->addMedia($image)->toMediaCollection('images.' . $locale);
                }
            }
        }

        return redirect()->route('admin.seo.index')->with('success', 'Seo created successfully.');
    }

    /**
     * @param Seo $seo
     *
     * @return View
     */
    public function edit(Seo $seo): View
    {
        return view('admin.seo.edit', compact('seo'));
    }

    /**
     * @param Request $request
     *
     * @param Seo $seo
     *
     * @return RedirectResponse
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig
     */
    public function update(Request $request, Seo $seo): RedirectResponse
    {
        $validatedData = $request->validate([
            'title' => 'required|array',
            'title.*' => 'required|string|max:255',
            'description' => 'required|array',
            'description.*' => 'required|string',
            'slug' => 'nullable|string|unique:seos,slug,' . $seo->id,
            'images.*.*' => 'nullable|file|image'
        ]);

        $slug = $validatedData['slug'] ?? Str::slug($validatedData['title'][app()->getLocale()]) . rand(0, 10000);

        $seo->slug = $slug;

        foreach ($validatedData['title'] as $locale => $title) {
            $seo->setTranslation('title', $locale, $title);
        }

        foreach ($validatedData['description'] as $locale => $description) {
            $seo->setTranslation('description', $locale, $description);
        }

        $seo->save();

        $locales = config('app.languages');

        foreach (array_keys($locales) as $locale) {
            if ($request->hasFile('images.' . $locale)) {
                foreach ($request->file('images.' . $locale) as $image) {
                    $seo->addMedia($image)->toMediaCollection('images.' . $locale);
                }
            }
        }

        return redirect()->back()->with('success', 'Seo updated successfully.');
    }

    /**
     * @param Seo $seo
     *
     * @return RedirectResponse
     */
    public function destroy(Seo $seo): RedirectResponse
    {
        $seo->clearMediaCollection('images');
        $seo->delete();

        return redirect()->route('admin.seo.index')->with('success', 'Seo deleted successfully.');
    }

    /**
     * @param Seo $seo
     *
     * @param $mediaId
     *
     * @return RedirectResponse
     */
    public function destroyPhoto(Seo $seo, $mediaId, string $locale): RedirectResponse
    {
        $media = $seo->getMedia('images.' . $locale)->where('id', $mediaId)->first();

        if ($media) {
            $media->delete();

            return redirect()->route('admin.seo.edit', $seo)->with('success', 'Image deleted successfully.');
        }

        return redirect()->route('admin.seo.edit', $seo)->with('error', 'Image not found.');
    }
}
