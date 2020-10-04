<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Administrator Login</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Local Files -->
  <link href="{{ asset('assets/css') }}/material-kit.css?v=2.0.7" rel="stylesheet" />
  <link href="{{ asset('assets/css') }}/font-awesome.min.css" rel="stylesheet" />
</head>
<body class="login-page sidebar-collapse">
	<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
			<div class="container">
				<div class="navbar-translate">
					<button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="sr-only">Toggle navigation</span>
						<span class="navbar-toggler-icon"></span>
						<span class="navbar-toggler-icon"></span>
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>
						<div class="collapse navbar-collapse">
							<ul class="navbar-nav ml-auto">
								<li class="dropdown nav-item">
										<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
											<i class="material-icons">supervisor_account</i> Dashboard
										</a>
											@if (Route::has('login'))
												<div class="dropdown-menu dropdown-with-icons">
							@auth
														<a href="{{ url('/home') }}" class="dropdown-item">
															<i class="material-icons">widgets</i> HomePage
														</a>
											@else
												<a href="http://127.0.0.1:8000/" class="dropdown-item">
													<i class="material-icons">info</i> About
												</a>
								
								@endauth
							</div>
									@endif
								</li>
								
									<li class="nav-item">
										<a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="#" data-original-title="Follow us on Twitter" rel="nofollow">
										<i class="fa fa-twitter"></i>
										</a>
									</li>
										<li class="nav-item">
											<a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="#" data-original-title="Like us on Facebook" rel="nofollow">
											<i class="fa fa-facebook-square"></i>
											</a>
										</li>
											<li class="nav-item">
												<a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="#" data-original-title="Follow us on Instagram" rel="nofollow">
												<i class="fa fa-instagram"></i>
												</a>
											</li>
							</ul>
						</div>
			</div>
	</nav>
<div class="page-header header-filter" style="background-image: url('../assets/img/background_images/login_backgroud.jpg'); background-size: cover; background-position: top center;">
  <div class="container">
	  <div class="row">
		<div class="col-lg-4 col-md-6 ml-auto mr-auto">
		  <div class="card card-login">
					<form method="POST" action="{{ route('login') }}">
						@csrf
						 <div class="card-header card-header-rose text-center">
							<h4 class="card-title">Administrator Login</h4>
							<div class="social-line">	
							</div>
						  </div>
						<p class="description text-center">Use valid crediatials to access system</p>
						<div class="card-body">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="material-icons">mail</i>
									</span>
								</div>
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autocomplete="email" autofocus>
												@error('email')
														<span class="invalid-feedback text-center" role="alert">
															<strong >{{ $message }}</strong>
														</span>
												@enderror
							</div>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="material-icons">lock_outline</i>
									</span>
								</div>
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password..." required autocomplete="current-password">
												@error('password')
														<span class="invalid-feedback text-center" role="alert">
															<strong>{{ $message }}</strong>
														</span>
												@enderror
							 	</div>     
						</div>
							<div class="form-check mr-auto ml-3 mt-3">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }} 
										<span class="form-check-sign">
											<span class="check"></span>
										</span>
								</label>
							</div>
									<div class="text-center">
											<button type="submit"  class="btn btn-rose btn-round mt-4">Sign  In<div class="ripple-container"></div></button>
									</div>
				   </form>
			</div>
				<div class="row">
					<div class="col-2">
				    	<a href="http://127.0.0.1:8000/" class="text-light">
					     <small>{{ __('Terms') }}</small>
					</a>                                            	
				</div>
				<div class="col-3">		 	   
				   <a href="http://127.0.0.1:8000/" class="text-light">
				    <small>{{ __('Privacy') }}</small>
				</a>
				</div>
				<div class="col-3">	 	   
				  <a href="http://127.0.0.1:8000/" class="text-light">
				     <small>Security</small>
			    	</a>		
				</div>
				  <div class="col-4">	 	   
				     <a href="https://www.infinitive.co.ke/contactus/" class="text-light" target="_blank">
				        <small>Contact -Us</small>
				     </a>		
				  </div>
				</div>
     	 </div>
	  </div>
   </div>
 <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/core') }}/jquery.min.js" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core') }}/popper.min.js" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core') }}/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugins') }}/moment.min.js"></script>

  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets/js') }}/material-kit.js?v=2.0.7" type="text/javascript"></script>
</body>

</html>