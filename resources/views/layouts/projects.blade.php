@extends('layouts.app')

@section('content')

<section class="topbanner"> <img src="images/topbanner.jpg" alt="" class="Petoma">
  <div class="topbanner_cont">
    <div class="container">
      <h1 class="topbanner-title">Projects</h1>
      <div class="breadcrumb">
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li class="active">Projects</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<section class="filterarea">
  <div class="container">
    <div class="row">
     <div class="largeprojectarea">
        
        <div id="portfoliolist">
          
          <div class="largeprojectarea">
            <h1 class="leadertitle">Roads</h1>
            <div id="portfoliolist">
              <div class="portfolio design" data-cat="design">
                <div class="portfolio-wrapper">
                  <div class="smallgrid"> <img src="images/petoma_meru1.jpg" alt="petoma">
                    <div class="smallgrid-text">
                      <h3>Roads & Drainage</h3>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="portfolio design" data-cat="design">
                <div class="portfolio-wrapper">
                  <div class="smallgrid"> <img src="images/narmo_construction2.jpeg" alt="petoma">
                    <div class="smallgrid-text">
                      <h3>Mbeya City Council Road</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
          <div class="largeprojectarea">
            <h1 class="leadertitle">Bulidings</h1>
            <div id="portfoliolist">
              <div class="portfolio design" data-cat="design">
                <div class="portfolio-wrapper">
                  <div class="smallgrid"> <img src="images/petoma_lamu1.jpg" alt="petoma">
                    <div class="smallgrid-text">
                      <h3>Boundary Wall</h3>
                      <p>Iringa</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio exterior" data-cat="exterior">
                <div class="portfolio-wrapper">
                  <div class="smallgrid"> <img src="images/petoma_lamu2.jpg" alt="petoma">
                    <div class="smallgrid-text">
                      <h3>Boundary Wall</h3>
                      <p>Iringa</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio exterior" data-cat="exterior">
                <div class="portfolio-wrapper">
                  <div class="smallgrid"> <img src="images/petoma_lamu3.jpg" alt="petoma">
                    <div class="smallgrid-text">
                      <h3>Boundary Wall</h3>
                      <p>Iringa</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio building" data-cat="building">
                <div class="portfolio-wrapper">
                  <div class="smallgrid"> <img src="images/petoma_meru2.jpg" alt="petoma">
                    <div class="smallgrid-text">
                      <h3>Roads & Drainage</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio design" data-cat="design">
                <div class="portfolio-wrapper">
                  <div class="smallgrid"> <img src="images/petoma_meru3.jpg" alt="petoma">
                    <div class="smallgrid-text">
                      <h3>Building & Architectural Designs</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio building" data-cat="building">
                <div class="portfolio-wrapper">
                  <div class="smallgrid"> <img src="images/petoma_meru4.jpg" alt="petoma">
                    <div class="smallgrid-text">
                      <h3>Building & Architectural Designs</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio exterior" data-cat="exterior">
                <div class="portfolio-wrapper">
                  <div class="smallgrid"> <img src="images/petoma_meru5.jpg" alt="petoma">
                    <div class="smallgrid-text">
                      <h3>Building & Architectural Designs</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio interior" data-cat="interior">
                <div class="portfolio-wrapper">
                  <div class="smallgrid"> <img src="images/petoma_meru6.jpg" alt="petoma">
                    <div class="smallgrid-text">
                      <h3>Building & Architectural Designs</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio exterior" data-cat="exterior">
                <div class="portfolio-wrapper">
                  <div class="smallgrid"> <img src="images/petoma_meru7.jpg" alt="petoma">
                    <div class="smallgrid-text">
                      <h3>Building & Architectural Designs</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio exterior" data-cat="exterior">
                <div class="portfolio-wrapper">
                  <div class="smallgrid"> <img src="images/petoma_meru8.jpg" alt="petoma">
                    <div class="smallgrid-text">
                      <h3>Building & Architectural Designs</h3>
                    </div>
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