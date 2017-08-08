@extends('layout')
@section('title', ' View new post')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-8 ">
    <div class="post">
      <h1> Uploaded Post</h1>
      <hr>
      <div class="panel panel-default">
        <div class="panel-body">
        <div class="post">
          <h3> {{ $post->title }}</h3>

          <p>{{ $post->body }} </p>
          <p > <a class="btn btn-sm btn-primary"  role="button">Read more &raquo;</a></p>
        </div>
      </div>
      </div>
    </div>
</div>
<div class="col-md-4">
  <div class="well">
  <dl class="dl-horizontal">
      <label >Url slug:  </label>
      <p > <a href="{{ url('blog/'.$post->slug ) }}">{{ $post->slug }}</a></p>
    </dl>
    <dl class="dl-horizontal">
      <label >Created at  </label>
      <p >{{ date('M j, Y H:i', strtotime($post->created_at)) }} </p>
    </dl>
    <dl class="dl-horizontal">
      <label >Last updated</label>
      <p >{{ date('M j, Y H:i',strtotime($post->updated_at)) }}</p>
    </dl>
    <hr>
    <div class="row">
      <div class="col-sm-6">
        {!! Html::linkRoute('post.edit', 'Edit', array($post->id),
           array('class'=>'btn btn-primary btn-block')) !!}

      </div>
      <div class="col-sm-6">
        {!! Form::open(['method' => 'DELETE','route' => ['post.destroy', $post->id]]) !!}
        {{ Form::submit('Delete', ['class'=>'btn btn-danger btn-block btn-sm']) }}
        {{ Form::close() }}
      </div>

    </div>
    <hr>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
      <a href="{{ route('post.index') }}" class="btn btn-primary btn-block h1-space">See all Post</a>
      </div>
    </div>
  </div>

</div>
</div>
</div>

</div><!--- end of container-->
@endsection
