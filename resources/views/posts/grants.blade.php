
@extends('layouts.app')

@section('header')
    Create Grants - LSF
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
                      <h4 class="page-title">Create Grants</h4> </div>
                  
                  <!-- /.col-lg-12 -->
              </div><br>


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
                  <div class="">
                     <div class="col-md-10">
                       @if(Session::has('flash_message'))
                           <div class="alert alert-success"><em> {!! session('flash_message') !!}</em></div>
                       @endif
                     </div>
                  </div>
                  <form action="/create_grant" method="post" style="padding: 10px 0 50px 0;" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <!-- <div class="form-group">
                      <input required="required" value="{{ old('title') }}" placeholder="Enter Tender title here" type="text" name="title" class="form-control" />
                    </div> -->

                    <div class="form-group">
                      <div style="position:relative;">
                              <a class='btn btn-warning' href='javascript:;'>
                                  Click to Attach files...
                                  <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="filename" id="filename" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
                              </a>
                              &nbsp;
                              <span class='label label-info' id="upload-file-info"></span>
                      </div><br>
                    </div>

                    

                    <input type="submit" class="btn btn-success" value = "upload"/>
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

































