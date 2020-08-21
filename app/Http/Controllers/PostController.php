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

    public function store()
    {
        // validate the vield
        $attr = request()->validate([
            'title'     => 'required|min:3|max:15',
            'body'      => 'required',
        ]);
        
        // Assign title to the slug
        $attr['slug'] = \Str::slug(request('title'));

        // create new post
        Post::create($attr);

        session()->flash('success','The post was created');

        // return back();
        return redirect('posts');
    }

}
