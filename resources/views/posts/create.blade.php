@extends('layouts.app')

@section('content')

<div class="col-sm-8 blog-main">
    <h1>Create a post</h1>
    <hr />

    <form method="POST" action="/posts">

    {{ csrf_field() }}

      <div class="form-group">
          <label for=title>Title</label>
          <input class="form-control" name="title" />
      </div>
      <div class="form-group">
          <label for="body">Body</label>
          <textarea class="form-control" name="body"></textarea>
      </div>
      <div class="form-group">
          <button type="submit" class="btn btn-primary">Submit post</button>
      </div>
    </form>
</div>

@stop
