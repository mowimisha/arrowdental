
@extends('layouts.app')

@section('header')
    New Appointment - Arrow Dental
@endsection

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
          <div class="row bg-title">
              <div class="col-md-1"></div>
              <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h4 class="page-title">Create New Appointment</h4> 
              </div>
              
              <!-- /.col-lg-12 -->
          </div><br>


          <script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
          <script type="text/javascript">
            tinymce.init({
              selector : "textarea",
              plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
              toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
            }); 
          </script>


          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-9">
              <div class="">
                 <div class="col-md-6">
                   @if(Session::has('flash_message'))
                       <div class="alert alert-success"><em> {!! session('flash_message') !!}</em></div>
                   @endif
                 </div>
              </div>
              <form action="/new-appointment" method="POST" role="form">
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
          </div>


      </div>
  </section>
  <!-- /.content -->
</div>
@endsection

































