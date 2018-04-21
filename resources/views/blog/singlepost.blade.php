@extends('layouts.app')

@section ('header')
	
	LSF - Drafts
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

<div class="row" style="padding: 150px 0 150px 0;">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		    @foreach($posts as $post)
        <div class="col-page col-md-12">
              <div class="contenido-publicacion-principal-home">
                    <img src="/uploads/blog/thumbnail_images/{{ $post->image }}" alt="">
                    <h3>
                        <tr>
                          <td>{{{ $post->title }}}</td>
                        </tr>
                    </h3>

                    <p>
                        <tr>
                          <td><strong>Posted on : </strong> {{ $post->created_at->format('M d,Y \a\t h:i a') }} </td>
                        </tr><br>

                        <tr>
                          <td><strong>Article by : </strong> {{ $post->author->name }} </td>
                        </tr>
                    </p>
                    
                    <p>
                    {!! str_limit($post->body, $limit = 300, $end = '....... <a href='.url("/".$post->slug).'>Read More</a>') !!}
                    </p>

                    <p>
                      <a href="{{ url('edit/'.$post->slug) }}" class="btn btn-primary">Edit</a>&nbsp;
                      <a href="{{ url('delete/'.$post->slug) }}" class="btn btn-danger">Delete</a>
                      <a href="{{ url('/publish') }}" class="btn btn-success">Publish</a>
                    </p>
              </div><br><br>
        </div> 
      @endforeach 
	</div>
</div><br>


@stop
