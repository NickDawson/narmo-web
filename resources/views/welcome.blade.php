@extends('layouts.app')

@section('content')

<section class="mainslider">
  <ul class="bxslider">
    <li><img src="images/petoma_banner1.jpg" alt="Petoma" />
      <div class="textarea">
        <h1>Building and civil engineering contractors</h1>
      </div>
    </li>
    <li><img src="images/petoma_banner2.jpg" alt="Petoma" />
      <div class="textarea">
        <h1>Building and civil engineering contractors</h1>
      </div>
    </li>
    <li><img src="images/petoma_banner3.jpg" alt="Petoma" />
      <div class="textarea">
        <h1>Building and civil engineering contractors</h1>
      </div>
    </li>
  </ul>
</section>
<section class="bluestrip">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 contact_info">
        <p>Looking for a quality constructor for your next project?</p>
      </div>
      <div class="col-sm-4 buttoninfo"><a href="{{ url('contacts')}}" class="contact_button btn-4 btn-4c icon-arrow-right">Contact Us</a></div>
    </div>
  </div>
</section>
<section class="introarea">
  <div class="container">
    <h2>Welcome to our site!</h2>
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-4 welcomebanner"> <img src="images/petoma_introbanner.jpg" alt="" class="Petoma"> </div>
          <div class="col-md-6 col-sm-6 col-xs-8">
            <p>Petoma Works Ltd is an indigenous owned and managed Kenyan firm dealing in civil and structural engineering designs and construction, operating mainly in the East African countries of Kenya, Uganda and Tanzania.</p>
            <a href="{{ url('aboutus')}}" class="btn btn-intro btn-default">learn more</a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="text-center introarea_two">
  <div class="container">
    <h2>Why Narmo</h2>
    <div class="row flow-offset-1">
      <div class="col-xs-6 col-sm-4 icons">
        <div class="iconarea"><img src="images/petoma_workicon.png" alt="" class="Petoma"></div>
        <h4>Rich expertise in various Construction design and Technical Domains</h4>
      </div>
      <div class="col-xs-6 col-sm-4 icons">
        <div class="iconarea"><img src="images/petoma_workingicon.png" alt="" class="Petoma"></div>
        <h4>Our purpose and values define the way we work together and perform as a business.</h4>
      </div>
      <div class="col-xs-6 col-sm-4 icons">
        <div class="iconarea"><img src="images/petoma_building.png" alt="" class="Petoma"></div>
        <h4>We strive to demonstrate the highest standard of integrity in our code of business conduct</h4>
      </div>
    </div>
  </div>
</section>
<section class="projectarea">
  <div class="container">
    <h2>Projects</h2>
    <div class="row">
      <div class="col-xs-6 projectsmall col-sm-3">
        <div class="projectitem"> <img class="img-responsive" src="images/petoma_project1.jpg" alt="">
          <div class="projectitem-text">
            <h3>Building - Drainage</h3>
          </div>
        </div>
      </div>
      <div class="col-xs-6 projectsmall col-sm-3">
        <div class="projectitem"> <img class="img-responsive" src="images/petoma_project2.jpg" alt="">
          <div class="projectitem-text">
            <h3>Renovation</h3>
          </div>
        </div>
      </div>
      <div class="col-xs-6 projectsmall col-sm-3">
        <div class="projectitem"> <img class="img-responsive" src="images/petoma_project3.jpg" alt="">
          <div class="projectitem-text">
            <h3>Roofing</h3>
          </div>
        </div>
      </div>
      <div class="col-xs-6 projectsmall col-sm-3">
        <div class="projectitem"> <img class="img-responsive" src="images/petoma_project4.jpg" alt="">
          <div class="projectitem-text">
            <h3>Design</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="clientlogo_area">
  <div class="container">
    <div class="row">
      <h2>Our Clients</h2>
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