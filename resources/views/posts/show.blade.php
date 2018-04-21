@extends('layouts.app')

@section ('header')
    
    Blog - Legal Services Facility Tanzania
@stop

@section ('content')

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
                      <h4 class="page-title">All Posts</h4> </div>
                  
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


              <div class="row" style="padding: 100px 0 0 0;">
                 
                    <div class="col-md-2"></div>
                    <div class="col-md-8 col-sm-6 col-xs-12 ">
                        <img src="/uploads/blog/normal_images/{{ $post->image }}" alt=""> <br>

                        <h3>
                            {{ $post->title }}
                        </h3>

                        <span class="date"><i class="fa fa-calendar"></i> on {{ $post->created_at->format('M d,Y') }}</span><br><br>
                              
                        <p>
                        {!! $post->body !!}
                        </p><br><br>


                        <div id="disqus_thread"></div>
                        <script>

                        /**
                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                        
                        var disqus_config = function () {
                        this.page.url = 'http://lsftz.org/blog';  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://lsf.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                        </script>
                        
                    </div>
              </div><br><br>


               <div class="row">
                 <div class="col-md-2"></div>
                 <div class="col-md-8">

                  @if($post->active == '1')
                  
                  <a href="{{ url('edit/'.$post->slug) }}" class="btn btn-primary">Edit</a>&nbsp;
                  @else
                  <a href="{{ url('edit/'.$post->slug) }}" class="btn btn-primary">Edit</a>&nbsp;
                  <input type="submit" name='publish' class="btn btn-success" value = "Publish"/>
                  @endif
                  <!-- <input type="submit" name='save' class="btn btn-warning" value = "Save As Draft" /> -->
                  <a href="{{  url('delete/'.$post->slug.'?_token='.csrf_token()) }}" class="btn btn-danger">Delete</a><br><br>

                  
                 </div>
               </div><br><br>

               <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                    <a href="{{ url('/my-all-posts') }}" class="btn btn-primary cta-btn"> <i class="fa fa-arrow-left"></i> &nbsp; Return to All Posts</a>
                  </div>
               </div>


              


              


          </div>
          <!-- /.container-fluid -->
      </div>
  </section>
  <!-- /.content -->
</div>



@stop