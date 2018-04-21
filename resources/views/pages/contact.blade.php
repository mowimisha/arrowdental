@extends('layouts.master-layout')

@section ('header')
	
	Contact - Arrow Dental Centre
@stop

@section ('content')
	<div class="about-jumbotron">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-9">
				<h3>Arrow Dental / Contacts</h3>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	
	<section id="contact-page">
		<div class="container">

			<div class="row">
				<div class="col-md-6 col-sm-6"><br>
					@if(Session::has('flash_message'))
					    <div class="alert alert-success"><em> {!! session('flash_message') !!}</em></div>
					@endif
					
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
                    
                        <button type="submit" class="btn btn-primary about_btn">Send message</button>
                    </form>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5 col-sm-4 text-center">
					<h3>Write a Message</h3>
					<p>Leave us any questions and get a reply as soon as possible</p><br><br>


					<h4>Find us on Social Media</h4>
					<a href="#" target="_blank">
					    <span class="fa-stack fa-lg">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span>
					</a>

					<a href="#">
					    <span class="fa-stack fa-lg">
						    <i class="fa fa-circle fa-stack-2x"></i>
						    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
				        </span>
				    </a>

				    <a href="#" target="_blank">
					    <span class="fa-stack fa-lg">
						    <i class="fa fa-circle fa-stack-2x"></i>
						    <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
				        </span>
				    </a><br><br><br>

					<i class="fa fa-3x fa-phone"></i>
				    <p>&nbsp;&nbsp;  <strong>Call Us</strong><br>
				      &nbsp;&nbsp; +255 22 2781061
				    </p>
				    
				</div>
				
			</div><br><br>


			<div class="row">
				<div class="col-md-12 col-sm-10 text-center">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.818118919251!2d36.816513265365!3d-1.2829622490642414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d3ef209345%3A0xa5981535f1d374e3!2sYala+Towers%2C+Biashara+St%2C+Nairobi!5e0!3m2!1sen!2ske!4v1524133064704" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>

		</div>
	</section>

@stop