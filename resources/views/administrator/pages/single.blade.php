

@extends('layouts.app')

@section('header')
    All Pages
@endsection

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    
  <section class="content">
      <div id="page-wrapper">
          <div class="container-fluid">


              <script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
              <script type="text/javascript">
                tinymce.init({
                  selector : "textarea",
                  plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
                  toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
                }); 
              </script>


              <div class="row" style="padding-top: 20px;">
                <div class="col-md-12">

                    <div class="box">
                      <div class="box-header">
                        <h3>All Pages</h3> &nbsp;&nbsp;<a href="{{  url('/new-page') }}" class="btn btn-primary">Create New</a>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div style="padding-top: 20px;" id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info"><br>
                          

                            <thead>
                                <tr>
                                    <th>Page Name</th>
                                    <th>Author</th>
                                    <th>Published</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($pages as $page)
                                    <tr>
                                        <td>{{ $page->title }}</td>
                                        <td>{{ $page->id }}</td>
                                        <td>{{ $page->created_at->format('d-m-Y') }}</td>
                                        <td>
                                          <p>
                                            <a href="{{ url('edit-user/'.$page->id) }}" class="btn btn-primary">Edit</a>&nbsp;
                                            <a href="{{ url('delete-user/'.$page->id) }}" class="btn btn-danger">Delete</a>
                                          </p>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                          <tfoot>
                            <tr>
                                <th>Page Name</th>
                                <th>Author</th>
                                <th>Published</th>
                            </tr>

                            <tr>
                                 {{ $pages->links() }}
                              </tr>
                          </tfoot>
                        </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
                </div>
              </div>


              


              


          </div>
          <!-- /.container-fluid -->
      </div>
  </section>
</div>




@endsection



