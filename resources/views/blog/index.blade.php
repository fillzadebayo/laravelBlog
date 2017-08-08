@extends('layout')
@section('title', ' | Blog')
@section('content')
<div class="container">
<div class="row">
  <div class="col-md-12">
      <h1>Blog</h1>
      <hr>
  </div>
</div>
@foreach ($posts as $post)

<div class="row">
  <div class="col-md-8 col-md-offset-2">
      <h2> {{ $post->title }}</h2>
      <h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>
      <p>{{ substr($post->body, 0, 250) }} {{ strlen($post->body) > 250  ? '...':"" }}</p>
      <a class="btn btn-warning"href="{{ route('blog.single', $post->slug) }}"> Read more</a>
      <hr>
  </div>
</div>

@endforeach
  <div class="text-center">
    {!! $posts->links(); !!}
  </div>
</div><!--- end of container-->
@endsection
