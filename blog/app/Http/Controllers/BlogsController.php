<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    //getting all posts
    public function index() {
        return view('blogs', [
            'heading' => 'Latest Blogs',
            'blogs'=> Blog::all()
        ]);
    }

    //show single blog
    public function show($id) {
        return view('blog', [
            'blog' => Blog::find($id)
        ]);
    }

    public function create() {
        return view('newBlog');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
        ]);

        Blog::create($formFields);

        return redirect('/');
    }

    public function edit(Blog $blog) {
        return view('newBlog', ['blog' => $blog]);
    }

    public function delete(Blog $blog) {
        $blog->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }



}
