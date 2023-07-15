@extends('layouts.frontend.master')

@section('title')
    Contact | FM Cargo Service
@endsection

@section('content')
    <!-- Banner -->
	<section class="banner-section">
		<div class="container">
			<div class="banner-content-wrapper">
				<h1 class="banner-title">
                    @if (app()->getLocale()=='bn')
                    যোগাযোগ করুন
                    @else
                    Contact Us
                    @endif
                </h1>
				<ul class="banner-item">
					<li>
						<a href="{{ url('/') }}">
							<i class="fas fa-home"></i>
                            @if (app()->getLocale()=='bn')
                            হোম
                            @else
                            Home
                            @endif
						</a>
					</li>
					<li class="active">
						<a href="javascript:void(0)">
							@if (app()->getLocale()=='bn')
                            যোগাযোগ
                            @else
                            Contact
                            @endif
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
                            @if (app()->getLocale()=='bn')
                            ফোন
                            @else
                            Phone
                            @endif
                        </h5>
                        <a href="tel:01688-801343">01688-801343, </a>
                        <a href="tel:01511-027225">01511-027225</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h5 class="title">
                            @if (app()->getLocale()=='bn')
                            ইমেইল
                            @else
                            Email
                            @endif
                        </h5>
                        <a href="mailto:fmcargoworld@gmail.com ">fmcargoworld@gmail.com </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h5 class="title">
                            @if (app()->getLocale()=='bn')
                            ঠিকানা
                            @else
                            Address
                            @endif
                        </h5>
                        <p>
                            {{ $setting->{ 'address_'.app()->getLocale() } }}
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
