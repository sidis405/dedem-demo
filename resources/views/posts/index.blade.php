@extends('layouts.app')

@section('content')
<!-- Main Content -->

    <div class="col-md-9">

      @foreach($posts as $post)

        @include('posts.single')

      @endforeach

      <!-- Pager -->
      <div class="clearfix">
        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
      </div>
    </div>

@stop
