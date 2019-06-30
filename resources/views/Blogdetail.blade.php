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
                                <li><a href="contact.html">Contact</a></li>
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

    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-8">
                    <div class="car-details-content">
                        <h2>{{$blog->title}}</h2>
                        <div class="car-preview-crousel">
                            <div class="single-car-preview">
                            <img src="{{asset($blog->Blogimage)}}" alt="JSOFT">
                            </div>
                       </div>
                        <div class="car-details-info blog-content">
                          <p>{{$blog->content}}</p>
                        </div>
                    </div>
                </div> 
           </div>
        </div>
   </section>

</body>
</html>