@extends('layouts.app')

@section('content')

    <!-- Post Content -->

          <div class="col-md-9">
            <h1> {{ $post->title }} </h1>
            <p>
              {{ $post->body }}
            </p>
      </div>


@stop
