@extends('layouts.app')

@section('content')
<section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Login</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Login Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding" background-image="assets/img/grad.jpg" >
        <div class="container" >
            <div class="row" >
                <div class="col-lg-4 col-md-8 m-auto">
                	<div class="login-page-content">
                		<div class="login-form">
                			<h3>Review Us!</h3>
							<form method="POST" action="{{route('review.store')}}">
                             @csrf	
								<div class="username">
									<textarea type="text" name="review" style="height: 107px;width: 99%;background-color: #ffd000;"></textarea>
								</div>
								<div class="log-btn">
									<button type="submit"><i class="fa fa-sign-in"></i> Log In</button>
								</div>
							</form>
                		</div>
                	</div>
                </div>
        	</div>
        </div>
    </section>