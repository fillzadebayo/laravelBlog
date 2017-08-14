@extends('layout')
@section('title', ' Add new post')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
    <div class="post">
      <h2> Add new Post</h2>
      <hr>
       {!! Form::open(array('route'=>'post.store','data-parsely-validate'=>''))!!}
          <div class="form-group">
            <label class="control-label col-sm-2" for="title"> Title:</label>
            <div class="col-sm-10">
              <input type="text" name="title" class="form-control"  required id="title"  placeholder="Enter Title">
            </div>
          </div>
           <div class="form-group">
            <label class="control-label col-sm-2" for="slug"> Slug</label>
            <div class="col-sm-10">
              <input type="text" name="slug" minlength=" 5" maxlength="255" class="form-control"  required id="slug"  placeholder="Enter slug">
            </div>
          </div>
          <div class="form-group">
           <label class="control-label col-sm-2" for="category"> Category</label>
           <div class="col-sm-10">
             <div class="form-group">
               <select class="form-control" id="sel1" name="category">
                 <option  value="option">select option</option>
                 @foreach ($categories as $category)
                    <option value='{{ $category->id }}'> {{ $category->name }}</option>
                 @endforeach
               </select>
              </div>
           </div>
         </div>


          <div class="form-group">
            <label class="control-label col-sm-2" for="body">Message</label>
            <div class="col-sm-10">
              <textarea type="text" class="form-control" name="body" required id="body" style="margin-top:10px" placeholder="Type your Subject...."></textarea>
            </div>
          </div>

          <div class="form-group" >
            <div class="col-sm-offset-2 col-sm-10" style="margin-top:10px">
              <button type="reset" class="btn btn-danger">Reset</button>

              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
{!! Form::close()!!}

    </div>


</div>
</div>

</div><!--- end of container-->
@endsection
