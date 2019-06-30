<!DOCTYPE html>
<html>
<head>

	<title></title>
	<link href="{{asset('assets//css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets//css/style.css')}}" rel="stylesheet">
	<link href="{{asset('assets//css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('assets//css/reset.css')}}" rel="stylesheet">
	<link href="{{asset('assets//css/font-awesome.css')}}" rel="stylesheet">
	

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
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Latest Articles</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    
    <div id="blog-page-content" class="section-padding">
    @foreach($blog as $item)
        <div class="container">
            <div class="row">
           
                <!-- Single Articles Start -->
                <div class="col-lg-12">
                
                    <article class="single-article">
                        <div class="row">
                            <!-- Articles Thumbnail Start -->
                            
                            <div class="col-lg-5">
                                <div class="article-thumb">
                                    <img src="{{asset($item->Blogimage)}}" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->

                            <!-- Articles Content Start -->
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a href="article-details.html">{{$item->title}}</a></h3>
                                            <div class="article-meta">
                                                <a href="#" class="author">By :: <span>Admin</span></a>
                                                <a href="#" class="commnet">Date :: <span>{{$item->created_at}}</span></a>
                                            </div>
                                            <p>{!!str_limit($item->content, 150, '....')!!}</p>
                                            <a href="{{route('addBlog.show',$item->id)}}" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <!-- Articles Content End -->
                        </div>
                    </article>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</body>
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/gijgo.js')}}"></script>

</html>