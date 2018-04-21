@extends('layouts.master-layout')

@section ('header')
    
    Blog - Legal Services Facility Tanzania
@stop

@section ('content')
<div class="jumbotron" style="height: 300px !important;">
        <div class="container" style="padding-top: 20px !important;">
            <div class="col-md-2"></div>
            <div class="col-md-9 text-center">
                <h1 style="font-size: 45px;">Welcome to Our Blog</h1>
                <h4>Pata uhamasisho kuhusu usaidizi wa kisheria</h4>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>


    <!-- Blog Section -->
    <section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">
          <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="single-post">
                        <img src="/uploads/blog/post_images/{{ $post->image }}" alt=""> 

                        <div class="meta-tags" id="single-meta">
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
                            /*
                            var disqus_config = function () {
                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };
                            */
                            (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://http-lsftz-org.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                            })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                        </div>
                        
                    </div>
                    
                </div>
           </div><br><br>


           <div class="row">
             <div class="col-md-2"></div>
             <div class="col-md-8">
              <a href="{{ url('/blog') }}" class="btn btn-primary cta-btn"> <i class="fa fa-arrow-left"></i> &nbsp; Return to News</a>
             </div>
           </div>
              
        </div>
    </section>
   
            


@stop