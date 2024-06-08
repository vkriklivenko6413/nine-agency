<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|array',
            'title.*' => 'required|string|max:255',
            'description' => 'required|array',
            'description.*' => 'required|string',
            'slug' => 'nullable|string|unique:projects,slug',
            'images.*' => 'nullable|file|image|max:2048'
        ]);

        $slug = $validatedData['slug'] ?? Str::slug($validatedData['title'][app()->getLocale()]) . rand(0, 10000);

        $project = new Project();
        $project->slug = $slug;

        foreach ($validatedData['title'] as $locale => $title) {
            $project->setTranslation('title', $locale, $title);
        }

        foreach ($validatedData['description'] as $locale => $description) {
            $project->setTranslation('description', $locale, $description);
        }

        $project->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $project->addMedia($image)->toMediaCollection('images');
            }
        }

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'title' => 'required|array',
            'title.*' => 'required|string|max:255',
            'description' => 'required|array',
            'description.*' => 'required|string',
            'slug' => 'nullable|string|unique:projects,slug,' . $project->id,
            'images.*' => 'nullable|file|image|max:2048'
        ]);

        $slug = $validatedData['slug'] ?? Str::slug($validatedData['title'][app()->getLocale()]) . rand(0, 10000);

        $project->slug = $slug;

        foreach ($validatedData['title'] as $locale => $title) {
            $project->setTranslation('title', $locale, $title);
        }

        foreach ($validatedData['description'] as $locale => $description) {
            $project->setTranslation('description', $locale, $description);
        }

        $project->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $project->addMedia($image)->toMediaCollection('images');
            }
        }

        return redirect()->back()->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->clearMediaCollection('images');
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }

    public function destroyPhoto(Project $project, $mediaId)
    {
        $media = $project->getMedia('images')->where('id', $mediaId)->first();
        if ($media) {
            $media->delete();
            return redirect()->route('admin.projects.edit', $project)->with('success', 'Image deleted successfully.');
        }

        return redirect()->route('admin.projects.edit', $project)->with('error', 'Image not found.');
    }
}
