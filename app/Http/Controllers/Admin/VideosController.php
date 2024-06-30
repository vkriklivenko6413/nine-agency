<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideosController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->get();

        return view('admin.videos.index', compact('videos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'video' => 'required|url',
            'image' => 'nullable|file|image|max:2048',
        ]);
 
        $videoEmbed = self::convertToEmbedLink($request->video);

        if (!$videoEmbed) return redirect()->route('admin.videos.index')->withErrors(['video' => 'Could not parse provided URL!']);

        $video = Video::create([
            'video' => $videoEmbed,
        ]);

        $video->addMedia($request->file('image'))->toMediaCollection('images');

        return redirect()->route('admin.videos.index')->with('success', 'Video added successfully.');
    }

    public function destroy(Video $video)
    {
        if ($video->hasMedia('images')) {
            $video->getFirstMedia('images')->delete();
        }

        $video->delete();

        return redirect()->route('admin.videos.index')->with('success', 'Video deleted successfully.');
    }

    private static function convertToEmbedLink($url)
    {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            $parsedUrl = parse_url($url);

            if (isset($parsedUrl['host']) && (strpos($parsedUrl['host'], 'youtube.com') !== false || strpos($parsedUrl['host'], 'youtu.be') !== false)) {
                if (strpos($parsedUrl['host'], 'youtu.be') !== false) {
                    $videoId = ltrim($parsedUrl['path'], '/');
                } else {
                    parse_str($parsedUrl['query'], $queryParams);
                    $videoId = $queryParams['v'];
                }

                $embedLink = 'https://www.youtube.com/embed/' . htmlspecialchars($videoId);

                return $embedLink;
            }
        }

        return null;
    }
}
