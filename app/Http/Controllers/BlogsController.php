<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Requests\CreateBlogRequest;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::get();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('blogs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateBlogRequest $request)
    {
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->image = $request->image;
        $blog->text = $request->text;
        $blog->category = $request->category;
        $blog->created_at = Carbon::now()->toDateString();

        if($blog->save()){
            return redirect()->route('blogs.index')->with('success', 'Blog created successfuly!');
        }

        return view('blogs.create');
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
        $blog = Blog::where('id', $id)->first();
        $categories = Category::get();
      
        return view('blogs.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateBlogRequest $request, Blog $blog)
    {
        $blog->title = $request->title;
        $blog->image = $request->image;
        $blog->text = $request->text;
        $blog->category = $request->category;
        $blog->updated_at = Carbon::now()->toDateString();

        if($blog->save()) {
            return redirect()->route('blogs.index')->with('success', 'Blog updated successfuly!');
        }

        return redirect()->route('blogs.index')->with('error', 'Something went wrong!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if($blog->delete()) {
            return redirect()->route('blogs.index')->with('success', 'Blog deleted successfuly!');
        }
        return redirect()->route('blogs.index')->with('error', 'Something went wrong!');
    }
}
