@extends('layouts.app')

@section('header', 'Edit Post')

@section('content')

<script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
  tinymce.init({
    selector : "textarea",
    plugins : ["advlist autolink lists link charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
    toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link",
  }); 
</script>


<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-6">

    @if(Session::has('flash_message'))
        <div class="alert alert-success"><em> {!! session('flash_message') !!}</em></div>
    @endif

    <div style="padding: 150px 0 0 0;">

      {!! Form::model($blog, [ 'method' => 'PATCH', 'action' => ['BlogController@update', $blog->id ]]) !!}

      

          <div class="form-group">
            {!! Form::label("title", "Title") !!}
            {!! Form::text("title", null, ['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label("body", "Body") !!}
            {!! Form::textarea("body", null, ['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::submit("Edit Post", ['class' => 'btn btn-primary']) !!}
          </div>

      {!! Form::close() !!}



      {!! Form::open([ 'method' => 'DELETE', 'action' => ['BlogController@destroy', $blog->id ]]) !!}

      

          <div class="form-group">
            {!! Form::submit("Delete Post",  ['class' => 'btn btn-danger']) !!}
          </div>

      {!! Form::close() !!}





    </div>
    <!-- <form action="/new-post" method="post" style="padding: 150px 0 50px 0;" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <input required="required" value="" placeholder="Enter Blog title here" type="text" name = "title"class="form-control" />
      </div>

      <div style="position:relative;">
              <a class='btn btn-warning' href='javascript:;'>
                  Click to Attach Blog Image...
                  <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="image" id="image" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
              </a>
              &nbsp;
              <span class='label label-info' id="upload-file-info"></span>
      </div><br>

      <div class="form-group">
          <textarea name='body' class="form-control" rows="20"></textarea>
      </div>

  
      <input type="submit" name='publish' class="btn btn-success" value = "Publish"/>
      <input type="submit" name='save' class="btn btn-warning" value = "Save As Draft" />
    </form> -->
  </div>
</div>
@endsection


