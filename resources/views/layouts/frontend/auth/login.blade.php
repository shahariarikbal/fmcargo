@extends('layouts.frontend.master')

@section('title')
    Login | FM Cargo Service
@endsection

@section('content')
    <!-- Banner -->
	<section class="banner-section">
		<div class="container">
			<div class="banner-content-wrapper">
				<h1 class="banner-title">Login</h1>
				<ul class="banner-item">
					<li>
						<a href="{{ url('/') }}">
							<i class="fas fa-home"></i>
							Home
						</a>
					</li>
					<li class="active">
						<a href="javascript:void(0)">
							Login
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- /Banner -->

	<!-- Login -->
	<section class="login-section">
		<div class="container">
			<div class="login-form-wrapper">
				<form action="{{ url('/customer/login') }}" method="post" class="login-form form-group">
                    @csrf
					<div class="title">Login</div>
			  		<div class="input-field-wrapper">
			          <span class="fas fa-user"></span>
			          <input type="text" name="email" class="form-control" placeholder="Email only">
			        </div>
			        <div class="input-field-wrapper">
			          <span class="fas fa-lock"></span>
			          <input type="password" name="password" class="form-control" placeholder="Password">
			        </div>
			  		<div class="submit-btn-outer">
			  			<button type="submit" class="submit-btn-inner">
				  			Sign in
				  		</button>
			  		</div>
			  		<a href="#" class="forgot-pass-link">Forgot Password</a>
			  	</form>
			</div>
		</div>
	</section>
	<!-- /Login -->
@endsection
