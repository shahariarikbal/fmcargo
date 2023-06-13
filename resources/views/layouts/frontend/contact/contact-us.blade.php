@extends('layouts.frontend.master')

@section('title')
    Contact | FM Cargo Service
@endsection

@section('content')
    <!-- Banner -->
	<section class="banner-section">
		<div class="container">
			<div class="banner-content-wrapper">
				<h1 class="banner-title">Contact Us</h1>
				<ul class="banner-item">
					<li>
						<a href="{{ url('/') }}">
							<i class="fas fa-home"></i>
							Home
						</a>
					</li>
					<li class="active">
						<a href="javascript:void(0)">
							Contact
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- /Banner -->
    <section class="contact-section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h5 class="title">
                            Phone
                        </h5>
                        <a href="tel:+6594717964">0123456789</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h5 class="title">
                            Email
                        </h5>
                        <a href="mailto:mimpainting18@gmail.com">info@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h5 class="title">
                            Address
                        </h5>
                        <p>
                            House#06, Level#03 Road-1/A, Sector#09 Housebuilding, Uttara Dhaka-1230
                        </p>
                    </div>
                </div>
            </div>
            <div class="contact-form-wrapper">
                <div class="row">
                    <div class="col-lg-8 col-md-12 m-auto">
                        @include('layouts.frontend.includes.contact')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
