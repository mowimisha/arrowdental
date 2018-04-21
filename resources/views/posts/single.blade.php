

@extends('layouts.app')

@section('header')
    All Posts
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
                        <h3>All Posts</h3> &nbsp;&nbsp;<a href="{{  url('/new-post') }}" class="btn btn-primary">Create New &nbsp;<i class="fa fa-pencil"></i></a>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div style="padding-top: 20px;" id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info"><br>
                          

                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Author</th>
                                    <th>Author</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($posts as $post)
                                    <tr>
                                        <!-- <td><img src="/uploads/blog/normal_images/{{ $post->image }}" alt="" width="80" height="60"></td> -->
                                        <td width="200"><a href="{{ url('/my-all-posts/'.$post->slug) }}">{{ $post->title }}</a></td>
                                        <td width="300">{!! str_limit($post->body, $limit = 150, $end = '....... <a href='.url("/my-all-posts/".$post->slug).'>Read More</a>') !!}</td>
                                        <td>{{ $post->created_at->format('d-m-Y') }}</td>
                                        <td>
                                          @if ($post->author_id === 1)
                                              Admin
                                          @else ($post->author_id === 0)
                                              User
                                          @endif
                                        </td>
                                        
                                        <td>{{ $post->active == "1" ? "Published" : "Draft" }}</td>
                                        <td>
                                          <a href="{{ url('/my-all-posts/'.$post->slug) }}" class="btn btn-sm btn-primary btn-edit" data-id="1">
                                            <i class="fa fa-eye"></i>
                                          </a>
                                          <a href="{{ url('/edit/'.$post->id) }}" class="btn btn-sm btn-primary btn-edit" data-id="1">
                                            <i class="fa fa-pencil"></i>
                                          </a>
                                          <a href="{{ url('/delete/'.$post->id) }}" class="btn btn-sm btn-danger btn-delete" data-id="1">
                                            <i class="fa fa-trash"></i>
                                          </a>
                                        </td>
                                    </tr>
                                   @endforeach
                            </tbody>
                          <tfoot>
                            <tr>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Author</th>
                                    <th>Author</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                          </tfoot>
                        </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
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



