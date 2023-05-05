<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $blogs = Blog::all();

        return view('dashboard',[
            'blogs' => $blogs
        ]);
    }

    public function show(Blog $blog)
    {

        return view('blog.edit', [
            'blog' => $blog
        ]);
    }

    public function edit(Blog $blog, Request $request)
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

        $blog->imgBlog = $request->imgBlog;
        $blog->date = $request->date;
        $blog->dayCreateBlog = $request->dayCreateBlog;
        $blog->monthCreateBlog = $request->monthCreateBlog;
        $blog->authorBlog = $request->authorBlog;
        $blog->titleBlog = $request->titleBlog;
        $blog->descriptionBlog = $request->descriptionBlog;

        $blog->save();

        return back();
    }
}
