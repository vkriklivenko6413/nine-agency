<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\NewsArticle;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = NewsArticle::latest()->get();

        return view('website.news', compact('news'));
    }

    public function article(string $articleSlug)
    {
        $article = NewsArticle::where('slug', $articleSlug)->firstOrFail();

        return view('website.article', compact('article'));
    }
}
