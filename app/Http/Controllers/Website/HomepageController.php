<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\NewsArticle;
use App\Models\Project;
use App\Models\Seo;
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

        $clients = Client::all();

        $seos = Seo::query()->get();

        return view('website-n.home', compact('homepageVariables', 'clients', 'projects', 'videos', 'news', 'seos'));
    }
}
