@extends('layouts.app',['title' => 'New post'])

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">New Post</div>
        <div class="card-body">
          <form action="/posts/store" method="post">
            @csrf
            <div class="form-group">
              <label for="title">Title</label>
              {{-- input:text.form-control --}}
              <input type="text" name="title" id="title" class="form-control">

              <label for="body">Body</label>
              <textarea type="text" name="body" id="body" class="form-control"></textarea>
            </div>
            {{-- button:submit.btn.btn-primary --}}
            <button type="submit" class="btn btn-primary">Create</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop