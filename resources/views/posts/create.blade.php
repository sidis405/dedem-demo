@extends('layouts.app')
@section('content')
        <div class="col-md-9">
            <h1>Create a post</h1>
            <hr />
            <form method="POST" action="/posts">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for=title>Title</label>
                    <input class="form-control" name="title" required="" />
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" name="body" required="" ></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit post</button>
                </div>
            </form>
        </div>
@stop
