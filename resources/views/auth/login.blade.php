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
<section id="lgoin-page-wrap" class="section-padding" style="background-image:asset/img/grad.jpg">
        <div class="container" >
            <div class="row" >
                <div class="col-lg-4 col-md-8 m-auto">
                	<div class="login-page-content">
                		<div class="login-form">
                			<h3>Welcome Back!</h3>
                            <form method="POST" action="{{ route('Login.custom') }}">
                        @csrf
								<div class="username">
									<input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email or Username">
                                    
								</div>
								<div class="password">
									<input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                    
								</div>
								<div class="log-btn">
									<button type="submit"><i class="fa fa-sign-in"></i> Log In</button>
								</div>
							</form>
                		</div>
                		<div class="create-ac">
                			<p>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
                		</div>
                	</div>
                </div>
        	</div>
        </div>
    </section>
</body>
</html>