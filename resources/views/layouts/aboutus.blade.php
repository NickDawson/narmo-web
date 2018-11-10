@extends('layouts.app')

@section('content')

<section class="topbanner"> <img src="images/topbanner.jpg" alt="" class="Petoma">
  <div class="topbanner_cont">
    <div class="container">
      <h1 class="topbanner-title">About Us</h1>
      <div class="breadcrumb">
        <ol class="breadcrumb">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li class="active">About Us</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<section class="aboutcont">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2>History and Legal Status</h2>
        <p>NARMO COMPANY LIMITED is based in Iringa, Southern of Tanzania and is a main
construction company established in 2016, specializing in International and Local construction
industry.</p>
        <p>NARMO COMPANY LIMITED takes on the role of main contractor from small, medium to
large size projects and performs project management services trades for local and international
projects.
Our objective is to provide our clients with an “I am assured” experience when we are chosen to
execute their projects. Our emphasis on clear communication and follow-through procedures
ensures that client’s objectives are top priority in the planning and execution of our projects.
Our size & structure allow us to manage a number of projects at one time. Our site managers
have the experience and skills necessary to lead our teams through from inception to completion
with little or without disruption.
The company undertakes various works from different categories include private and public
housing; factories, offices and retail units; schools, hospitals and public buildings; civil
engineering and infrastructure projects.</p>
        <p>We take pride on our delivery, thus our clients can always be assured that only the most
experienced and qualified people are serving them.</p>
      </div>
      <div class="col-lg-6 aboutpic"> <img src="images/petoma_aboutpic.jpg" alt="" class="Petoma"> </div>
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
      <div class="col-lg-6 aboutpic"> <img src="images/petoma_aboutpic.jpg" alt="" class="Petoma"> </div>
      <div class="col-lg-6">
        <h2>Our Business Principles</h2>
        <ul>
          <li>
            <h4>Client Orientation.</h4>
            We do not just provide professional services, we help our clients find optimal solutions and expand options to better operations procedures.</li>
          <li>
            <h4>Employees Engagement.</h4>
            Our corporate system allows for boosting of market options and the summary effect of teamwork and respect of employees</li>
          <li>
            <h4>Quality of service</h4>
            Permanent improvement of the quality of our services is an alienable condition for our prosperity</li>
          <li>
            <h4>Legislation Adherence</h4>
            Though we act as buffer between the employer and Labor institutions, we never circumvent the law.</li>
        </ul>
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