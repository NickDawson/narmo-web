@extends('layouts.app')

@section('content')

<section class="topbanner"> <img src="images/topbanner.jpg" alt="" class="Petoma">
  <div class="topbanner_cont">
    <div class="container">
      <h1 class="topbanner-title">Our Leadership</h1>
      <div class="breadcrumb">
        <ol class="breadcrumb">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('aboutus') }}">About Us</a></li>
          <li class="active">Leadership</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<section class="leadershiparea">
  <div class="container">
    <div class="row">
      <p>A team of professionals with hands on expertise in Engineering background and Labour Management</p>
      <p>Narmo Company Ltd recognizes Teamwork, Productivity and Values as the necessary ingredients for Success. The management team comprises of professionals with rich experience in project management, risk assessment management, Design and Financial Management.</p>
     
      <article class="orgarea">
        <div class="topstructure">
		  <div class="row structurearea">
            <div class="col-sm-4 panelstructure_one structureone">
              <div class="timline-panel">
                <div class="timline-overlay"></div>
                <h4>Chairman</h4>
              </div>
            </div>
          </div>
          <div class="row structurearea">
            <div class="col-sm-4 panelstructure_one structureone">
              <div class="timline-panel">
                <div class="timline-overlay"></div>
				
                <h4>Managing director</h4>
              </div>
            </div>
          </div>
          <div class="row structurearea">
            <div class="col-sm-4 panelstructure_one">
              <div class="timline-panel">
                <div class="timline-overlay"></div>
                <h4>Board of directors</h4>
              </div>
            </div>
          </div>
          <div class="posted-date">
            <ul class="posted list-inline">
            </ul>
          </div>
          <div class="row structurearea">
            <div class="col-md-6">
              <div class="col-sm-6 panelstructure_one">
                <div class="timline-panel timline_light">
                  <div class="timline-overlay"></div>
                  <h4>Civil engineer director</h4>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="col-sm-6 panelstructure_one">
                <div class="timline-panel timline_light">
                  <div class="timline-overlay"></div>
                  <h4>Finance & human resource director</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="row structurearea">
            <div class="col-xs-12 col-sm-8">
              <div class="posted-date posted-date2">
                <ul class="posted list-inline postedinside">
                  <li class="arrowdown1"></li>
                  <li class="arrowdown2"></li>
                </ul>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="timline-panel timline_darklight">
                  <div class="timline-overlay"></div>
                  <h4>Electical engineer</h4>
                </div>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="timline-panel timline_darklight timline-nobefore">
                  <div class="timline-overlay"></div>
                  <h4>Civil engineer</h4>
                  <div class="longarrow"></div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="timline-panel timline_darklight">
                  <div class="timline-overlay"></div>
                  <h4>Senior surveryors</h4>
                </div>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="timline-panel timline_darklight">
                  <div class="timline-overlay"></div>
                  <h4>Mechanical engineer</h4>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-4">
              <div class="col-sm-12 col-xs-6">
                <div class="timline-panel timline_darklight timline-nobefore">
                  <div class="timline-overlay"></div>
                  <h4>Finance & Human Resource manager</h4>
                  <div class="longarrow longarrowtwo"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row structurearea structearea-nomargin">
            <div class="col-xs-12 col-sm-8">
              <div class="col-sm-3 col-xs-6">
                <div class="timline-panel timline_dark timline-nobefore">
                  <div class="timline-overlay"></div>
                  <h4>Draught man</h4>
                </div>
              </div>
              <div class="col-sm-3 col-xs-6"> 
                <!--<div class="timline-panel">
                  <div class="timline-overlay"></div>
                  <h4>Civil engineer</h4>
                </div>--> 
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="timline-panel timline_dark timline-nobefore">
                  <div class="timline-overlay"></div>
                  <h4>surveryors</h4>
                </div>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="timline-panel timline_dark timline-nobefore">
                  <div class="timline-overlay"></div>
                  <h4>Safety Officer</h4>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-4">
              <div class="col-sm-12 col-xs-6"> </div>
            </div>
          </div>
          <div class="row structurearea">
            <div class="col-xs-12 col-sm-8">
              <div class="posted-date posted-date2">
                <ul class="posted list-inline postedinside">
                  <li class="arrowdown1"></li>
                  <li class="arrowdown2"></li>
                </ul>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="timline-panel timline-nobefore">
                  <div class="timline-overlay"></div>
                  <h4>Site Agent</h4>
                </div>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="timline-panel timline-nobefore">
                  <div class="timline-overlay"></div>
                  <h4>Foreman</h4>
                </div>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="timline-panel timline-nobefore">
                  <div class="timline-overlay"></div>
                  <h4>Artisans</h4>
                </div>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="timline-panel timline-nobefore">
                  <div class="timline-overlay"></div>
                  <h4>Support Staff</h4>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-4">
              <div class="col-sm-12 col-xs-6"> </div>
            </div>
          </div>
          <div class="row structurearea">
            <div class="col-xs-6 col-sm-4">
              <div class="col-sm-12 col-xs-6"> </div>
            </div>
            <div class="col-xs-12 col-sm-8">
              <div class="posted-date posted-date2">
                <ul class="posted list-inline postedinside">
                  <li class="arrowdown1"></li>
                  <li class="arrowdown2"></li>
                </ul>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="timline-panel timline_dark timline-nobefore">
                  <div class="timline-overlay"></div>
                  <h4>Business Accountant</h4>
                </div>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="timline-panel timline_dark timline-nobefore">
                  <div class="timline-overlay"></div>
                  <h4>Admin Assistant</h4>
                </div>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="timline-panel timline_dark timline-nobefore">
                  <div class="timline-overlay"></div>
                  <h4>Human Resource officer</h4>
                </div>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="timline-panel timline_dark timline-nobefore">
                  <div class="timline-overlay"></div>
                  <h4>It Technician</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>
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
        <h2>Our Strength</h2>
        <ul>
          <li>Proven track record to take up big size projects.</li>
          <li>Highly qualified management team and experienced employee base.</li>
          <li>Healthy blend between capital intensive and labor intensive resources.</li>
          <li>Meeting and delivering quality as per our customer requirements before date of completion </li>
        </ul>
      </div>
    </div>
  </div>
</section>

@include('common.clients')


@include('common.footer')

@endsection