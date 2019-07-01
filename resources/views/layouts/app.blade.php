<!DOCTYPE html>
<html>
<head>

	<title></title>
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets//css/style.css')}}" rel="stylesheet">
	<link href="{{asset('assets//css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('assets//css/reset.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugins/gijgo.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugins/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugins/owl.carousel.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/plugins/slicknav.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">
	

</head>
<body>
	<!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
       <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="index2.html" class="logo">
                            <img src="" alt="">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="active"><a href="{{route('welcome')}}">Home</a></li>
                                <li><a href="{{route('Aboutus')}}">About</a></li>
                                <li><a href="{{route('Service')}}">Service</a></li>
                                <li><a href="{{route('Bikes')}}">Bikes</a></li>
                                <li><a href="{{route('Blog')}}">Blog</a></li>
                                <li><a href="{{route('Parts')}}">Parts</a></li>
                                @if (Auth::guest())
                                <li><a href="">More</a>
                                    <ul>
                                        <li><a href="{{route('Logincustom')}}">Login</a></li>
                                        <li><a href="{{route('register')}}">Register</a></li>
                                        <li><a href="{{route('Help')}}">Help</a></li>
                                    </ul>
                                </li>
                                @else
                                <li><a href="">{{Auth::user()->name}}</a>
                                    <ul>
                                        <li><a href="{{ route('userdashboard',Auth::user()->id)}}">Dashboard</a></li>
                                        <li><a href="{{route('Review.index')}}">Review</a></li>
                                        <li><a href="{{route('Help')}}">Help</a></li>
                                        <li>
                                         <a href="#" data-toggle="modal" data-target="#logoutModal">Log Out</a>
                                        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                 <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                     <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                                                    <div class="modal-footer">
                                                       <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                        <button class="btn btn-warning " href="{{ route('logout') }}"
                                                         onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">Logout
                                                       </button>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                         {{ csrf_field() }}
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </li>           
                                      @endif
                                        
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    @yield('content')

    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                   <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>get touch</h2>
                            <div class="widget-body">
                                <p>Lorem ipsum doloer sited amet, consectetur adipisicing elit. nibh auguea, scelerisque sed</p>

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> Baneshwor, Shankhamool</li>
                                    <li><i class="fa fa-mobile"></i> 9841388599</li>
                                    <li><i class="fa fa-envelope"></i> Prashantshrestha19@gmail.com</li>
                                </ul>
                                <a href="https://goo.gl/maps/b5mt45MCaPB2" class="map-show" target="_blank">Show Location</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>get touch</h2>
                            <div class="widget-body">
                             <div class="sidebar-body">
                                <div class="social-icons text-center">
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-behance"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>   
    </section>
    </body>
    <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/gijgo.js')}}"></script>
<script src="{{asset('assets/js/plugins/isotope.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/vegas.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/counterup.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/slicknav.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-migrate.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/owl.carousel.min.js')}}"></script>
 </html>

