<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $news = NewsArticle::latest()->get();

        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|array',
            'title.*' => 'required|string|max:255',
            'description' => 'required|array',
            'description.*' => 'required|string',
            'image' => 'nullable|file|image|max:2048',
            'slug' => 'nullable|string|unique:news_articles,slug',
        ]);

        $slug = $validatedData['slug'] ?? Str::slug($validatedData['title'][app()->getLocale()]) . rand(0, 10000);

        $article = new NewsArticle();
        $article->slug = $slug;

        foreach ($validatedData['title'] as $locale => $title) {
            $article->setTranslation('title', $locale, $title);
        }

        foreach ($validatedData['description'] as $locale => $description) {
            $article->setTranslation('description', $locale, $description);
        }

        $article->save();

        if ($request->hasFile('image')) {
            $article->addMedia($request->file('image'))->toMediaCollection('images');
        }

        return redirect()->route('admin.news.index')->with('success', 'Article created successfully.');
    }

    public function edit(NewsArticle $article)
    {
        return view('admin.news.edit', compact('article'));
    }

    public function update(Request $request, NewsArticle $article)
    {
        $validatedData = $request->validate([
            'title' => 'required|array',
            'title.*' => 'required|string|max:255',
            'description' => 'required|array',
            'description.*' => 'required|string',
            'image' => 'nullable|file|image|max:2048',
            'slug' => 'nullable|string|unique:news_articles,slug,' . $article->id,
        ]);

        $slug = $validatedData['slug'] ?? Str::slug($validatedData['title'][app()->getLocale()]) . rand(0, 10000);

        $article->slug = $slug;

        foreach ($validatedData['title'] as $locale => $title) {
            $article->setTranslation('title', $locale, $title);
        }

        foreach ($validatedData['description'] as $locale => $description) {
            $article->setTranslation('description', $locale, $description);
        }

        $article->save();

        if ($request->hasFile('image')) {
            if ($article->hasMedia('images')) {
                $article->getFirstMedia('images')->delete();
            }
            $article->addMedia($request->file('image'))->toMediaCollection('images');
        }

        return redirect()->back()->with('success', 'Article updated successfully.');
    }

    public function destroy(NewsArticle $article)
    {
        if ($article->hasMedia('images')) {
            $article->getFirstMedia('images')->delete();
        }

        $article->delete();
        return redirect()->route('admin.news.index')->with('success', 'Article deleted successfully.');
    }
}
