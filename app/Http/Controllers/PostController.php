<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = \DB::table('posts')->where('slug', $slug)->first();
        dd($post); // http://127.0.0.1:8000/posts/my-first-post -> my-first-post merupakan data slug di tabel posts

        return view('posts.show',compact('slug'));


    }
}
