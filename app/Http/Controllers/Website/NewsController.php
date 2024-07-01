<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\NewsArticle;
use App\Models\Variable;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $homepageVariables = Variable::pluck('value', 'name')->toArray();
        $homepageVariables = (object) $homepageVariables;

        $news = NewsArticle::latest()->get();

        return view('website-n.news', compact('news', 'homepageVariables'));
    }

    public function article(string $articleSlug)
    {
        $article = NewsArticle::where('slug', $articleSlug)->firstOrFail();

        return view('website-n.article', compact('article'));
    }
}
