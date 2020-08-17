<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // return Post::get(); -> menampilkan semua data dalam tabel post
        // return Post::get(['title','slug']); // menampilkan title,slug dalam tabel post
        // panggil di browser -> 127.0.0.1:8000/posts/ 

        $post = Post::paginate(2);
        return view('posts.index',['posts' => $post]);

    }
    public function show(Post $post)
    {
        // http://127.0.0.1:8000/posts/my-first-post -> my-first-post merupakan data slug di tabel posts
        return view('posts.show',compact('post'));


    }
}
