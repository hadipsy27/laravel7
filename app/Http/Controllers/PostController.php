<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        // dd($post); // http://127.0.0.1:8000/posts/my-first-post -> my-first-post merupakan data slug di tabel posts

        return view('posts.show',compact('post'));


    }
}
