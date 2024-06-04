<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\NewsArticle;
use App\Models\Project;
use App\Models\Variable;
use App\Models\Video;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $homepageVariables = Variable::pluck('value', 'name')->toArray();
        $homepageVariables = (object) $homepageVariables;

        $projects = Project::latest()->limit(6)->get();

        $videos = Video::latest()->get();

        $news = NewsArticle::latest()->limit(9)->get();
        // return $news->chunk(3);

        return view('website.home', compact('homepageVariables', 'projects', 'videos', 'news'));
    }
}
