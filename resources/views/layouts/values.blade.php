@extends('layouts.app')

@section('content')

<section class="topbanner"> <img src="images/topbanner.jpg" alt="" class="Petoma">
  <div class="topbanner_cont">
    <div class="container">
      <h1 class="topbanner-title">Our values</h1>
      <div class="breadcrumb">
        <ol class="breadcrumb">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('aboutus') }}">About Us</a></li>
          <li class="active">Values</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<section class="aboutcont">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2>Our Motto</h2>
        <p>Our motto is the complete satisfaction of our clients by delivering quality construction within
          stipulated time frame.</p>
        <p>Narmo Company Ltd growth can be attributed towards its capability to adhere its module of adopting, enduring and to remain credible among all its competitors.</p>
        <h2>Our Mission</h2>
        <p>To become a leader in infrastructure business by providing trust, integrity and customer orientation</p>
        <h2>Our Vision</h2>
        <p>Narmo Company Ltd works towards being a strong and qualitative conscious company in the area of engineering procurement and construction of infrastructure development.</p>
      </div>
      <div class="col-lg-6 aboutpic"> <video width="400" controls>
                  <source src="images/video.mp4" type="video/mp4">
                  Your browser does not support HTML5 video.
                </video> </div>
    </div>
  </div>
</section>
<section class="text-center introarea_two">
  <div class="container">
    <h2>Why Narmo</h2>
    <div class="row flow-offset-1">
      <div class="col-xs-6 col-sm-4 icons">
        <div class="iconarea"><img src="images/petoma_workicon.png" alt="" class="Petoma"></div>
        <h4>Rich expertise in various Contraction design and Technical Domains</h4>
      </div>
      <div class="col-xs-6 col-sm-4 icons">
        <div class="iconarea"><img src="images/petoma_workingicon.png" alt="" class="Petoma"></div>
        <h4>Our purpose and values define the way we work together and perform as a business.</h4>
      </div>
      <div class="col-xs-6 col-sm-4 icons">
        <div class="iconarea"><img src="images/petoma_building.png" alt="" class="Petoma"></div>
        <h4>we strive to demonstrate the highest standard of integrity in our code of business conduct</h4>
      </div>
    </div>
  </div>
</section>
<section class="aboutcont">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 aboutpic"> <video width="400" controls>
                  <source src="images/chuma.mp4" type="video/mp4">
                  Your browser does not support HTML5 video.
                </video> </div>
      <div class="col-lg-6">
        <h2>Our Objective</h2>
        <p>Micro analysis on a given project with macro execution for best performance.</p>
        <p>Adhering to suitable project planning to provide better efficiency and cost control.</p>
        <p>To encourage innovation, team work, upgrading knowledge & skill of employees and safe working environment.</p>
        <p>To complete a given project in a stipulated and the best way possible.</p>
        <!--        <h2>Our Strength</h2>
<ul>
<li>Proven track record to take up big size projects.</li>
<li>Highly qualified management team and experienced employee base.</li>
<li>Healthy blend between capital intensive and labor intensive resources.</li>
<li>Meeting and delivering quality as per our customer requirements before date of completion
</li>
</ul>--> 
      </div>
    </div>
  </div>
</section>
<section class="clientlogo_area">
  <div class="container">
    <div class="row">
      <h2></h2>
      <div id="demo">
        <div class="span12">
          <div id="owl-demo" class="owl-carousel">
            <div class="item item-owl"><img src="images/client1.png" alt=""></div>
            <div class="item item-owl"><img src="images/client2.png" alt=""></div>
            <div class="item item-owl"><img src="images/client3.png" alt=""></div>
            <div class="item item-owl"><img src="images/client4.png" alt=""></div>
            <div class="item item-owl"><img src="images/client5.png" alt=""></div>
            <div class="item item-owl"><img src="images/client6.png" alt=""></div>
            <div class="item item-owl"><img src="images/client7.png" alt=""></div>
            <div class="item item-owl"><img src="images/client8.png" alt=""></div>
            <div class="item item-owl"><img src="images/client9.png" alt=""></div>
            <div class="item item-owl"><img src="images/client10.png" alt=""></div>
            <div class="item item-owl"><img src="images/client11.png" alt=""></div>
            <div class="item item-owl"><img src="images/client12.png" alt=""></div>
            <div class="item item-owl"><img src="images/client13.png" alt=""></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

@include('common.footer')

@endsection