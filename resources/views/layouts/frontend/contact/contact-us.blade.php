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
						<a href="index.html">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                    <div class="col-md-8 m-auto">
                        <form action="" method="" class="contact-form form-group">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">
                                        Name
                                    </label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                </div>
                                <div class="col-md-6">
                                    <label for="phone">
                                        Phone
                                    </label>
                                    <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
                                </div>
                                <div class="col-md-12">
                                    <label for="email">
                                        Email
                                    </label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email">
                                </div>
                                <div class="col-md-12">
                                    <label for="message">
                                        Message
                                    </label>
                                    <textarea name="message" rows="5" class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="contact-submit-btn-outer">
                                <button class="contact-submit-btn-inner">
                                    Send Message <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection