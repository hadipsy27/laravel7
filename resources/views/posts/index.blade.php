@extends('layouts.app')

@section('content')
<div class="container">
  <div class="">
    <div>
      @isset($category)
      <h4>Category: {{ $category->name }}</h4>  
      
      @endisset

      @isset($tag)
      <h4>Tag: {{ $tag->name }}</h4>

      @endisset

      @if (!isset($tag) && !isset($category))
        <h4>All Post</h4>
      @endif
      <hr>
    </div>
    {{-- <div>
      @if (Auth::check())
        <a href="{{route('posts.create')}}" class="btn btn-primary">New Post</a>
      @else
      <a href="{{route('login')}}" class="btn btn-primary">Login to create new Post</a>
      @endif

    </div> --}}
  </div>
  <div class="row">
    <div class="col-md-6">
      @forelse ($posts as $post)
        <div class="card  mb-4">        
          @if ($post->thumbnail)
          <a href="{{ route('posts.show', $post->slug )}}">
            <img style="height: 303px; object-fit: cover; object-position: center;" 
            src="{{ $post->takeImage }}" class="card-image-top">
          </a>
          @endif

          <div class="card-body">
            <a  href="{{ route('posts.show', $post->slug) }}" class="card-title">
              {{ $post->title }}
            </a>
            <div>
              {{ Str::limit($post->body, 100, '.') }}
            </div>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="media align-items-center">
                <img width='40' class="rounded-circle mr-3" src="{{ $post->author->gravatar() }}" alt="">
                <div class="media-body">
                    <div>
                      {{ $post->author->name }}
                    </div>
                </div>
              </div>
              <div class="text-secondary">
                <small>
                  Published on {{$post->created_at->diffForHumans()}}
                </small>
              </div>
            </div>
            
          </div>
        </div>
      
        @empty
          <div class="col-md-12 mt-3">
            <div class="alert alert-info">
              There's no posts.
            </div>
          </div>
      @endforelse
    </div>
  </div>
      
    
    <div class="d-flex justify-content-center">
      <div>
        {{ $posts->links() }}
      </div>
    </div>
</div>
@endsection