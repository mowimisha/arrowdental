

@extends('layouts.app')

@section('header')
    All Appointments
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
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  
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


              <div class="row" style="padding-top: 50px;">
                <div class="col-md-12">

                    <div class="box">
                      <div class="box-header">
                        <h3>All Appointments</h3> &nbsp;&nbsp;<a href="{{  url('/new-appointment') }}" class="btn btn-primary">Create New &nbsp;<i class="fa fa-pencil"></i></a>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12">

                          <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info"><br>
                          

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NAME</th>
                                    <th>PHONE</th>
                                    <th>EMAIL</th>
                                    <th>PROCEDURE</th>
                                    <th>DATE</th>
                                    <th>NOTES</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($appointments as $appointment)
                                    <tr>
                                        <td>{{ $appointment->id }}</td>
                                        <td>{{ $appointment->name }}</td>
                                        <td>{{ $appointment->phone }}</td>
                                        <td>{{ $appointment->email }}</td>
                                        <td>{{ $appointment->procedure }}</td>
                                        <td>{{ $appointment->date }}</td>
                                        <td>{{ $appointment->notes }}</td>
                                    </tr>
                                   @endforeach
                            </tbody>
                          <tfoot>
                            <tr>
                                <th>#</th>
                                <th>NAME</th>
                                <th>PHONE</th>
                                <th>EMAIL</th>
                                <th>PROCEDURE</th>
                                <th>DATE</th>
                                <th>NOTES</th>
                            </tr>
                          </tfoot>
                        
                        </table></div></div><div class="row"><div class="col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"> {{ $appointments->links() }}</div></div></div></div>
                      </div>
                      <!-- /.box-body -->
                    </div>
                </div>
              </div>


              


              


          </div>
          <!-- /.container-fluid -->
      </div>
  </section>
  <!-- /.content -->
</div>

 
@endsection



