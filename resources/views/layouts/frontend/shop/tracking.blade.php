@extends('layouts.frontend.master')

@section('title')
    Tracking | FM Cargo Service
@endsection

@section('content')
    	<!-- Banner -->
	<section class="banner-section">
		<div class="container">
			<div class="banner-content-wrapper">
				<h1 class="banner-title">Tracking</h1>
				<ul class="banner-item">
					<li>
						<a href="index.html">
							<i class="fas fa-home"></i>
							Home
						</a>
					</li>
					<li class="active">
						<a href="javascript:void(0)">
							Tracking
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- /Banner -->

	<!-- Tracking -->
	<section class="order-tracking-section">
	    <div class="container">
	        <div class="order-tracking-wrapper">
	            <form action="" method="" class="tracking-form form-group">
	                <div class="input-group">
	                    <input type="search" name="shipment_bol_no" placeholder="Enter Tracking No." class="form-control" />
	                    <button type="submit" name="tracking">Search</button>
	                </div>
	            </form>
	            <div class="order-tracking-items-outer">
	                <div class="order-tracking">
	                    <span class="is-complete"></span>
	                    <p>Load Placed</p>
	                </div>
	                <div class="order-tracking">
	                    <span class="is-complete"></span>
	                    <p>Processing</p>
	                </div>
	                <div class="order-tracking">
	                    <span class="is-complete"></span>
	                    <p>On the Way</p>
	                </div>
	                <div class="order-tracking">
	                    <span class="is-complete"></span>
	                    <p>Delivered</p>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- /Tracking -->
@endsection