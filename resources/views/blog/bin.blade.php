@extends('layouts.admin.admin')

@section ('header')
  
  All Posts
@stop

@section('content')

    <script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
    <script type="text/javascript">
      tinymce.init({
        selector : "textarea",
        plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
        toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
      }); 
    </script>

    <div class="row" style="padding-top: 120px;">
      <h3>All Posts</h3>
      <div class="col-md-3"></div>
      <div class="col-md-6">
          <h3>Deleted Blog posts</h3>
          
          @foreach($deletedBlogs as $blog)
          <div class="col-page col-md-12">
                <div class="contenido-publicacion-principal-home">
                      <!-- <img src="/uploads/blog/thumbnail_images/{{ $blog->image }}" alt=""> -->
                      <h3>
                          <tr>
                            <td>{{{ $blog->title }}}</td>
                          </tr>
                      </h3>

                      <p>
                          <tr>
                            <td><strong>Posted on : </strong> {{ $blog->created_at->format('M d,Y \a\t h:i a') }} </td>
                          </tr><br>

                          
                      </p>
                      
                      <p>
                      {!! str_limit($blog->body, $limit = 200, $end = '....... <a href='.url("/backend/".$blog->id).'>Read More</a>') !!}
                      </p>

                      <p>
                        <a href="{{ url('edit/'.$blog->id) }}" class="btn btn-primary">Edit</a>&nbsp;
                        <a href="{{ url('delete/'.$blog->id) }}" class="btn btn-danger">Delete</a>
                      </p>
                </div><br><br>
          </div> 
        @endforeach 
      </div>
    </div>


@endsection
