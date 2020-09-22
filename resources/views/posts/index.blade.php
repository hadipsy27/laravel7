@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-flex mb-3">
    @if (!isset($tag) && !isset($category))
        <h4>All Post</h4>
        <hr>
      @endif
    <div>
      @isset($category)
      <h4>Category: {{ $category->name }}</h4>  
      @endisset

      @isset($tag)
      <h4>Tag: {{ $tag->name }}</h4>
      @endisset

      <div class="media ml-auto">
        @if (Auth::check() && (!isset($tag) && !isset($category)))
          <a href="{{route('posts.create')}}" class="btn btn-primary">New Post</a>
        @endif
      </div>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-7">
      @forelse ($posts as $post)
        <div class="card  mb-4">        
          @if ($post->thumbnail)
          <a href="{{ route('posts.show', $post->slug )}}">
            <img style="height: 356px; object-fit: cover; object-position: center;" 
            src="{{ $post->takeImage }}" class="card-image-top">
          </a>
          @endif

          <div class="card-body">
            <div>
              <a href="{{ route('categories.show', $post->category->slug) }}" class="text-secondary">
                <small>{{ $post->category->name }} - </small>
              </a>

              @foreach ($post->tags as $tag)
                <a href="{{ route('tags.show', $tag->slug) }}" class="text-secondary">
                  <small>{{ $tag->name }}</small>
                </a>
              @endforeach
            </div>
            <h5>
              <a href="{{ route('posts.show', $post->slug) }}" class="card-title text-dark">
                {{ $post->title }}
              </a>
            </h5>
            <div class="text-secondary my-3">
              {{ Str::limit($post->body, 130, '.') }}
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
    <div class="col-md-5">
      <form action="{{ route('search.posts') }}" method="get">
        <div class="row">
          <div class="col-sm-9 ml-3">
            <input type="search" placeholder="Search" name="query" class="form-control">
          </div>
          <div class="col-sm-2">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </div>
        </div>
      </form>
    </div>
  </div>
      
{{ $posts->links() }}
</div>
@endsection