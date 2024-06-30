<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function project(string $projectSlug)
    {
        $project = Project::where('slug', $projectSlug)->firstOrFail();

        return view('website-n.project', compact('project'));
    }
}
