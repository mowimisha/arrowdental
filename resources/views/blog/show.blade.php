
@extends('layouts.admin.admin')

@section('header', 'View Post')


@section('content')
	

<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
	
			<div class="col-md-3"></div>
			<div class="col-md-8">
			<p style="padding: 150px 0 0 50px;">
			   <div class="">         
			   </div>
               <div >
   				   <h3>{!! $blog->title !!}   <a href="{{ url("/blog/{$blog->id}/edit") }}" class="btn btn-info">Edit Post</a> &nbsp;<a href="{{ url("/blog/{$blog->id}/delete") }}" class="btn btn-danger">Delete</a></h3>
	   			</div>

              <tr>
                <td><strong>Posted on : </strong> {{ $blog->created_at->format('M d,Y ') }} </td>
              </tr><br>

              
            </p>
            
			<div >
				{!! $blog->body !!}
			</div>	
			<div>
				<h2>Leave a comment</h2>
			</div>

			<div id="disqus_thread"></div>
			<script>

			/**
			*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
			*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
			/*
			var disqus_config = function () {
			this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
			this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
			};
			*/
			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');
			s.src = 'https://lsf.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		</div>
		
	</div>
</div><br><br>

	<div class="row">
	  <div class="col-md-4"></div>
	  <div class="col-md-8">
	    <a href="{{ url('/all-posts') }}" class="btn btn-primary">Return to All Posts</a>
	  </div>
	</div>


@endsection

