@extends('layouts.app')

@section('content')

<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>About Us</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p></p>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>About us</h2>
                        <span class="title-line"><img src="assets/img/mo.png" alt="JSOFT"></span>
                        <p>Who Are We?</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

    <!-- About Content Start -->
    <div class="row ">
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <p>EagleRider, the world's largest motorcycle rental, tour, and membership company, carries the largest selection of new Harley-Davidson, Yamaha, BMW, Honda, Indian, and more for rent and touring. All motorcycles are maintained to meet strict factory standards providing the most fun, safe, and affordable riding experience. EagleRider operates from over 200 worldwide locations, leads over 100 guided and self-drive motorcycle tours including Route 66 and the Wild West, and convenient one-way motorcycle rentals, luggage storage, free parking, free use of DOT-approved helmets, amazing Club EagleRider membership benefits, and more. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6 ml-auto">
                    <div class="about-image">
                        <img src="{{asset('assets/img/bik.jpg')}}" alt="JSOFT">
                    </div>
                </div>
                <!-- About Video End -->
            </div>

            <!-- About Fretutes Start -->
            <div class="about-feature-area">
                <div class="row">
                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <i class="fa fa-car"></i>
                            <h3>Money Back Guarantee</h3>
                            <p>Anything that goes wrong, do not fret! We guarantee that you get your money back in one piece!</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <i class="fa fa-car"></i>
                            <h3>Assured Bikes</h3>
                            <p>Bikes that are Assured with Eagle Rental will be of the highest possible quality.</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <i class="fa fa-car"></i>
                            <h3>Lowest Price Guarantee</h3>
                            <p>Get all your favourite bikes for rent at the lowest possible price on the bike rental market.</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->
                </div>
            </div>
            <!-- About Fretutes End -->
        </div>
    </section>
     <!--== Testimonials Area Start ==-->
     <section id="testimonial-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Testimonials</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>
            
            <div class="row">
                <div class="col-lg-8 col-md-12 m-auto">
                  
                    <div class="testimonial-content">
                    @foreach($review as $item)
                        <div class="single-testimonial">
                            <p>{{$item->Review}}.</p>
                            <h3><?php $user = App\User::findorFail($item->Userid)?>{{$user->name}}</h3>
                            <div class="client-logo">
                                <img src="assets/img/client/client-pic-1.jpg" alt="JSOFT">
                            </div>
                            
                          
                        </div>
                        @endforeach
                        
                    </div> 
                    
                </div>
                
                
                
            </div>
            
        </div>
    </section>
    <!--== Testimonials Area End ==-->
    <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/gijgo.js')}}"></script>
<script src="{{asset('assets/js/plugins/owl.carousel.min.js')}}"></script>


@endsection