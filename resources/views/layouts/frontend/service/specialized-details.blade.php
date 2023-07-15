@extends('layouts.frontend.master')

@section('title')
Specialized Service | FM Cargo Service
@endsection

@section('content')
    <!-- Banner -->
    <section class="banner-section">
        <div class="container">
            <div class="banner-content-wrapper">
                <h1 class="banner-title">{{ $specialized_service->{ 'header_title_'.app()->getLocale() } }}</h1>
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
                            {{ $specialized_service->{ 'header_title_'.app()->getLocale() } }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- /Banner -->
    <!-- Service details -->
    <section class="service-details-section">
    	<div class="container">
    		<div class="service-details-top-outer">
		        <h3 class="service-details-title">
		        	{{ $specialized_service->{ 'header_title_'.app()->getLocale() } }}
		        </h3>
		        <p class="service-details-text">
		        	{{ $specialized_service->{ 'header_desc_'.app()->getLocale() } }}
		        </p>
		    </div>
    	</div>
    </section>
    <section class="service-details-section">
        <div class="container">
            <div class="row align-items-center">
            	<div class="col-md-6">
            		<div class="service-details-left">
            			<h3 class="service-details-title">
            				{{ $specialized_service->{ 'pro_sourcing_title_'.app()->getLocale() } }}
            			</h3>
            			<p class="service-details-text">
            				{{ $specialized_service->{ 'pro_sourcing_desc_'.app()->getLocale() } }}
            			</p>
            			{{--  <p class="service-details-text">
            				At FM Cargo, we understand the importance of effective sourcing and have a vast network of suppliers and manufacturers in several countries. We can assist our clients in finding the products they need, evaluating potential suppliers, and negotiating favorable prices and terms.
            			</p>  --}}
            		</div>
            	</div>
            	<div class="col-md-6">
            		<div class="service-details-right">
            			<img src="{{ asset('specialized_service/'.$specialized_service->pro_sourcing_img) }}">
            		</div>
            	</div>
            </div>
        </div>
    </section>
    <section class="service-details-section">
        <div class="container">
            <div class="row align-items-center">
            	<div class="col-md-6">
            		<div class="service-details-right">
            			<img src="{{ asset('specialized_service/'.$specialized_service->free_warehousing_img) }}">
            		</div>
            	</div>
            	<div class="col-md-6">
            		<div class="service-details-left">
            			<h3 class="service-details-title">
            				{{ $specialized_service->{ 'free_warehousing_title_'.app()->getLocale() } }}
            			</h3>
            			<p class="service-details-text">
            				{{ $specialized_service->{ 'free_warehousing_desc_'.app()->getLocale() } }}
            			</p>
            			{{--  <p class="service-details-text">
            				Your business can reduce storage costs and improve supply chain management efficiency by choosing FM Cargo’s free warehousing services. We offer flexible storage solutions, allowing our clients to store their products for as long as they need without incurring any costs. Our warehouses have the latest security and monitoring systems, ensuring your products are stored safely and securely.
            			</p>  --}}
            		</div>
            	</div>
            </div>
        </div>
    </section>
    <section class="service-details-section">
        <div class="container">
            <div class="row align-items-center">
            	<div class="col-md-6">
            		<div class="service-details-left">
            			<h3 class="service-details-title">
            				{{ $specialized_service->{ 'inspection_title_'.app()->getLocale() } }}
            			</h3>
            			<p class="service-details-text">
            				{{ $specialized_service->{ 'inspection_desc_'.app()->getLocale() } }}
            			</p>
            			{{--  <p class="service-details-text">
            				Our inspection services can help you to identify any issues or defects before the products are shipped, allowing you to make decisions and avoid any potential quality or compliance issues. Our team of experienced and qualified inspectors uses the latest technology and equipment to ensure our client reduces risks, saves time and money, and improves their supply chain management efficiency.
            			</p>  --}}
            		</div>
            	</div>
            	<div class="col-md-6">
            		<div class="service-details-right">
            			<img src="{{ asset('specialized_service/'.$specialized_service->inspection_img) }}">
            		</div>
            	</div>
            </div>
        </div>
    </section>
    <section class="service-details-section">
        <div class="container">
            <div class="row align-items-center">
            	<div class="col-md-6">
            		<div class="service-details-right">
            			<img src="{{ asset('specialized_service/'.$specialized_service->repacking_img) }}">
            		</div>
            	</div>
            	<div class="col-md-6">
            		<div class="service-details-left">
            			<h3 class="service-details-title">
            				{{ $specialized_service->{ 'repacking_title_'.app()->getLocale() } }}
            			</h3>
            			<p class="service-details-text">
            				{{ $specialized_service->{ 'repacking_desc_'.app()->getLocale() } }}
            			</p>
            			{{--  <p class="service-details-text">
            				Our re-packaging services help businesses to save time and money by reducing the need to handle products multiple times during shipping and delivery. We also ensure that the products meet the required packaging standards. By choosing FM Cargo’s re-packaging services, businesses can improve their supply chain management efficiency and ensure that their products are delivered to customers in the best possible condition.
            			</p>  --}}
            		</div>
            	</div>
            </div>
        </div>
    </section>
    <section class="service-details-section">
        <div class="container">
            <div class="row align-items-center">
            	<div class="col-md-6">
            		<div class="service-details-left">
            			<h3 class="service-details-title">
            				{{ $specialized_service->{ 'custom_clr_title_'.app()->getLocale() } }}
            			</h3>
            			<p class="service-details-text">
            				{{ $specialized_service->{ 'custom_clr_desc_'.app()->getLocale() } }}
            			</p>
            			{{--  <p class="service-details-text">
            				By choosing FM Cargo’s custom clearance services, you can ensure that your products comply with all the necessary regulations. This will also save you time and money by streamlining the customs clearance process and ensuring their products are delivered on time.
            			</p>  --}}
            		</div>
            	</div>
            	<div class="col-md-6">
            		<div class="service-details-right">
            			<img src="{{ asset('specialized_service/'.$specialized_service->custom_clr_img) }}">
            		</div>
            	</div>
            </div>
        </div>
    </section>
    <section class="service-details-section">
        <div class="container">
            <div class="row align-items-center">
            	<div class="col-md-6">
            		<div class="service-details-right">
            			<img src="{{ asset('specialized_service/'.$specialized_service->d_step_delivery_img) }}">
            		</div>
            	</div>
            	<div class="col-md-6">
            		<div class="service-details-left">
            			<h3 class="service-details-title">
            				{{ $specialized_service->{ 'd_step_delivery_title_'.app()->getLocale() } }}
            			</h3>
            			<p class="service-details-text">
            				{{ $specialized_service->{ 'd_step_delivery_desc_'.app()->getLocale() } }}
            			</p>
            			{{--  <p class="service-details-text">
            				Our team of experts can manage the entire delivery process, from packing and labeling to transportation and final delivery, ensuring that the products are delivered safely to your doorsteps and improving customer satisfaction and loyalty.
            			</p>  --}}
            		</div>
            	</div>
            </div>
        </div>
    </section>
    <section class="service-details-section">
    	<div class="container">
    		<div class="service-details-top-outer">
		        <p class="service-details-text">
		        	{{ $specialized_service->{ 'footer_desc_'.app()->getLocale() } }}
		        </p>
		        <a href="{{ url('/contact') }}" class="contact-us-link">
                    Contact Us
                </a>
		    </div>
    	</div>
    </section>
    <!-- /Service details -->
@endsection
