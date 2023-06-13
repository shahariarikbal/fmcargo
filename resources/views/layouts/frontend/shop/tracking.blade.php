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
						<a href="{{ url('/') }}">
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
	            <form action="{{ url('/tracking') }}" method="get" class="tracking-form form-group">
                    @csrf
	                <div class="input-group">
	                    <input type="search" name="tracking_number" placeholder="Enter Tracking No." class="form-control" />
	                    <button type="submit" name="tracking">Search</button>
	                </div>
	            </form>
                @if($parcelTracking)
	            <div class="order-tracking-items-outer">
                    @if($parcelTracking->status == 1)
	                <div class="order-tracking">
	                    <span class="is-complete" style="background-color: forestgreen">
                            <i class="fa fa-check" style="margin-top: 8px; color: white"></i>
                        </span>
	                    <p>Picked up</p>
	                </div>
                    @else
                        <div class="order-tracking">
	                    <span class="is-complete"></span>
                            <p>Picked up</p>
                        </div>
                    @endif
                    @if($parcelTracking->status == 2)
                        <div class="order-tracking">
                            <span class="is-complete" style="background-color: forestgreen">
                                <i class="fa fa-check" style="margin-top: 8px; color: white"></i>
                            </span>
                            <p>Warehouse</p>
                        </div>
                    @else
                        <div class="order-tracking">
                            <span class="is-complete"></span>
                            <p>Warehouse</p>
                        </div>
                    @endif
                    @if($parcelTracking->status == 3)
                        <div class="order-tracking">
                        <span class="is-complete" style="background-color: forestgreen">
                            <i class="fa fa-check" style="margin-top: 8px; color: white"></i>
                        </span>
                            <p>Shipping</p>
                        </div>
                    @else
                        <div class="order-tracking">
                            <span class="is-complete"></span>
                            <p>Shipping</p>
                        </div>
                    @endif
                    @if($parcelTracking->status == 4)
                        <div class="order-tracking">
                    <span class="is-complete" style="background-color: forestgreen">
                        <i class="fa fa-check" style="margin-top: 8px; color: white"></i>
                    </span>
                            <p>Customs</p>
                        </div>
                    @else
                        <div class="order-tracking">
                            <span class="is-complete"></span>
                            <p>Customs</p>
                        </div>
                    @endif
                    @if($parcelTracking->status == 5)
                        <div class="order-tracking">
                            <span class="is-complete" style="background-color: forestgreen">
                                <i class="fa fa-check" style="margin-top: 8px; color: white"></i>
                            </span>
                            <p>BD warehouse</p>
                        </div>
                    @else
                        <div class="order-tracking">
                            <span class="is-complete"></span>
                            <p>BD warehouse</p>
                        </div>
                    @endif
                    @if($parcelTracking->status == 6)
                        <div class="order-tracking">
                        <span class="is-complete" style="background-color: forestgreen">
                            <i class="fa fa-check" style="margin-top: 8px; color: white"></i>
                        </span>
                            <p>Delivered</p>
                        </div>
                    @else
                        <div class="order-tracking">
                            <span class="is-complete"></span>
                            <p>Delivered</p>
                        </div>
                    @endif
	            </div>
                @else
                    <div class="order-tracking-items-outer">
                        <div class="order-tracking">
	                    <span class="is-complete"></span>
                            <p>Picked up</p>
                        </div>
                        <div class="order-tracking">
                            <span class="is-complete"></span>
                            <p>Warehouse</p>
                        </div>
                        <div class="order-tracking">
                            <span class="is-complete"></span>
                            <p>Shipping</p>
                        </div>
                        <div class="order-tracking">
                            <span class="is-complete"></span>
                            <p>Customs</p>
                        </div>
                        <div class="order-tracking">
                            <span class="is-complete"></span>
                            <p>BD warehouse</p>
                        </div>
                        <div class="order-tracking">
                            <span class="is-complete"></span>
                            <p>Delivered</p>
                        </div>
                    </div>
                @endif
	        </div>
	    </div>
	</section>
	<!-- /Tracking -->
@endsection
