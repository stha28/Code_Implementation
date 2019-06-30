<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{asset('assets//css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets//css/style.css')}}" rel="stylesheet">
	<link href="{{asset('assets//css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('assets//css/reset.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugins/gijgo.css')}}" rel="stylesheet">
	
	<link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">

<link href="{{asset('assets/css/profile.css')}}" rel="stylesheet">
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
                                <li><a href="{{route('welcome')}}">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">services</a></li>
                                <li><a href="{{route('Bikes')}}">Bikes</a></li>
                                <li class="active"><a href="{{route('Blog')}}">Blog</a></li>
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
    <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-8 offset-4" style="margin-top: -8%;">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                     <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>123 456 7890</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Web Developer and Designer</p>
                                            </div>
                                        </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-md-2 offset-4">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
            </form>           
        </div>
</body>
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/gijgo.js')}}"></script>



</html>