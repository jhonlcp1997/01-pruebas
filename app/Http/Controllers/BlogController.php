<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();

        return $blogs;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'imgBlog' => ['required'],
            'date' => ['required'],
            'dayCreateBlog' => ['required'],
            'monthCreateBlog' => ['required'],
            'authorBlog' => ['required'],
            'titleBlog' => ['required'],
            'descriptionBlog' => ['required']
        ]);

        $blog = new Blog();
        $blog->imgBlog = $request->imgBlog;
        $blog->date = $request->date;
        $blog->dayCreateBlog = $request->dayCreateBlog;
        $blog->monthCreateBlog = $request->monthCreateBlog;
        $blog->authorBlog = $request->authorBlog;
        $blog->titleBlog = $request->titleBlog;
        $blog->descriptionBlog = $request->descriptionBlog;

        $blog->save();
        return 'success';
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return $blog;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
