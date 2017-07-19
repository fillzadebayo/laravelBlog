@extends('layout')
@section('title')Home
@endsection
@section('content')
<div class="container">
  <div class="jumbotron">
    <h1>Bootstrap Tutorial</h1>
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
<a class="btn btn-xs btn-primary"  role="button">View navbar docs &raquo;</a>
  </div>
  <div class="row">
    <div class="col-md-8">
      @foreach ($posts as $post)
        <div class="post">
          <h3> {{ $post->title }}</h3>
          <p >{{ substr($post->body,0,300) }}{{ strlen($post->body)>50 ? "..." :""}} </p>
          <p > <a href="" class="btn btn-sm btn-primary"  role="button">Read more &raquo;</a></p>
          <hr>
        </div>
      @endforeach
    </div>
    <div class="col-md-4">
        <h3>SideBar</h3>
    </div>
  </div>
</div><!--- end of container-->
@endsection
