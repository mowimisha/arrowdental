	@extends('layouts.master-layout')

@section ('header')
	
	Arrow Dental Centre	
@stop


@section ('content')
	
	<!-- <div class="jumbotron">
		<div class="container">
			

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 pull-right">
					<div id="carousel-id" class="carousel slide" data-ride="carousel" data-interval="20000">
						<div class="carousel-inner">
							<div class="item active">
								<div class="">
									<p>
										<h1 class="small">--Get your stylish</h1>
										<h1 class="main"><span>Be</span> Bold<span>.</span.</h1>
									</p>

									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt quaerat doloremque est blanditiis sint, nostrum tempora aliquam, itaque, accusantium autem quis. Cupiditate iusto obcaecati beatae veniam dicta a, itaque laudantium, cumque atque deleniti expedita dolores!

 										<p class="name"><span>Mike Magero</span></p>
 									</p><br>

 									<p>
 										<a class="" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
										<a class="" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
									</p>
								</div>
							</div>
							<div class="item">
								<div class="">
									<p>
										<h1 class="small">--Get your stylish</h1>
										<h1 class="main"><span>Be</span>  Beautiful<span>.</span></h1>
									</p>

									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet doloribus nobis reprehenderit laborum accusamus neque quos sit quia odio a quas, omnis, excepturi necessitatibus fugiat libero mollitia praesentium alias, suscipit cumque distinctio, totam molestiae velit.

 										<p class="name"><strong>Mike Magero</strong></p>
 									</p><br>

 									<p>
 										<a class="" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
										<a class="" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
									</p>
								</div>
							</div>
							<div class="item ">
								<div class="">
									<p>
										<h1 class="small">--Get your stylish</h1>
										<h1 class="main"><span>Be</span>  Unique<span>.</span></h1>
									</p>

									<p>	
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, consequuntur inventore voluptatibus fugiat fugit, ea! Cum at eius iste facilis sapiente numquam libero laborum veritatis eos est distinctio harum, provident accusantium error beatae repellendus rerum.

										<p class="name"><strong>Mike Magero</strong></p>
 									</p><br>

 									<p>
 										<a class="" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
										<a class="" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
									</p>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</div> -->

	<div id="main-carousel-id" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-id" data-slide-to="0" class=""></li>
			<li data-target="#carousel-id" data-slide-to="1" class=""></li>
			<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item">
				<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="../images/dental1.jpg">
				<!-- <div class="container">
					<div class="carousel-caption">
						<h1>Example headline.</h1>
						<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
						<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
					</div>
				</div> -->
			</div>
			<div class="item">
				<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="../images/dental2.jpg">
				<!-- <div class="container">
					<div class="carousel-caption">
						<h1>Another example headline.</h1>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
					</div>
				</div> -->
			</div>
			<div class="item active">
				<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="../images/dental3.jpg">
				<!-- <div class="container">
					<div class="carousel-caption">
						<h1>One more for good measure.</h1>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
					</div>
				</div> -->
			</div>
		</div>
		<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>


	<section id="about" class="section">
	  <!-- Container Starts -->
	  <div class="container">
	      <div class="row">
	        <div class="col-md-7">
	        	<h1 class="small">--&nbsp; About Us</h1>
	            <h3>crowning . fillings . Implants etc...</h3>
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam fuga officia quaerat ipsam quam reiciendis, odio vero voluptatem nisi obcaecati aut natus distinctio cum quo labore rerum perferendis dolor recusandae sint dolorem. Recusandae, repellendus, voluptates..</p>

	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum deserunt odio tempore temporibus itaque autem iusto totam placeat vel? Saepe veritatis itaque voluptatem ut laudantium quisquam alias odit iure, similique, veniam quod animi. Quam, odio!</p>

	            <a href="#" target="_blank" class="btn btn-primary about_btn">&nbsp;&nbsp;More&nbsp;&nbsp;</a>
	        </div>

	        <div class="col-md-5">
	        	<img src="../images/asset29.jpeg" alt="">
	        </div>
	    </div>
	  </div>
	</section>	


	<section id="services">
		<div class="container">
			

			<div class="blog">
				<div class="row">	
					<div class="col-md-6">
						<h1 class="small">--- services</h1>
						<h1 class="blog-title">What we Offer</h1>
					</div>
				</div>


				<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class=" text-center">
						<img src="images/asset5.jpeg" alt="">	
							<div class="m-accordion m-accordion--default" id="m_accordion_1" role="tablist">
								<!--begin::Item-->
								<div class="m-accordion__item">
									<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_1_item_1_head" data-toggle="collapse" href="#m_accordion_1_item_1_body" aria-expanded="false">
										<span class="m-accordion__item-icon">
											<i class="fa flaticon-user-ok"></i>
										</span>
										<span class="m-accordion__item-title">
											<h4>Crowning</h4>
										</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_1_item_1_body" role="tabpanel" aria-labelledby="m_accordion_1_item_1_head" data-parent="#m_accordion_1" style="">
										<div class="m-accordion__item-content">
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repellendus laborum obcaecati, dolores nihil neque maxime! Adipisci eligendi suscipit, quas, distinctio doloribus a tempore harum, laboriosam unde rem magnam quis.
											</p>
										</div>
									</div>
								</div>
								<!--end::Item--> 
							</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4 ">
					<div class=" text-center">
						<img src="images/asset5.jpeg" alt="">
							<div class="m-accordion m-accordion--default" id="m_accordion_1" role="tablist">
								<!--begin::Item-->
								<div class="m-accordion__item">
									<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_2_item_2_head" data-toggle="collapse" href="#m_accordion_2_item_2_body" aria-expanded="false">
										<span class="m-accordion__item-icon">
											<i class="fa flaticon-user-ok"></i>
										</span>
										<span class="m-accordion__item-title">
											<h4>Root Canal</h4>
										</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_2_item_2_body" role="tabpanel" aria-labelledby="m_accordion_1_item_1_head" data-parent="#m_accordion_1" style="">
										<div class="m-accordion__item-content">
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione excepturi quaerat sit nesciunt, dolorum architecto eos dicta corrupti, itaque eveniet accusantium unde eligendi dolore nemo quos tempore molestiae laudantium impedit!
											</p>
										</div>
									</div>
								</div>
								<!--end::Item--> 
							</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class=" text-center">
						<img src="images/asset5.jpeg" alt="">
						<div class="m-accordion m-accordion--default" id="m_accordion_1" role="tablist">
								<!--begin::Item-->
								<div class="m-accordion__item">
									<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_3_item_3_head" data-toggle="collapse" href="#m_accordion_3_item_3_body" aria-expanded="false">
										<span class="m-accordion__item-icon">
											<i class="fa flaticon-user-ok"></i>
										</span>
										<span class="m-accordion__item-title">
											<h4>Fillings</h4>
										</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_3_item_3_body" role="tabpanel" aria-labelledby="m_accordion_1_item_1_head" data-parent="#m_accordion_1" style="">
										<div class="m-accordion__item-content">
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam laudantium reprehenderit non, sit quia accusantium ea. Voluptas fugit consequatur inventore aliquid maxime explicabo sint dolorum adipisci ad, delectus vitae libero.
											</p>
										</div>
									</div>
								</div>
								<!--end::Item--> 
							</div>						
					</div>
				</div>

				
			</div><br><br>


			<div class="row">
				

				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class=" text-center">
						<img src="images/asset5.jpeg" alt="">
							<div class="m-accordion m-accordion--default" id="m_accordion_1" role="tablist">
								<!--begin::Item-->
								<div class="m-accordion__item">
									<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_4_item_4_head" data-toggle="collapse" href="#m_accordion_4_item_4_body" aria-expanded="false">
										<span class="m-accordion__item-icon">
											<i class="fa flaticon-user-ok"></i>
										</span>
										<span class="m-accordion__item-title">
											<h4>Cosmetic Dentistry</h4>
										</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_4_item_4_body" role="tabpanel" aria-labelledby="m_accordion_1_item_1_head" data-parent="#m_accordion_1" style="">
										<div class="m-accordion__item-content">
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa doloribus a nobis eveniet inventore iusto, natus quae, dignissimos. Quam blanditiis distinctio, nulla magnam hic cupiditate, et aspernatur ipsam laudantium deserunt.
											</p>
										</div>
									</div>
								</div>
								<!--end::Item--> 
							</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4 ">
					<div class=" text-center">
						<img src="images/asset5.jpeg" alt="">
							<div class="m-accordion m-accordion--default" id="m_accordion_1" role="tablist">
								<!--begin::Item-->
								<div class="m-accordion__item">
									<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_5_item_5_head" data-toggle="collapse" href="#m_accordion_5_item_5_body" aria-expanded="false">
										<span class="m-accordion__item-icon">
											<i class="fa flaticon-user-ok"></i>
										</span>
										<span class="m-accordion__item-title">
											<h4>Invisalign</h4>
										</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_5_item_5_body" role="tabpanel" aria-labelledby="m_accordion_1_item_1_head" data-parent="#m_accordion_1" style="">
										<div class="m-accordion__item-content">
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis voluptate error numquam harum vitae atque porro ad aspernatur in delectus autem minima ratione quia quo, odit excepturi placeat repellendus eligendi.
											</p>
										</div>
									</div>
								</div>
								<!--end::Item--> 
							</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class=" text-center">
						<img src="images/asset5.jpeg" alt="">
							<div class="m-accordion m-accordion--default" id="m_accordion_1" role="tablist">
								<!--begin::Item-->
								<div class="m-accordion__item">
									<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_6_item_6_head" data-toggle="collapse" href="#m_accordion_6_item_6_body" aria-expanded="false">
										<span class="m-accordion__item-icon">
											<i class="fa flaticon-user-ok"></i>
										</span>
										<span class="m-accordion__item-title">
											<h4>Porcelain Veneers</h4>
										</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_6_item_6_body" role="tabpanel" aria-labelledby="m_accordion_1_item_1_head" data-parent="#m_accordion_1" style="">
										<div class="m-accordion__item-content">
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus natus magnam accusamus, neque inventore, consequuntur cum dolor fuga enim obcaecati quod, reiciendis esse nisi atque at a delectus aliquam vitae.
											</p>
										</div>
									</div>
								</div>
								<!--end::Item--> 
							</div>
					</div>
				</div>
			</div><br><br>


			<div class="row">
				

				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class=" text-center">
						<img src="images/asset5.jpeg" alt="">
							<div class="m-accordion m-accordion--default" id="m_accordion_1" role="tablist">
								<!--begin::Item-->
								<div class="m-accordion__item">
									<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_7_item_7_head" data-toggle="collapse" href="#m_accordion_7_item_7_body" aria-expanded="false">
										<span class="m-accordion__item-icon">
											<i class="fa flaticon-user-ok"></i>
										</span>
										<span class="m-accordion__item-title">
											<h4>Dental Implants</h4>
										</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_7_item_7_body" role="tabpanel" aria-labelledby="m_accordion_1_item_1_head" data-parent="#m_accordion_1" style="">
										<div class="m-accordion__item-content">
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores optio reiciendis voluptates in veniam doloremque vel accusamus modi ducimus, debitis amet? Placeat tempore, asperiores ab ea molestias perspiciatis vero quo.
											</p>
										</div>
									</div>
								</div>
								<!--end::Item--> 
							</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4 ">
					<div class=" text-center">
						<img src="images/asset5.jpeg" alt="">
							<div class="m-accordion m-accordion--default" id="m_accordion_1" role="tablist">
								<!--begin::Item-->
								<div class="m-accordion__item">
									<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_8_item_8_head" data-toggle="collapse" href="#m_accordion_8_item_8_body" aria-expanded="false">
										<span class="m-accordion__item-icon">
											<i class="fa flaticon-user-ok"></i>
										</span>
										<span class="m-accordion__item-title">
											<h4>Dental Bridging</h4>
										</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_8_item_8_body" role="tabpanel" aria-labelledby="m_accordion_1_item_1_head" data-parent="#m_accordion_1" style="">
										<div class="m-accordion__item-content">
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum assumenda ad ut quas quam necessitatibus recusandae, perferendis autem officia nostrum corporis iste id illo, placeat facilis, nemo ex tenetur doloremque!
											</p>
										</div>
									</div>
								</div>
								<!--end::Item--> 
							</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class=" text-center">
						<img src="images/asset5.jpeg" alt="">
							<div class="m-accordion m-accordion--default" id="m_accordion_1" role="tablist">
								<!--begin::Item-->
								<div class="m-accordion__item">
									<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_9_item_9_head" data-toggle="collapse" href="#m_accordion_9_item_9_body" aria-expanded="false">
										<span class="m-accordion__item-icon">
											<i class="fa flaticon-user-ok"></i>
										</span>
										<span class="m-accordion__item-title">
											<h4>Teeth Whitening</h4>
										</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_9_item_9_body" role="tabpanel" aria-labelledby="m_accordion_1_item_1_head" data-parent="#m_accordion_1" style="">
										<div class="m-accordion__item-content">
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates incidunt labore distinctio atque dignissimos recusandae. Illum quae nihil maiores, eveniet minus beatae, ea perferendis magni eligendi ratione. Magnam, distinctio, sequi.
											</p>
										</div>
									</div>
								</div>
								<!--end::Item--> 
							</div>
					</div>
				</div>
			</div><br><br>
			</div>
		</div>
	</section>

	<section id="team">
		<div class="container">
			

			<div class="blog">
				<div class="row">	
					<div class="col-md-6">
						<h1 class="small">--- team</h1>
						<h1 class="blog-title">We are Arrow Dental</h1>
					</div>
				</div>


				<div class="row">
					<div class="col-md-4">
						
						<img src="../images/asset12.jpeg" alt="">
						<div class="name-plate">
							<p class="title text-center">Dr Mike</p>
							<p class="text-center">Dental Surgeon</p>
						</div>
					</div>

					<div class="col-md-4">
						
						<img src="../images/asset23.jpeg" alt="">
						<div class="name-plate">
							<p class="title text-center">Dr Keith</p>
							<p class="text-center">Dental Surgeon</p>
						</div>
					</div>

					<div class="col-md-4">
						
						<img src="../images/asset25.jpeg" alt="">
						<div class="name-plate">
							<p class="title text-center">Dr Eli</p>
							<p class="text-center">Dental Surgeon</p>
						</div>

						<div class="social-name-plate">
							<div class="social">
							<ul class="nav navbar-nav">
							  <li>
							    <a href="#" class="social-links" target="_blank">
							          <i class="fa fa-facebook fa-2x fa-inverse"></i>
							    </a>
							  </li>

							  <li>
							    <a href="https://twitter.com/LSFTanzania" class="social-links" target="_blank">
							          <i class="fa fa-twitter fa-2x fa-inverse"></i>
							      </a>
							  </li>&nbsp;

							  <li>
							    <a href="https://www.youtube.com/channel/UCcd-5_5j7Lb6ZByEa7Zl9ug" class="social-links" target="_blank">
							        <i class="fa fa-youtube-play fa-2x fa-inverse"></i>
							    </a>
							  </li>&nbsp;
							        
							  <!-- <li>
							    <a href="http://lsftz.org/swahili" class="label language">
							        <span class="badge badge-danger">Tumia Kiswahili</span>
							    </a>
							  </li>  -->     
							
							</ul>
							</div>
						</div>

						
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-6">
					<h1 class="small">--&nbsp; Testimonials</h1>
					<h1 class="main">We value happy clients</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-xs-12 col-sm-12 col-md-8">
					<div id="carousel-id" class="carousel slide" data-ride="carousel" data-interval="20000">
						<div class="carousel-inner">
							<div class="item active">
								<div class="">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt quaerat doloremque est blanditiis sint, nostrum tempora aliquam, itaque, accusantium autem quis. Cupiditate iusto obcaecati beatae veniam dicta a, itaque laudantium, cumque atque deleniti expedita dolores!

 										<p class="name"><strong>Mike Magero</strong></p>
 									</p><br>

 									<p>
 										<a class="" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
										<a class="" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
									</p>
								</div>
							</div>
							<div class="item">
								<div class="">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet doloribus nobis reprehenderit laborum accusamus neque quos sit quia odio a quas, omnis, excepturi necessitatibus fugiat libero mollitia praesentium alias, suscipit cumque distinctio, totam molestiae velit.

 										<p class="name"><strong>Mike Magero</strong></p>
 									</p><br>

 									<p>
 										<a class="" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
										<a class="" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
									</p>
								</div>
							</div>
							<div class="item ">
								<div class="">
									<p>	
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, consequuntur inventore voluptatibus fugiat fugit, ea! Cum at eius iste facilis sapiente numquam libero laborum veritatis eos est distinctio harum, provident accusantium error beatae repellendus rerum.

										<p class="name"><strong>Mike Magero</strong></p>
 									</p><br>

 									<p>
 										<a class="" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
										<a class="" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
									</p>
								</div>
							</div>
						</div>
						<!-- <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> -->
					</div>
					
				</div>
			</div>
		</div>
	</section>


	<section id="appointments">
		
		<div class="container">
			<div class="row">	
				<div class="col-md-2"></div>
				<div class="col-md-6">
					<h1 class="small">--- Appointment</h1>
					<h1 class="blog-title">Book a Session Today	</h1>
				</div>
			</div><br><br>


			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					@if(Session::has('flash_message'))
                         <div class="alert alert-success"><em> {!! session('flash_message') !!}</em></div>
                     @endif

					<form action="/appointments" method="POST" role="form">
       					{{ csrf_field() }}
       					<div class="col-xs-12 col-sm-6 col-md-12">
       						<div class="form-group">
	                            <select name="procedure" id="input" class="form-control">
	                              <option value="">-- Select Procedure --</option>
	                              <option value="Consultation">Consultation</option>
	                              <option value="Teeth Whitening">Teeth Whitening</option>
	                              <option value="Invisalign">Invisalign</option>
	                              <option value="Crowning">Crowning</option>
	                              <option value="Dental Implants">Dental Implants</option>
	                              <option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
	                              <option value="Porcelain">Porcelain Veneers</option>
	                              <option value="Root Canal Therapy">Root Canal Therepy</option>
	                              <option value="Fillings">Fillings</option>
	                            </select>
                            </div><br>

       			            <div class="form-group">
       			                <input type="text" class="form-control inputs" id="" placeholder="First and last name" name="name" >
       			            </div><br>
       					
       					    <div class="form-group">
       					        <input type="text" class="form-control inputs" id="" placeholder="Phone" name="phone">
       					    </div><br>

       					    <div class="form-group">
       					        <input type="email" class="form-control inputs" id="" placeholder="Email" name="email">
       					    </div><br>

       					    <div class="form-group">
       					      <label for="">I am available on(pick a date)</label>
       					        <input class="flatpickr" name="date" type="text" placeholder="Select Date...">
       					        <script>
       					            flatpickr(".flatpickr", {
       					                enableTime: false,
       					                altInput: true,
       					                altFormat: "F j, Y",
       					            });
       					        </script>
       					    </div><br>

                           <div class="form-group">
                               <textarea name="notes" id="input" class="form-control" rows="9" placeholder="Notes"></textarea>
                           </div><br>

                           <button type="submit" class="btn btn-primary about_btn">Book an Appointment</button>
       					</div>
       				
       				    
       				</form>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</section>

	<!-- <section id="location">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-12"></div>
				<div class="col-xs-12 col-md-5 col-sm-6">
					<h3>Need Legal Aid? Talk to a Paralegal</h3>

				</div>
				<div class="col-xs-12 col-md-2 col-sm-6">
					<a href="../pub/RMOsCommunicationsContacts.pdf" target="_blank" class="btn btn-primary">Seek Justice</a>
				</div>
				<div class="col-md-1 col-sm-12"></div>
			</div>
		</div>
	</section> -->

	<section id="gridGallery">
		<div class="container">
			<div class="">
				<div class="col-md-6 pull-left">
					<h1 class="small">--&nbsp; Gallery</h1>
					<h1 class="main">Photo Gallery</h1>
				</div>
			</div>
		</div><br>

		<div class="container">
		    <div class="row">
		      <div class="col-sm-6 col-xs-6 box" id="boxOne">
		        <div class="toggleIcon"></div>
		        <div class="col-sm-6 captionBox hiddenText">
		          <h3>Here is some text</h3>
		          <p>Fixie banh mi blog, YOLO sriracha roof party mumblecore post-ironic. Keytar 90's cornhole drinking vinegar deep v, VHS messenger bag Pinterest. Etsy farm-to-table Intelligentsia Thundercats, pork belly vegan authentic single-origin coffee dreamcatcher
		            bespoke master cleanse street art art party.</p>
		          <p>Fixie banh mi blog, YOLO sriracha roof party mumblecore post-ironic. Keytar 90's cornhole drinking vinegar deep v, VHS messenger bag Pinterest. Etsy farm-to-table Intelligentsia Thundercats, pork belly vegan authentic single-origin coffee dreamcatcher
		            bespoke master cleanse street art art party.</p>
		        </div>
		      </div>

		      <div class="col-sm-3 col-xs-6 box" id="boxTwo">
		        <div class="toggleIcon"></div>
		        <div class="col-sm-6 captionBox hiddenText">
		          <h3>Here is some text</h3>
		          <p>Fixie banh mi blog, YOLO sriracha roof party mumblecore post-ironic. Keytar 90's cornhole drinking vinegar deep v, VHS messenger bag Pinterest. Etsy farm-to-table Intelligentsia Thundercats, pork belly vegan authentic single-origin coffee dreamcatcher
		            bespoke master cleanse street art art party.</p>
		        </div>

		      </div>

		      <div class="col-sm-3 col-xs-6 box" id="boxThree">
		        <div class="toggleIcon"></div>
		        <div class="col-sm-6 captionBox hiddenText">
		          <h3>Here is some text</h3>
		          <p>Fixie banh mi blog, YOLO sriracha roof party mumblecore post-ironic. Keytar 90's cornhole drinking vinegar deep v, VHS messenger bag Pinterest. Etsy farm-to-table Intelligentsia Thundercats, pork belly vegan authentic single-origin coffee dreamcatcher
		            bespoke master cleanse street art art party.</p>
		        </div>

		      </div>

		      <div class="col-sm-3 col-xs-6 box" id="boxFour">
		        <div class="toggleIcon"></div>
		        <div class="col-sm-6 captionBox hiddenText">
		          <h3>Here is some text</h3>
		          <p>Fixie banh mi blog, YOLO sriracha roof party mumblecore post-ironic. Keytar 90's cornhole drinking vinegar deep v, VHS messenger bag Pinterest. Etsy farm-to-table Intelligentsia Thundercats, pork belly vegan authentic single-origin coffee dreamcatcher
		            bespoke master cleanse street art art party.</p>
		        </div>

		      </div>

		      <div class="col-sm-6 col-xs-6 pull-right box" id="boxEight">
		        <div class="toggleIcon"></div>
		        <div class="col-sm-6 captionBox hiddenText">
		          <h3>Here is some text</h3>
		          <p>Fixie banh mi blog, YOLO sriracha roof party mumblecore post-ironic. Keytar 90's cornhole drinking vinegar deep v, VHS messenger bag Pinterest. Etsy farm-to-table Intelligentsia Thundercats, pork belly vegan authentic single-origin coffee dreamcatcher
		            bespoke master cleanse street art art party.</p>
		        </div>

		      </div>

		      <div class="col-sm-3 col-xs-6 pull-right box" id="boxSeven">
		        <div class="toggleIcon"></div>
		        <div class="col-sm-6 captionBox hiddenText">
		          <h3>Here is some text</h3>
		          <p>Fixie banh mi blog, YOLO sriracha roof party mumblecore post-ironic. Keytar 90's cornhole drinking vinegar deep v, VHS messenger bag Pinterest. Etsy farm-to-table Intelligentsia Thundercats, pork belly vegan authentic single-origin coffee dreamcatcher
		            bespoke master cleanse street art art party.</p>
		        </div>

		      </div>

		      <div class="col-sm-3 col-xs-6 box" id="boxFive">
		        <div class="toggleIcon"></div>
		        <div class="col-sm-6 captionBox hiddenText bottomRight">
		          <h3>Here is some text</h3>
		          <p>Fixie banh mi blog, YOLO sriracha roof party mumblecore post-ironic. Keytar 90's cornhole drinking vinegar deep v, VHS messenger bag Pinterest. Etsy farm-to-table Intelligentsia Thundercats, pork belly vegan authentic single-origin coffee dreamcatcher
		            bespoke master cleanse street art art party.</p>
		        </div>

		      </div>

		      <div class="col-sm-3 col-xs-6 box" id="boxSix">
		        <div class="toggleIcon"></div>
		        <div class="col-sm-6 captionBox hiddenText bottomRight">
		          <h3>Here is some text</h3>
		          <p>Fixie banh mi blog, YOLO sriracha roof party mumblecore post-ironic. Keytar 90's cornhole drinking vinegar deep v, VHS messenger bag Pinterest. Etsy farm-to-table Intelligentsia Thundercats, pork belly vegan authentic single-origin coffee dreamcatcher
		            bespoke master cleanse street art art party.</p>
		        </div>

		      </div>


		    </div>
		    <!--.row-->

		  </div>
	</section>

	<section id="partners">
		<div class="container">
			<div class="row">	
				<div class="col-md-12">
					<h1 class="small">--&nbsp; Partners</h1>
					<h2 class="main">We partner with</h2>
				</div>
			</div><br>

			<div class="row">
				<div class="partners">
					<div class="col-md-2">
						<img src="../images/jubilee.jpg">
					</div>
					<div class="col-md-2">
						<img src="../images/britam.jpg">
					</div>
					<div class="col-md-2">
						<img src="../images/saham.jpg">
					</div>
					<div class="col-md-2">
						<img src="../images/sanlam.png">
					</div>
					<div class="col-md-2">
						<img src="../images/first.png">
					</div>
					<div class="col-md-2">
						<img src="../images/britam.jpg">
					</div>
				</div>


				<div class="partners">
					<div class="col-md-2">
						<img src="../images/jubilee.jpg">
					</div>
					<div class="col-md-2">
						<img src="../images/jubilee.jpg">
					</div>
					<div class="col-md-2">
						<img src="../images/jubilee.jpg">
					</div>
					<div class="col-md-2">
						<img src="../images/jubilee.jpg">
					</div>
					<div class="col-md-2">
						<img src="../images/jubilee.jpg">
					</div>
					<div class="col-md-2">
						<img src="../images/jubilee.jpg">
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="blog">
		<div class="container">
			<div class="row">
				

				<div class="blog">
					<div class="row">	
						<div class="col-md-6">
							<h1 class="small">--- Blog</h1>
							<h1 class="blog-title">Latest Posts</h1>
						</div>
					</div>


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