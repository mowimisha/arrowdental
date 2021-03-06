
@extends('layouts.app')

@section('header')
    LSF Admin Dash
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
                    <h4 class="page-title">Edit User</h4> </div>
                
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
                <form action="/update-user" method="post" style="padding: 50px 0 50px 0;" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  @foreach($users as $user)
                    <div class="form-group">
                      <input required="required" value="{{ old('name') }}" placeholder="{{ $user->name }}" type="text" name="name" title="" class="form-control" />
                    </div><br>

                    <div class="form-group">
                      <input required="required" value="{{ old('firstname') }}" placeholder="{{ $user->firstname }}" type="text" name="firstname" title="" class="form-control" />
                    </div><br>

                    <div class="form-group">
                      <input required="required" value="{{ old('lastname') }}" placeholder="{{ $user->lastname }}" type="text" name="lastname" title="" class="form-control" />
                    </div><br>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" placeholder="{{ $user->email }}" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                    </div><br>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        
                            <input id="password" type="password" class="form-control" placeholder="Enter New Password" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                    </div><br>

                    <div class="form-group">

                        
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="repeat new password" required>
                    </div>

                    <div class="form-group">
                      <label for="input-id">Role</label>
                      <select name="role" id="input" class="form-control" placeholder="{{ $user->role }}">
                        <option value="">-- Select One --</option>
                        <option value="admin">Admin</option>
                        <option value="author">Author</option>
                      </select>
                    </div><br>

                    <input type="submit" name='' class="btn btn-success" value = "Update User"/>
                  @endforeach
                </form>
              </div>
            </div>


        </div>
    </section>
    <!-- /.content -->
  </div>
@endsection

































