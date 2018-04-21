@extends('layouts.master-layout')

@section ('header')
	
	Blog - Arrow Dental Centre
@stop

@section ('content')
	
	<div class="about-jumbotron">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-9">
				<h3>Arrow Dental / Blog</h3>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>

	<section id="blog">
		<div class="container">
			<div class="row">
				

				<div class="blog">
					<!-- <div class="row">	
						<div class="col-md-6">
							<h1 class="small">--- Blog</h1>
							<h1 class="blog-title">Latest Posts</h1>
						</div>
					</div> -->


					<div class="row">
						<div class="col-md-4">
							<div class="post">
								<p class="date"><?php echo date("M j Y"); ?></p>
								<p class="title"><a href="#">Lorem ipsum </a></p>
							</div>
							<img src="../images/asset5.jpeg" alt="">

						</div>
						<div class="col-md-4">
							<div class="post">
								<p class="date"><?php echo date("M j Y"); ?></p>
								<p class="title"><a href="#">Lorem ipsum </a></p>
							</div>
							<img src="../images/asset5.jpeg" alt="">
						</div>
						<div class="col-md-4">
							<div class="post">
								<p class="date"><?php echo date("M j Y"); ?></p>
								<p class="title"><a href="#">Lorem ipsum </a></p>
							</div>
							<img src="../images/asset5.jpeg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="contacts">
		<div class="container">
			<div class="row">	
				<div class="col-md-6">
					<h1 class="small">--&nbsp; Get in touch</h1>
					<h1 class="main">Contact Information</h1>
				</div>
			</div><br>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div id="carousel-id" class="carousel slide" data-ride="carousel" data-interval="20000">
						<div class="carousel-inner">
							<div class="item active">
								<div class="">
									<p>
										<span class="small">Location</span>

 										<p>Yala Towers Biashara Street room 801. </p>
 									</p><br>

 									<p>
										<span class="small">Phone</span> - 0740579064 / 0735210570

 									</p><br>

 									<p>
 										<span class="small">Open</span><br>

 										Mondays 8:00 a.m - 6:00 pm <br>
												 &nbsp;&nbsp;&nbsp;&nbsp; 2:00 p.m - 4:00 pm <br>

 										Tuesdays 8:00 a.m - 6:00 pm <br>
												 &nbsp;&nbsp;&nbsp;&nbsp; 2:00 p.m - 4:00 pm <br>

										Wednesdays 8:00 a.m - 6:00 pm <br>
												 &nbsp;&nbsp;&nbsp;&nbsp; 2:00 p.m - 4:00 pm <br>

										Fridays 8:00 a.m - 6:00 pm <br>
												 &nbsp;&nbsp;&nbsp;&nbsp; 2:00 p.m - 4:00 pm <br>

										Saturdays 8:00 a.m - 2:00 pm <br>
												 &nbsp;&nbsp;&nbsp;&nbsp; 2:00 p.m - 4:00 pm <br>

										sun: Closed
									</p>

									<p class="small">info@arrowdental.co.ke</p>

									<p>
										<ul class="nav navbar-nav">
										  <li>
										    <a href="#" class="social-links" target="_blank">
										          <i class="fa fa-facebook fa-2x fa-inverse"></i>
										    </a>
										  </li>

										  <li>
										    <a href="#" class="social-links" target="_blank">
										          <i class="fa fa-instagram fa-2x fa-inverse"></i>
										    </a>
										  </li>

										  <li>
										    <a href="" class="social-links" target="_blank">
										          <i class="fa fa-twitter fa-2x fa-inverse"></i>
										      </a>
										  </li>&nbsp;

										  <li>
										    <a href="" class="social-links" target="_blank">
										        <i class="fa fa-youtube-play fa-2x fa-inverse"></i>
										    </a>
										  </li>&nbsp;
										        
										  <!-- <li>
										    <a href="http://lsftz.org/swahili" class="label language">
										        <span class="badge badge-danger">Tumia Kiswahili</span>
										    </a>
										  </li>  -->     
										
										</ul>
									</p>
								</div>
							</div>
						</div>
					</div>
					
				</div>

				<div class="col-md-6">
					<form action="/contact" method="POST" role="form">
						{{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" id="" name="name" required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" id="" name="email" required="required">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" id="" name="phone" required="required">
                        </div>
                    
                        <div class="form-group">
                            <label for="">Subject</label>
                            <input type="text" class="form-control" id="" name="subject" required="required">
                        </div>

                        <div class="form-group">
                        	<label for="">Message</label>
                            <textarea id="" class="form-control" rows="6" name="message" required="required" ></textarea>
                        </div>
                    
                        <a href="#" target="_blank" class="btn btn-primary about_btn">&nbsp;&nbsp;More&nbsp;&nbsp;</a>
                    </form>
				</div>
			</div>
		</div>
	</section>


@stop