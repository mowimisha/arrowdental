

@extends('layouts.app')

@section('header')
    Edit Post
@endsection

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    
  </section>

  <!-- Main content -->
  <section class="content">
      <div id="page-wrapper">
          <div class="container-fluid">
              <div class="row bg-title">
                  <div class="col-md-1"></div>
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                      <h4 class="page-title">Edit Post</h4> </div>
                  
                  <!-- /.col-lg-12 -->
              </div>


              <script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
              <script type="text/javascript">
                tinymce.init({
                  selector : "textarea",
                  plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
                  toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
                }); 
              </script>


              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-8">
                  <div class="container">
                     <div class="col-md-6">
                       @if(Session::has('flash_message'))
                           <div class="alert alert-success"><em> {!! session('flash_message') !!}</em></div>
                       @endif
                     </div>
                  </div>


                  <form action="/update" method="post" style="padding: 60px 0 100px 0;" enctype="multipart/form-data">
                   {{ csrf_field() }}
                   <input type="hidden" name="post_id" value="{{ $post->id }}{{ old('post_id') }}">
                   <div class="form-group">
                     <input required="required" placeholder="Enter title here" type="text" name = "title" class="form-control" value="@if(!old('title')){{$post->title}}@endif{{ old('title') }}"/>
                   </div>
                   <div class="form-group">
                     <textarea name='body' class="form-control" rows="20">
                       @if(!old('body'))
                       {!! $post->body !!}
                       @endif
                       {!! old('body') !!}
                     </textarea>
                   </div>
                   @if($post->active == '1')
                   <input type="submit" name='publish' class="btn btn-success" value = "Update"/>
                   @else
                   <input type="submit" name='publish' class="btn btn-success" value = "Publish"/>
                   @endif
                   <input type="submit" name='save' class="btn btn-warning" value = "Save As Draft" />
                   <a href="{{  url('delete/'.$post->id.'?_token='.csrf_token()) }}" class="btn btn-danger">Delete</a>
                  </form>
                </div>
              </div>


              


          </div>
          <!-- /.container-fluid -->
      </div>
  </section>
  <!-- /.content -->
</div>

  
@endsection








