
@extends('layouts.app')

@section('header')
    Create New Page
@endsection

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-md-1"></div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Create New Page</h4> </div>
                
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
              <div class="col-md-9">
                <div class="container">
                   <div class="col-md-6">
                     @if(Session::has('flash_message'))
                         <div class="alert alert-success"><em> {!! session('flash_message') !!}</em></div>
                     @endif
                   </div>
                </div>
                <form action="{{ url('new-page') }}" method="post" style="padding: 50px 0 50px 0;" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input required="required" placeholder="Enter Page title here" type="text" name="title" class="form-control" />
                  </div>

                  <div class="form-group">
                    <label for="content">Featured Image</label>
                    <div style="position:relative;">
                            <a class='btn btn-warning' href='javascript:;'>
                                Click to Attach Featured Image...
                                <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="image" id="image" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
                            </a>
                            &nbsp;
                            <span class='label label-info' id="upload-file-info"></span>
                    </div><br>
                  </div>

                  <div class="form-group">
                    <label for="content">Content</label>
                      <textarea name="content" class="form-control" rows="20"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="meta_title">Meta Title</label>
                    <input placeholder="Enter Meta Title" type="text" name="meta_title" class="form-control" />
                  </div>

                  <div class="form-group">
                    <label for="meta_keywords">Meta Keywords</label>
                    <input placeholder="Enter Keywords separated by comma(,)" type="text" name="meta_keywords" class="form-control" />
                  </div>

                  <div class="form-group">
                    <label for="meta_description">Meta Description</label>
                    <textarea name="meta_description" id="input" class="form-control" rows="3"></textarea>
                  </div>

                  

                  <input type="submit" name='publish' class="btn btn-success" value = "Publish"/>
                  <input type="submit" name='save' class="btn btn-default" value = "Save Draft" />
                </form>
              </div>
            </div>


        </div>
    </section>
    <!-- /.content -->
  </div>
@endsection

































