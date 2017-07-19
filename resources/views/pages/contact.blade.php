@extends('layout')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
    <div class="post">
      <h2> Contact  Me</h2>
      <hr>
       <form class="form-horizontal" role="form">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="txt" placeholder="Enter your name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Subject</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="txt" placeholder="Enter your subject">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Message</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" id="txt" placeholder="Type your Subject...."></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>

    </div>

</div>
</div>
</div>

</div><!--- end of container-->
@endsection
