@extends('layouts.app')

@section('content')
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Bikes</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <div class="row">
     <!-- Choose Area Content Start -->
        <div class="col-lg-12">
                    <div class="choose-content-wrap">
                     <div class="tab-content" id="myTabContent">
                        <!-- Popular Cars Tab Start -->
                     <div class="tab-pane fade show active" id="popular_cars" role="tabpanel" aria-labelledby="home-tab">
                      <!-- Popular Cars Content Wrapper Start -->
                     <div class="popular-cars-wrap">
                         <!-- Filtering Menu -->
                        <div class="popucar-menu text-center">
                           <a href="#" data-filter="*" class="active">all</a>
                           <a href="#" data-filter=".con">Conver</a>
                           <a href="#" data-filter=".hat">Truck</a>
                           <a href="#" data-filter=".mpv">MPV</a>
                           <a href="#" data-filter=".sedan">Sedan</a>
                         <a href="#" data-filter=".suv">SUV</a>
                        </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>

    <!--== Car List Area Start ==-->
    
    <section id="car-list-area" class="section-padding">
   
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
               
                <div class="col-lg-12">
                    <div class="car-list-content">
                        <div class="row">
                            <!-- Single Car Start -->
                            @foreach($Bike as $item)
                            <div class="col-lg-6 col-md-6">
                                <div class="single-car-wrap">
                                   
                                    <img class ="img-fluid" src="{{asset($item->Bikeimage)}}" alt="JSOFT">
                                   
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#">{{$item->Bikename}}</a></h2>
                                        <h5>Rs.{{$item->Price}} /per a day</h5>
                                        <p>{{$item->Bikedetail}}.</p>
                                        <ul class="car-info-list">
                                            <li>AC</li>
                                            <li>Diesel</li>
                                            <li>Auto</li>
                                        </ul>
                                        <a href="{{route('rent.edit',$item->id)}}" class="rent-btn">Book It</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            <div>
        <div>
       
    </section>
   
</body>
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/gijgo.js')}}"></script>

</html>