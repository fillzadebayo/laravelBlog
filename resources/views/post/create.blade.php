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
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">CK Editor
                <small>Advanced and full of features</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                                            This is my textarea to be replaced with CKEditor.
                    </textarea>
              </form>
            </div>
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bootstrap WYSIHTML5
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </form>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->

</div>
</div>
</div>

</div><!--- end of container-->
@endsection
