@extends('layout')
@section('title', ' All posts')
@section('content')
<div class="container">
<div class="row">
  <div class="col-md-10 ">
    <h1> All Post</h1>

  </div>
  <div class="col-md-2">
    <a href="{{ route('post.create') }}" class="btn btn-primary btn-block h1-space">New Post</a>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-12">
    <table class="table ">
      <thead>
        <th>#</th><th>Title</th><th>Body</th><th>Created At</th><th></th>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ substr($post->body,0,50) }}{{ strlen($post->body)>50 ? "..." :""}}</td>
            <td>{{ date('M j, Y H:i', strtotime($post->created_at)) }}</td>
            <td> <a class="btn btn-primary btn-sm" href="{{ route('post.show', $post->id) }}"><span class="glyphicon glyphicon-list-alt"> </span> View </a>
              <a class="btn btn-warning btn-sm" href="{{ route('post.edit', $post->id) }}"><span class="glyphicon glyphicon-pencil"> </span> Edit</a></td>
          </tr>

        @endforeach
      </tbody>
    </table>
    <div class="text-center">
      {!! $posts->links();!!}
    </div>
  </div>
</div>
</div>

</div><!--- end of container-->
@endsection
