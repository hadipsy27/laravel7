<?php

namespace App\Http\Controllers;

use App\{Category,Post,Tag};
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([
            'index','show',
        ]);
    }
    
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
        return view('posts.create',[
            'post' => new Post(),
            'categories' => Category::get(),
            'tags'       => Tag::get(),
            ]);
    }

    public function store(PostRequest $request)
    {
        $attr = $request->all();
        $slug = \Str::slug(request('title'));
        $attr['slug'] = $slug;

        $thumbnail = request()->file('thumbnail');
        $thumbnailUlr = $thumbnail->store("images/posts");
        
        $attr['category_id'] = request('category');
        $attr['thumbnail'] = $thumbnailUlr;
        
        // create new post
        $post = auth()->user()->posts()->create($attr);

        $post->tags()->attach(request('tags'));
        
        session()->flash('success','The post was created');
        return redirect('posts');
    }

    public function edit(Post $post)
    {
        return view('posts.edit',[
            'post'      => $post,
            'categories'=> Category::get(),
            'tags'      => Tag::get()
        ]);
    }

    public function update(PostRequest $request, Post $post)
    {
        $this->authorize('update',$post);
        
        $thumbnail = request()->file('thumbnail');
        $thumbnailUlr = $thumbnail->store("images/posts");

        $attr = $request->all();
        $attr['category_id'] = request('category');
        $attr['thumbnail'] = $thumbnailUlr;
        $post->update($attr);
        $post->tags()->sync(request('tags'));
        session()->flash('success', 'The post was updated');
        return redirect('posts');
    }

    public function destroy(Post $post)
    {
        $this->authorize('deleted',$post);
        session()->flash('error', 'The post was destroyed');
        return redirect('posts');
    }

}
