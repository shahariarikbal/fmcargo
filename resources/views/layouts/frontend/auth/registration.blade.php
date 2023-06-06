@extends('layouts.frontend.master')

@section('title')
    Registration | FM Cargo Service
@endsection

@section('content')
    <!-- Banner -->
	<section class="banner-section">
		<div class="container">
			<div class="banner-content-wrapper">
				<h1 class="banner-title">Registration</h1>
				<ul class="banner-item">
					<li>
						<a href="index.html">
							<i class="fas fa-home"></i>
							Home
						</a>
					</li>
					<li class="active">
						<a href="javascript:void(0)">
							Registration
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- /Banner -->

	<!-- Registration -->
	<section class="login-section">
		<div class="container">
			<div class="login-form-wrapper">				
				<form action="" method="post" class="login-form ragistration form-group">
				    <div class="title">Registration</div>
				    <div class="input-field-wrapper">
				        <span class="fas fa-user"></span>
				        <input type="text" class="form-control" name="first_name" value="" placeholder="First Name" />
				    </div>
				    <div class="input-field-wrapper">
				        <span class="fas fa-user"></span>
				        <input type="text" class="form-control" name="last_name" value="" placeholder="Last Name" />
				    </div>
				    <div class="input-field-wrapper">
				        <span class="fas fa-envelope"></span>
				        <input type="email" class="form-control" name="email" value="" placeholder="Email" />
				    </div>
				    <div class="input-field-wrapper">
				        <span class="fas fa-phone-alt"></span>
				        <input type="text" name="phone" class="form-control" value="" placeholder="Phone" />
				    </div>
				    <div class="input-field-wrapper">
				        <span class="fas fa-lock"></span>
				        <input type="password" class="form-control" name="password" placeholder="Password" />
				    </div>
				    <div class="input-field-wrapper">
				        <span class="fas fa-lock"></span>
				        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" />
				    </div>
				    <div class="input-field-wrapper">
				        <span class="fas fa-camera"></span>
				        <input type="file" name="avatar" class="form-control" accept="image/*" />
				    </div>
				    <p style="font-size: 13px; font-weight: 600; color: red;">Use image sort-name and Minimum file size of 100 KB</p>
				    <div class="submit-btn-outer">
				        <button type="submit" class="submit-btn-inner">
				            Sign Up
				        </button>
				    </div>
				    <a href="{{ url('/login') }}" class="sign-up-link">Sign In</a>
				</form>
			</div>
		</div>
	</section>
	<!-- /Registration -->
@endsection