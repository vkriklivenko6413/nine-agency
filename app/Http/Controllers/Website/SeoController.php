<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use App\Models\Variable;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class SeoController extends Controller
{
    public function show(string $seoSlug)
    {
        $seo = Seo::query()->where('slug', $seoSlug)->firstOrFail();

        return view('website-n.seo', compact('seo'));
    }
}
