@extends('layouts.app')

@section('content')

<section class="topbanner"> <img src="images/topbanner.jpg" alt="" class="Petoma">
  <div class="topbanner_cont">
    <div class="container">
      <h1 class="topbanner-title">Projects</h1>
      <div class="breadcrumb">
        <ol class="breadcrumb">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('projects') }}">Projects</a>
          <li class="active">Ongoing Projects</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<section class="filterarea">
  <div class="container">
    <div class="row">
      <table class="rwd-table">
        <tr>
          <th>No</th>
          <th>Client</th>
          <th>Description</th>
          <th>Value and End Date</th>
        </tr>
        <tr>
          <td data-th="Project No">1.</td>
          <td data-th="Client">Mbeya City Council</td>
          <td data-th="Description">Repair Mbeya City Council Road</td>
          <td data-th="Value">Classified<br>September 2019</td>
        </tr>
        
      </table>
    </div>
  </div>
</section>



@include('common.clients')


@include('common.footer')

@endsection