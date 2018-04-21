@extends('layouts.app')

@section('header')
    View All Posts
@endsection

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
    <div class="col-md-3"></div>
    <div class="col-md-6">
         <div style="margin: 100px 0 0 0 !important;">
          @foreach($blog as $blog)
          
             <div class="col-md-12 col-sm-6 col-xs-12 blog-item">
                 
                 <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.3s">
                   <div class="">
                       <img src="/uploads/blog/thumbnail_images/{{ $blog->image }}" alt="">          
                   </div>
                   <div class="blog-item-text"> 
                     <h3>
                         <a href="{{ action('BlogController@show', [$blog->id]) }}">{{ $blog->title }}</a>
                     </h3>
                     <div class="meta-tags">
                       <span class="date"><i class="fa fa-calendar"></i> on {{ $blog->created_at->format('M d,Y') }}</span>
                       
                     <p>
                     {!! str_limit($blog->body, $limit = 200, $end = '....... <a href='.url("/blog/".$blog->id).'>Read More</a>') !!}
                     </p>
                     

                     <div>
                         <a href="{{ url("/blog/{$blog->id}") }}" class="btn btn-info">View Post</a>
                         <a href="{{ url("/blog/{$blog->id}/delete") }}" class="btn btn-danger">Delete</a>
                     </div>

                   </div><br><br>
                 </div>
                 
               </div>
             
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection


