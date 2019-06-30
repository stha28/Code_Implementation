@extends('layouts.app')

@section('content')
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Parts</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    
    <section id="car-list-area" class="section-padding">
   
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
               
                <div class="col-lg-12">
                    <div class="car-list-content">
                        <div class="row">
                            <!-- Single Car Start -->
                            @foreach($product as $item)
                            <div class="col-lg-6 col-md-6">
                                <div class="single-car-wrap">
                                   
                                    <img class ="img-fluid" src="{{asset($item->Partimage)}}" alt="JSOFT">
                                   
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#">{{$item->Partname}}</a></h2>
                                        <h5>Rs.{{$item->Price}}</h5>
                                        <p>{{$item->Partdetail}}.</p>
                                        <a href="{{route('rent.edit',$item->id)}}" class="rent-btn">Book It</a>
                                        <a href="{{route('buy.edit',$item->id)}}" class="rent-btn">Buy</a>
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