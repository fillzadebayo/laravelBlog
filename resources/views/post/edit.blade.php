@extends('layout')
@section('title', ' View new post')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-8 ">
    <div class="post">
      <h1> Uploaded Post</h1>
      <hr>
      {!! Form::model($post,['method' => 'PATCH','route' => ['post.update', $post->id]]) !!}
         <div class="form-group">
           <label class="control-label col-sm-2" for="title"> Title:</label>
           <div class="col-sm-10">
             <input type="text" name="title" class="form-control" value="{{ $post->title }}" required id="title"  placeholder="Enter Title">
           </div>
         </div>
         <div class="form-group">
           <label class="control-label col-sm-2" for="slug"> Slug:</label>
           <div class="col-sm-10">
             <input type="text" name="slug" class="form-control" value="{{ $post->slug }}" required id="slug"  placeholder="Enter slug">
           </div>
         </div>

         <div class="form-group " >
           <label class="control-label col-sm-2" for="body">Message</label>
           <div class="col-sm-10">
             <textarea type="text" rows="3" style="resize:none; " class="form-control" name="body"  required id="body" style="margin-top:10px" placeholder="Type your Subject...."> {{ $post->body }}</textarea>
           </div>
         </div>

</div>
</div>

<div class="col-md-4">
  <div class="well">
    <dl class="dl-horizontal">
      <dt >Created at  </dt>
      <dd >{{ date('M j, Y H:i', strtotime($post->created_at)) }} </dd>
    </dl>
    <dl class="dl-horizontal">
      <dt >Last updated</dt>
      <dd >{{ date('M j, Y H:i',strtotime($post->updated_at)) }}</dd>
    </dl>
    <hr>
    <div class="row">
      <div class="col-sm-6">
        {!! Html::linkRoute('post.show', 'cancel', array($post->id),
           array('class'=>'btn btn-warning btn-block btn-sm')) !!}

      </div>
      <div class="col-sm-6">
        {{ Form::submit('Save Changes', ['class'=>'btn btn-success btn-block btn-sm']) }}

      </div>
         {!! Form::close()!!}

    </div>
  </div>

</div>
</div>
</div>

</div><!--- end of container-->
@endsection
