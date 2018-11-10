<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Narmo Company Limited</title>
	
	<!---Favicon--->
    <link rel="shortcut icon" href="{{ asset('images/narmo_logo.PNG') }}" type="image/x-icon">

      <!---Css--->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css">

    <!---Javascript--->
    <script src="{{ asset('js/googleapis.js') }}"></script>
    <script src="{{ asset('js/jquery.bxslider.js') }}"></script>
    <script src="{{ asset('js/scrollReveal.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
	
	  <style type="text/css">
    #video-style{
    border:2px solid grey;
    padding:5px;
/**Or add your own style**/
}
    </style type="text/css">
	
	<style>
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>

	
</head>

<body>
  <!--<header class="topheader">
    <div class="container">
      <div class="align-right">
        <ul class="top_contactinfo">
          <li class="mail_icon"><span><a href="mailto:info@narmo.co.tz">info@narmo.co.tz</a></span></li>
          <li class="location_icon"><span>Ipogolo Area, Iringa Tanzania</span></li>
          <li class="phone_icon"><span>+255766849934/+255712674281</span></li>
        </ul>
      </div>
    </div>
  </header>-->
  
  
  <header class="topheader">
  <div class="container">
    <div class="row">
      <div class="logoarea"> <a href="{{ asset('images/narmo_logo.PNG') }}">
	  
        <h6>Narmo Company Limited</h6>
        </a> </div>
      <div class="headinfo">
        <div class="headinfo-middle phone"> <i class="fa fa-phone"></i>
          <h5>PHONE</h5>
          <small>+255766849934 / +255712674281</small>
        </div>
        <div class="headinfo-middle email"> <i class="fa fa-envelope-o"></i>
          <h5>EMAIL</h5>
          <small><a href="mailto:info@narmo.co.tz">info@narmo.co.tz</a></small></div>
      </div>
    </div>
  </div>
</header>
  
  <header class="mainheader">
  <div class="container">
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-menu2"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="collapse navbar-collapse" id="nav-menu2">
        <ul class="navigation">
          <li class="active"><a href="{{ url('/') }}">Home</a> </li>
          <li><a href="{{ url('aboutus') }}">About company</a>
            <ul>
              <li><a href="{{ url('values') }}">Core Values</a></li>
              <li><a href="{{ url('leadership') }}">Leadership</a></li>
            </ul>
          </li>
          <li><a href="{{ url('equipments') }}">Equipments & Machinery</a></li>
          <li><a href="{{ url('services') }}">Services</a></li>
          <li><a href="{{ url('projects') }}">Projects</a>
            <ul>
              <li><a href="{{ url('ongoingprojects') }}">Onging projects</a></li>
            </ul>
          </li>
          <li><a href="{{ url('gallery') }}"> Gallery</a></li>
          <li><a href="{{ url('contacts') }}">Contact Us</a></li>
        </ul>
      </div>
    </nav>
  </div>
  </div>
</header>


      @yield('content')
	  
	  
	<script type="text/javascript" src="{{ asset('js/jquery.bxslider.js')}}"></script> 
    <script type="text/javascript" src="{{ asset('js/owl.carousel.js')}}"></script>

<script type="text/javascript">
$.noConflict();
jQuery(document).ready(function(){
    jQuery('.bxslider').bxSlider({
	mode: 'fade',
	controls: false,
	pager: false
});
});

$.noConflict();
jQuery(document).ready(function() {
  jQuery("#owl-demo").owlCarousel({
	autoPlay: 3000,
	items : 6,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:2
		},
		1000:{
			items:4
		},
		1200:{
			items:5
		}
	},
	pagination : false,
	responsive: true,
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
    navigation : true,
    rewindNav : true,
    scrollPerPage : false,
	navigationText : [
		  "<i class='fa fa-angle-left'></i>",
		  "<i class='fa fa-angle-right'></i>"
		],	
  });
}); 
</script>
</body>
</html>