@extends('layout')
@section('title', " | $post->title" )
@section('content')
<div class="container">
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1> {{ $post->title }}</h1>
    <hr>
    <p>{{ $post->body }}</p>
    <hr>
    <p>Posted In: {{ $post->category->name }}</p>
  </div>
</div>
</div><!--- end of container-->
@endsection
