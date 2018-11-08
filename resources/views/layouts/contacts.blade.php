@extends('layouts.app')

@section('content')


<section class="topbanner"> <img src="images/topbanner.jpg" alt="" class="Petoma">
  <div class="topbanner_cont">
    <div class="container">
      <h1 class="topbanner-title">Contact Us</h1>
      <div class="breadcrumb">
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li class="active">Contacts</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<section class="topbanner">
  <div class="container">
    <div class="row">
      <div class="contactform">
        <p>To contact us, fill out the form below</p>
		
		@if (Session::has('flash_message'))
          <div class="alert alert-success">
            {{ Session::get('flash_message')}}
          </div>
        @endif
        <form action="{{ route('contact.store')}}" method="POST" class="liveForm" id="contact-form" role="form" data-email-subject="Contact Form" data-show-errors="true" data-hide-form="false" novalidate="">
		  {{ csrf_field() }}
          <input type="hidden" name="form_key" id="form_key" value="78a6ad4325c8876a10264a4af104e6ed">
          <fieldset>
            <div class="row">
              <div class="col-md-12"> 
                <!-- Alert Box-->
                
                <div class="form-group"> 
                  <!-- Name Field -->
                  <div class="control-group">
                    <label class="control-label">Name <span>(Required)</span></label>
                    <div class="controls">
                      <input class="form-control" name="name" type="text" id="inputName" placeholder="Name" required="">
					  @if ($errors->has('name'))
                      <small class="help-block">{{ $errors->first('name')}}</small>
				      @endif
                    </div>
                  </div>
                </div>
                
                <!-- E-mail Field -->
                
                <div class="form-group">
                  <div class="control-group">
                    <label class="control-label">Email <span>(Required)</span></label>
                    <div class="controls">
                      <input class="form-control" name="email" type="email" id="inputEmail" placeholder="Email" required="">
					  @if ($errors->has('email'))
                      <small class="help-block">{{ $errors->first('email')}}</small>
				      @endif
                    </div>
                  </div>
                </div>
                <div class="form-group"> 
                  <!-- Phone Field -->
                  <div class="control-group">
                    <label class="control-label">Phone <span>(Required)</span></label>
                    <div class="controls">
                      <input class="form-control" name="phone" type="text" id="inputPhone" placeholder="Phone" required="">
					  @if ($errors->has('phone'))
                      <p class="help-block">{{ $errors->first('phone')}}</p>
				      @endif
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label">Message <span>(Required)</span></label>
                  <div class="controls">
                    <textarea class="form-control" rows="5" name="message" id="inputMessage" placeholder="Please include as much detail as possible." minlength="0" required="" data-gramm="" data-txt_gramm_id="856c2243-2f7f-2bff-aea3-a8244783ba8c"></textarea>
					@if ($errors->has('message'))
                    <p class="help-block"></p>
				    @endif
                  </div>
                  
                  <!-- Submit Button -->
                  <div class="text-right">
                    <button type="submit" name="sbutton" value="Send" class="btn btn-primary ">Send!</button>
                  </div>
                </div>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
      <div class="cont_sidebar">
        <h3>CONTACT INFORMATION</h3>
        <ul class="sidebar-info">
          <li><i class="fa fa-map-marker"></i><span>Address:</span><br>
            Ipogolo Area, Iringa District,</li>
          <li><i class="fa fa-phone"></i><span>Phone number:</span><br>
            +255766849934/+255678824212</li>
          <li><i class="fa fa-envelope"></i><span>E-mail:</span><br>
            <a href="mailto:info@narmo.co.tz">info@narmo.co.tz</a></li>
        </ul>
        <div class="mb-10"></div>
        <!-- end .mb-10 -->
        
        <ul class="social-icons social-color">
          <li><a href="#" class="facebook_icon"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#" class="twitter_icon"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#" class="instagram_icon"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<div class="maparea">
<iframe width="100%" height="300" src="https://maps.google.com/maps?width=100%&amp;height=300&amp;hl=en&amp;coord=-7.7826018, 35.7106169&amp;q=Ipogolo%20Area%2C%20Iringa%20District+(Narmo%20Company%20Limited)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Narmo Geo Location Area</a></iframe>
</div>

@include('common.clients')


@include('common.footer')

@endsection