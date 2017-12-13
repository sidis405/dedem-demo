@extends('layouts.app')
@section('content')
<!-- Post Content -->
<div class="col-md-9">
    <h1> {{ $post->title }} </h1>
    <p>
        {{ $post->body }}
    </p>
    <hr>
    <h4>Commenti</h4>
    <ul class="list-group">
        @foreach($post->comments as $comment)

            <li class="list-group-item">
                <strong> {{ $comment->created_at->diffForHumans() }} : &nbsp;</strong>
                <div>{{ $comment->body }}</div>
            </li>
        @endforeach
    </ul>
</div>
@stop
