@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-flex justify-content-between">
    <div>
      @isset($category)
      <h4>Category: {{ $category->name }}</h4>  
      @else
        <h4>All Post</h4>
      @endisset
      <hr>
    </div>
    <div>
      <a href="/posts/create" class="btn btn-primary">New Post</a>
    </div>
  </div>
  
  <div class="row">
      @forelse ($posts as $post)
        <div class="col-md-4">
          <div class="card  mb-4">
            <div class="card-header">
              {{ $post->title }}
            </div>
            <div class="card-body">
              <div>{{ Str::limit($post->body, 100, '.') }}</div>
              <a href="/posts/{{$post->slug}}">Read more</a>
            </div>
            <div class="card-footer d-flex justify-content-between">
              Published on {{$post->created_at->diffForHumans()}}
            <a href="posts/{{ $post->slug }}/edit" class="btn btn-sm btn-success">Edit</a>
            </div>
          </div>
        </div>
        @empty
            <div class="col-md-12 mt-3">
              <div class="alert alert-info">
                There's no posts.
              </div>
            </div>
        {{-- @endempty   --}}
      @endforelse
    </div>
    <div class="d-flex justify-content-center">
      <div>
        {{ $posts->links() }}
      </div>
    </div>
</div>
@endsection