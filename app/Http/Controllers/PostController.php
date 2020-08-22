<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index',[
            'posts' => Post::latest()->paginate(6),
        ]);
    }

    public function show(Post $post)
    {    
        return view('posts.show',compact('post'));
    }

    public function create()
    {
        return view('posts.create',['post' => new Post()]);
    }

    public function store(PostRequest $request)
    {
        $attr = $request->all();
        $attr['slug'] = \Str::slug(request('title'));
        Post::create($attr);
        session()->flash('success','The post was created');
        return redirect('posts');
    }

    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $attr = $request->all();
        $post->update($attr);
        session()->flash('success', 'The post was updated');
        return redirect('posts');
    }

}
