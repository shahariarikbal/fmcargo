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
				<form action="{{ url('/customer/register') }}" method="post" class="login-form ragistration form-group" enctype="multipart/form-data">
                    @csrf
				    <div class="title">Registration</div>
				    <div class="input-field-wrapper">
				        <span class="fas fa-user"></span>
				        <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" />
				    </div>
                    @if ($errors->has('first_name'))
                        <div class="text-danger">{{ $errors->first('first_name') }}</div>
                    @endif
				    <div class="input-field-wrapper">
				        <span class="fas fa-user"></span>
				        <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" />

				    </div>
                    @if ($errors->has('last_name'))
                        <div class="text-danger">{{ $errors->first('last_name') }}</div>
                    @endif
				    <div class="input-field-wrapper">
				        <span class="fas fa-envelope"></span>
				        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" />

				    </div>
                    @if ($errors->has('title'))
                        <div class="text-email">{{ $errors->first('email') }}</div>
                    @endif
				    <div class="input-field-wrapper">
				        <span class="fas fa-phone-alt"></span>
				        <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" placeholder="Phone" />

				    </div>
                    @if ($errors->has('phone'))
                        <div class="text-danger">{{ $errors->first('phone') }}</div>
                    @endif
				    <div class="input-field-wrapper">
				        <span class="fas fa-lock"></span>
				        <input type="password" class="form-control" name="password" placeholder="Password" />

				    </div>
                    @if ($errors->has('password'))
                        <div class="text-danger">{{ $errors->first('password') }}</div>
                    @endif
{{--				    <div class="input-field-wrapper">--}}
{{--				        <span class="fas fa-lock"></span>--}}
{{--				        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" />--}}
{{--				    </div>--}}
				    <div class="input-field-wrapper">
				        <span class="fas fa-camera"></span>
				        <input type="file" name="avatar" class="form-control" accept="image/*" />

				    </div>
                    @if ($errors->has('avatar'))
                        <div class="text-danger">{{ $errors->first('avatar') }}</div>
                    @endif
				    <p style="font-size: 13px; font-weight: 600; color: red;">Use image sort-name and Minimum file size of 100 KB</p>
				    <div class="submit-btn-outer">
				        <button type="submit" class="submit-btn-inner">
				            Sign Up
				        </button>
				    </div>
				    <a href="{{ url('/customer/login') }}" class="sign-up-link">Sign In</a>
				</form>
			</div>
		</div>
	</section>
	<!-- /Registration -->
@endsection
