@extends('layouts.app')

@section('content')

<section class="topbanner"> <img src="images/topbanner.jpg" alt="" class="Petoma">
  <div class="topbanner_cont">
    <div class="container">
      <h1 class="topbanner-title">Services</h1>
      <div class="breadcrumb">
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li class="active">Services</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<section class="servicearea">
  <div class="container">
    <div class="row">
      <div class="grid-list columns-list">
        <div class="grid-box row">
          <div class="grid-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="servicebox">
              <div class="row">
                <div class="col-sm-3 iconsmall"> <img src="images/petoma_servicesicon.png" alt="" class="Petoma"> </div>
                <div class="col-md-9">
                  <h3>Building and Design (Turnkey Projects)</h3>
                  <p> Our team of engineers have been involved in designing and construction of various substations. We have been able to finish the projects on time and maintained the highest quality standards in our projects. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="servicebox">
              <div class="row">
                <div class="col-sm-3 iconsmall"> <img src="images/petoma_surveyicon.png" alt="" class="Petoma"> </div>
                <div class="col-md-9">
                  <h3>Architectural & quantity survey</h3>
                  <p> Our team of consultants have been able to provide architectural and quantity survey for various projects as aspects of building industry. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="servicebox">
              <div class="row">
                <div class="col-sm-3 iconsmall"> <img src="images/petoma_projecticon.png" alt="" class="Petoma"> </div>
                <div class="col-md-9">
                  <h3>Project Management services</h3>
                  <p> We have a dedicated team of project managers who from time to time have executed and managed different projects as per demands and expectations. </p>
                </div>
              </div>
            </div>
          </div>
                   <!-- <div class="grid-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="servicebox">
              <div class="row">
                <div class="col-sm-3 iconsmall"> <img src="images/petoma_civilwork.png" alt="" class="Petoma"> </div>
                <div class="col-md-9">
                  <h3>Civil works for substations & power line</h3>
                  <p>We provide civil engineering works in the energy sector dealing with substations and transformer lines from 11Kv to 400 Kv</p>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="servicebox">
              <div class="row">
                <div class="col-sm-3 iconsmall"> <img src="images/petoma_ruralubanicon.png" alt="" class="Petoma"> </div>
                <div class="col-md-9">
                  <h3>Urban & rural development like transformers</h3>
                  <p> We have undertaken various projects with our clients like KPLC and KETRACO to carryout projects for
                    rural &amp; urban developments. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="servicebox">
              <div class="row">
                <div class="col-sm-3 iconsmall"> <img src="images/petoma_pansicon.png" alt="" class="Petoma"> </div>
                <div class="col-md-9">
                  <h3>Dams, Water pans and Irrigation</h3>
                  <p> We have undertaken various projects dealing with construction &amp; solutions based on works in dams, water pans and irrigation. </p>
                </div>
              </div>
            </div>
          </div> -->
                  <div class="grid-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="servicebox">
              <div class="row">
                <div class="col-sm-3 iconsmall"> <img src="images/petoma_roadicon.png" alt="" class="Petoma"> </div>
                <div class="col-md-9">
                  <h3>Bitumen and paved roads</h3>
                  <p> We have undertaken various paved roads projects for both bitumen and paved blocks for various clients such as Mbeya City Council </p>
                </div>
              </div>
            </div>
          </div>  
                    <div class="grid-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="servicebox">
              <div class="row">
                <div class="col-sm-3 iconsmall"> <img src="images/petoma_trenchicon.png" alt="" class="Petoma"> </div>
                <div class="col-md-9">
                  <h3>Cable trenches and drains</h3>
                  <p> Petoma works has done various civil works on substation cable trenches for both government sponsored, World Bank and private companies </p>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="servicebox">
              <div class="row">
                <div class="col-sm-3 iconsmall"> <img src="images/petoma_levelingicon.png" alt="" class="Petoma"> </div>
                <div class="col-md-9">
                  <h3>Earthworks to formation level</h3>
                  <p> We have carried out excavation works to formation levels for substations and parking lots, including basement excavations for power lines installations. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="servicebox">
              <div class="row">
                <div class="col-sm-3 iconsmall"> <img src="images/petoma_fenceicon.png" alt="" class="Petoma"> </div>
                <div class="col-md-9">
                  <h3>Chain link fencing and Masonry boundary walls</h3>
                  <p> We've done fencing works for both chain link and masonry walls and electric fence and razor works </p>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="servicebox">
              <div class="row">
                <div class="col-sm-3 iconsmall"> <img src="images/petoma_workassoicon.png" alt="" class="Petoma"> </div>
                <div class="col-md-9">
                  <h3>Control building and associated works</h3>
                  <p> We have done works in construction of substation control buildings to required specification and with
                    the highest quality standards. </p>
                </div>
              </div>
            </div>
          </div>
            <div class="grid-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="servicebox">
              <div class="row">
                <div class="col-sm-3 iconsmall"> <img src="images/petoma_transporticon.png" alt="" class="Petoma"> </div>
                <div class="col-md-9">
                  <h3>Transportation</h3>
                  <p> We offer transport solutions for both building and civil works materials and also equipment within and outside the country. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

@include('common.clients')


@include('common.footer')

@endsection