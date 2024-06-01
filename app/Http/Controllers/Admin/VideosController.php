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
        $validatedData = $request->validate([
            'videos.*' => 'required|file|mimetypes:video/mp4,video/avi,video/mpeg|max:20480'
        ]);

        foreach ($request->file('videos') as $videoFile) {
            $filePath = $videoFile->store('videos', 'public');

            $video = new Video();
            $video->video = $filePath;
            $video->save();
        }

        return redirect()->route('admin.videos.index')->with('success', 'Videos uploaded successfully.');
    }

    public function destroy(Video $video)
    {
        Storage::disk('public')->delete($video->video);

        $video->delete();

        return redirect()->route('admin.videos.index')->with('success', 'Video deleted successfully.');
    }
}
