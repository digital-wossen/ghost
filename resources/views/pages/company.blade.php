
@extends('layout.app')
@section('content')
<h1>{{ $title }}</h1>
<div class="ScrollStyle-hor">

</section>
<!-- section 2 -->
<section class="section2">
  <div class="container">
    <div class="content">
      <p class="main-txt"><strong>WiTrucks marks the beginning of a new path in trucking - </strong>  a path that is organized and makes trucking simple for every shipper and trucker.
       </p>
      <p> WiTrucks is a pioneer in bringing the offline operations of trucking online, by matching a shipper with a trucker or reshaping the infrastructure around trucking to facilitate payments, insurance, and financial services. We at WiTrucks are committed to making it easier for millions of truckers to book a load and move at capacity, and enable shippers of all sizes to have access to the right truck, at the right time for the right price – all at a click of a button.</p>
      <p>Our robust ‘Freight’ and ‘Services’ technology platforms deliver reliability, efficiency and seamless experience for shippers and truckers. </p>
      <!-- section 3 -->
      <section class="section3">
        <div class="row">
          <div class="col-sm-4">
            <div class="thumbnail first">
              <figure>
                <img src="images/about/icons-about1.svg" alt="">
              </figure>
              <p> <span class="company_highlight">10000+</span> Clients
              </p>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="thumbnail third">
              <figure>
                <img src="images/about/icons-about3.svg" alt="">
              </figure>
              <p><span class="company_highlight">2,50,000+ </span> Trucks</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="thumbnail second">
              <figure>
                <img src="images/about/icons-about2.svg" alt="">
              </figure>
              <p><span class="company_highlight">2000+ </span> locations </p>
            </div>
          </div>
        </div>

      </section>




        <div class="row">
             <div class="col-sm-6">
                 <img src = "{{ URL::to('/') }}/images/t0.jpg" alt="Trucks" style="width:300px;height:300px;" >
                 <h3>Freight Platform
                 </h3>
                 <p>Enabling convenient shipping and higher utilization of trucks with organized freight matching </p>
             </div>
             <div class="col-sm-6">
                 <img src = "{{ URL::to('/') }}/images/t1.jpg" alt="Trucks" style="width:300px;height:300px;" >
                 <h3>Services Platform </h3>
                 <p>Making trucking simple and efficient with host of trucking services and infrastructure</p>
             </div>
        </div>

        <div class="row">
                <div class="col-sm-6">
                    <img src = "{{ URL::to('/') }}/images/t2.jpg" alt="Trucks" style="width:300px;height:300px;" >
                    <h3>Easy Shipping
                    </h3>
                    <p>Enabling convenient shipping and higher utilization of trucks with organized freight matching </p>
                </div>
                <div class="col-sm-6">
                    <img src = "{{ URL::to('/') }}/images/t3.jpg" alt="Trucks" style="width:300px;height:300px;" >
                    <h3>Utilization </h3>
                    <p>Making trucking simple and efficient with host of trucking services and infrastructure</p>
                </div>
           </div>

        <div class="row">
                <div class="col-sm-6">
                    <img src = "{{ URL::to('/') }}/images/t4.jpg" alt="Trucks" style="width:300px;height:300px;" >
                    <h3>Location Efficiency
                    </h3>
                    <p>Enabling convenient shipping and higher utilization of trucks with organized freight matching </p>
                </div>
                <div class="col-sm-6">
                    <img src = "{{ URL::to('/') }}/images/t5.jpg" alt="Trucks" style="width:300px;height:300px;" >
                    <h3>Convenience </h3>
                    <p>Making trucking simple and efficient with host of trucking services and infrastructure</p>
                </div>
           </div>

        <div class="row">
                <div class="col-sm-6">
                    <img src = "{{ URL::to('/') }}/images/t6.jpg" alt="Trucks" style="width:300px;height:300px;" >
                    <h3>Truck Capacity
                    </h3>
                    <p>Enabling convenient shipping and higher utilization of trucks with organized freight matching </p>
                </div>
                <div class="col-sm-6">
                    <img src = "{{ URL::to('/') }}/images/t7.jpg" alt="Trucks" style="width:300px;height:300px;" >
                    <h3>Services Platform </h3>
                    <p>Making trucking simple and efficient with host of trucking services and infrastructure</p>
                </div>
           </div>

        <div class="row">
                <div class="col-sm-6">
                    <img src = "{{ URL::to('/') }}/images/t8.jpg" alt="Trucks" style="width:300px;height:300px;" >
                    <h3>Working Together
                    </h3>
                    <p>Enabling convenient shipping and higher utilization of trucks with organized freight matching </p>
                </div>
                <div class="col-sm-6">
                    <img src = "{{ URL::to('/') }}/images/t9.jpg" alt="Trucks" style="width:300px;height:300px;" >
                    <h3>Connecting Easily</h3>
                    <p>Making trucking simple and efficient with host of trucking services and infrastructure</p>
                </div>
           </div>

        <div class="row">
                <div class="col-sm-6">
                    <img src = "{{ URL::to('/') }}/images/t2.jpg" alt="Trucks" style="width:300px;height:300px;" >
                    <h3>Fast and Simple
                    </h3>
                    <p>Enabling convenient shipping and higher utilization of trucks with organized freight matching </p>
                </div>
                <div class="col-sm-6">
                    <img src = "{{ URL::to('/') }}/images/t0.jpg" alt="Trucks" style="width:300px;height:300px;" >
                    <h3>Amazing Management</h3>
                    <p>Making trucking simple and efficient with host of trucking services and infrastructure</p>
                </div>
           </div>

        <div class="row">
                <div class="col-sm-6">
                    <img src = "{{ URL::to('/') }}/images/t4.jpg" alt="Trucks" style="width:300px;height:300px;" >
                    <h3>Secure and Dependable
                    </h3>
                    <p>Enabling convenient shipping and higher utilization of trucks with organized freight matching </p>
                </div>
                <div class="col-sm-6">
                    <img src = "{{ URL::to('/') }}/images/t5.jpg" alt="Trucks" style="width:300px;height:300px;" >
                    <h3>Platform Allowance </h3>
                    <p>Making trucking simple and efficient with host of trucking services and infrastructure</p>
                </div>
           </div>
        <a class="btn btn-primary discover btn-lg" href="services" >
             Discover our products
        </a>
    </div>
</div>
</section>



@endsection


