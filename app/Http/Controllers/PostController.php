<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        // $post = Post::simplePaginate(2); //paginate dengan previous dan next
        return view('posts.index',[
            // latest() order by asc
            'posts' => Post::latest()->paginate(6),
        ]);

    }
    public function show(Post $post)
    {    
        return view('posts.show',compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $post = $request->all();
        $post['slug'] = \Str::slug($request->title);
        Post::create($post);
        return back();
    }

}
