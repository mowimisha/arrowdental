@extends('layouts.master-layout')

@section ('header')
	
	Appointments - Arrow Dental Centre
@stop

@section ('content')


	<section id="about-page">
		<div class="container">
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
       			                <input type="text" class="form-control inputs" id="" placeholder="Name" name="name" >
       			            </div><br>
       					
       					    <div class="form-group">
       					        <input type="text" class="form-control inputs" id="" placeholder="Phone" name="phone">
       					    </div><br>

       					    <div class="form-group">
       					        <input type="email" class="form-control inputs" id="" placeholder="Email" name="email">
       					    </div><br>

       					    <div class="form-group">
       					      <label for="">I am available on(pick a date and time)</label>
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
			</div><br><br>
		</div>
	</section>


@stop