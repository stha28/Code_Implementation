<!DOCTYPE html>
<html>
<head>

	<title></title>
	<link href="{{asset('assets//css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets//css/style.css')}}" rel="stylesheet">
	<link href="{{asset('assets//css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('assets//css/reset.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugins/gijgo.css')}}" rel="stylesheet">
	
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
                            <img src="assets/img/logo.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="active"><a href="{{route('welcome')}}">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">services</a></li>
                                <li><a href="{{route('Bikes')}}">Bikes</a></li>
                                <li><a href="{{route('Blog')}}">Blog</a></li>
                                <li><a href="{{route('Parts')}}">Parts</a></li>
                                @if (Auth::guest())
                                <li><a href="">More</a>
                                    <ul>
                                        <li><a href="{{route('Logincustom')}}">Login</a></li>
                                        <li><a href="{{route('register')}}">Register</a></li>
                                    </ul>
                                </li>
                                @else
                                <li><a href="">{{Auth::user()->name}}</a>
                                    <ul>
                                        <li><a href="{{route('profile.create')}}">Profile</a></li>
                                        <li><a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">Logout</a>
                                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             {{ csrf_field() }}
                                          </form>
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
                                    <li><i class="fa fa-map-marker"></i> 800/8, Kazipara, Dhaka</li>
                                    <li><i class="fa fa-mobile"></i> +880 01 86 25 72 43</li>
                                    <li><i class="fa fa-envelope"></i> kazukamdu83@gmail.com</li>
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
    </html>

