<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Requests\CreateVideoRequest;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::get();
        return view('videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('videos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateVideoRequest $request)
    {
        $video = new Video;
        $video->image = $request->image;
        $video->link = $request->link;
      
        $video->created_at = Carbon::now()->toDateString();

        if($video->save()) {
            return redirect()->route('videos.index')->with('success', 'Video created successfuly!');
        }

        return redirect()->route('videos.index')->with('error', 'Something went wrong!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $video = Video::where('id', $id)->first();
      
        return view('videos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateVideoRequest $request, Video $video)
    {
        $video->image = $request->image;
        $video->link = $request->link;
      
        $video->updated_at = Carbon::now()->toDateString();

        if($video->save()) {
            return redirect()->route('videos.index')->with('success', 'Video updated successfuly!');
        }

        return redirect()->route('videos.index')->with('error', 'Something went wrong!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        if($video->delete()) {
            return redirect()->route('videos.index')->with('success', 'Video deleted successfuly!');
        }
        return redirect()->route('videos.index')->with('error', 'Something went wrong!');
    }
}
