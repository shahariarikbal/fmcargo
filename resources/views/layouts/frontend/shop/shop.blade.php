@extends('layouts.frontend.master')

@section('title')
    Shop | FM Cargo Service
@endsection

@section('content')
    <!-- Banner -->
    <section class="banner-section">
        <div class="container">
            <div class="banner-content-wrapper">
                <h1 class="banner-title">Shop</h1>
                <ul class="banner-item">
                    <li>
                        <a href="index.html">
                            <i class="fas fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li class="active">
                        <a href="javascript:void(0)">
                            Shop
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- /Banner -->
    <!-- Shop -->
    <section class="product-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="product-item-wrap">
						<div class="product-image-outer">
							<img src="{{ asset('/frontend') }}/assets/images/product.webp" alt="Image" class="product-image">	
							<span class="product-discount-persent">
								-15%
							</span>
							<div class="product-action">
                                <a class="action-btn" href="#">
                                	<i class="fas fa-shopping-cart"></i>
                                </a>
                            </div>
						</div>
						<div class="product-info-outer">
							<ul class="product-item-ratting">
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                            </ul>
                            <a href="{{ url('/product/details') }}" class="product-name">
                            	Maytto Mini Portable Fan
                            </a>
                            <div class="product-price-outer">
                            	<del class="main-price">
                            		$300
                            	</del>
                            	<span class="discount-price">
                            		$200
                            	</span>
                            </div>
						</div>
					</div>
				</div>
			</div>
			<div class="product-load-btn-outer">
				<a href="#" class="product-load-btn-inner">
					Load More
				</a>
			</div>
		</div>
	</section>
    <!-- /Shop -->
@endsection