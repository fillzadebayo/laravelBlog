@if (Session::has('success'))
<div class="alert alert-dismissible alert-success fade show" role="alert">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Success:</strong>{{ Session::get('success') }}
</div>
@endif

@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Errors:</strong>
  <ul>
  @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>

  @endforeach
  <ul>
</div>
@endif
<script>
$(".alert-dismissible").fadeTo(2000, 500).slideUp(500, function(){
    $(".alert-dismissible").alert('close');
});
</script>
