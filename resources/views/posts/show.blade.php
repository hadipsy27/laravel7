@extends('layouts.app')

@section('title', $post->title)
@section('content')
    <div class="container">
        <!-- <p> {{ $post->slug }} </p> -->
        <h1> {{ $post->title }} </h1>
        <p> {{ $post->body }} </p>

        <div>
            <form action="/posts/{{ $post->slug }}/delete" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-link btn-sm text-danger p-0" type="submit">Delete</button>
            </form>
        </div>
    </div>
@endsection