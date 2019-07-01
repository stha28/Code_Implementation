@extends('layouts.app')

@section('content')
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