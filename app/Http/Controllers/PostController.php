<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
        return view('posts.show',compact('slug'));
        // http://127.0.0.1:8000/posts/this-is-my-post
    }
}
