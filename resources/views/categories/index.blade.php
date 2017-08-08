@extends('layout')
@section('title', ' All Categories')
@section('content')
<div class="container">
<div class="row">
  <div class="col-md-12">
      <h1>Categories</h1>
      <hr>
  </div>
  <div class="row">
    <div class="col-md-8">
      <table class="table table-resposnive">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
            <tr>
              <td> {{ $category->id }}</td>
              <td> {{  $category->name }}</td>
            </tr>
          @endforeach

        </tbody>
      </table>
    </div>
    <div class="col-md-4">
      <div class="well">
        <h1>New Category</h1>
        {!! Form::open(['route'=>'categories.store', 'method'=> 'POST'])!!}
        <div class="form-group">
          <label class="control-label col-sm-2" for="title"> Name:</label>
            <input type="text" name="name" class="form-control"  required id="name"  placeholder="Enter Title">
        </div>
        <div class="form-group" >
          <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
        {!! Form::close()!!}
      </div>
    </div>

  </div>
</div>

</div><!--- end of container-->
@endsection
