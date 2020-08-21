@extends('layouts.app',['title' => 'New post'])

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6">

      @if (session()->has('success'))          
        <div class="alert alert-success">
          {{ session()->get('success')}}
        </div>
      @endif
      @if (session()->has('error'))          
        <div class="alert alert-danger">
          {{ session()->get('error')}}
        </div>
      @endif
      
      <div class="card">
        <div class="card-header">New Post</div>
        <div class="card-body">
          <form action="/posts/store" method="post">
            @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" id="title" class="form-control">
              @error('title')
                  <div class="mt-2 text-danger">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="body">Body</label>
              <textarea type="text" name="body" id="body" class="form-control"></textarea>
              @error('body')
                  <div class="mt-2 text-danger">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop