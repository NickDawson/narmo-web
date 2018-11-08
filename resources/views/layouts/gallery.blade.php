@extends('layouts.app')

@section('content')

<section class="topbanner"> <img src="images/topbanner.jpg" alt="" class="Petoma">
  <div class="topbanner_cont">
    <div class="container">
      <h1 class="topbanner-title">Gallery</h1>
      <div class="breadcrumb">
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li class="active">Gallery</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<section class="galleryarea">
  <div class="container">
    <div class="row">
      <div class="wrapper center"><a href="images/gallerly_landscape1.jpg" data-fancybox-group="1" class="thumb main"><img src="images/gallerly_landscape1.jpg" alt=""><span class="thumb_overlay"></span>
        <div class="info-box"> </div>
        </a><a href="images/gallerly_potrate1.jpg" data-fancybox-group="1" class="thumb"><img src="images/gallerly_potrate1.jpg" alt=""><span class="thumb_overlay"></span>
        <div class="info-box"> </div>
        </a><a href="images/gallerly_potrate2.jpg" data-fancybox-group="1" class="thumb"><img src="images/gallerly_potrate2.jpg" alt=""><span class="thumb_overlay"></span>
        <div class="info-box"> </div>
        </a><a href="images/gallerly_landscape2.jpg" data-fancybox-group="1" class="thumb main"><img src="images/gallerly_landscape2.jpg" alt=""><span class="thumb_overlay"></span>
        <div class="info-box"> </div>
        </a><a href="images/gallerly_potrate3.jpg" data-fancybox-group="1" class="thumb"><img src="images/gallerly_potrate3.jpg" alt=""><span class="thumb_overlay"></span>
        <div class="info-box"> </div>
        </a><a href="images/gallerly_potrate4.jpg" data-fancybox-group="1" class="thumb"><img src="images/gallerly_potrate4.jpg" alt=""><span class="thumb_overlay"></span>
        <div class="info-box"> </div>
        </a></div>
    </div>
  </div>
</section>


@include('common.clients')


@include('common.footer')

@endsection