@extends('layouts.app')

@section('title', $post->title)
@section('content')
    <div class="container">
        <!-- <p> {{ $post->slug }} </p> -->
        <h1> {{ $post->title }} </h1>
        <p> {{ $post->body }} </p>
    </div>
@endsection