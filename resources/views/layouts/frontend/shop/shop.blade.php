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
                @foreach ($frontend_contents['products'] as $product )
				<div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-item-wrap">
						<div class="product-image-outer">
                            @if (substr($product->image, 0, 5) == 'https')
                            <img src="https://via.placeholder.com/640x480.png/00bbbb?text=commodi" alt="product" class="product-image">
                            @else
                            <img src="{{ asset('product/'.$product->image) }}" alt="product" class="product-image">
                            @endif
							{{--  <span class="product-discount-persent">
								-15%
							</span>  --}}
							<div class="product-action">
                                <a class="action-btn" href="#">
                                	<i class="fas fa-shopping-cart"></i>
                                </a>
                            </div>
						</div>
						<div class="product-info-outer">
							{{--  <ul class="product-item-ratting">
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
                            </ul>  --}}
                            <a href="{{ url('/product/details') }}" class="product-name">
                            	{{ $product->name }}
                            </a>
                            <div class="product-price-outer">
                            	{{--  <del class="main-price">
                            		$300
                            	</del>  --}}
                            	<span class="discount-price">
                            		${{ $product->price }}
                            	</span>
                            </div>
						</div>
					</div>
				</div>
                @endforeach
			</div>
			{{--  <div class="product-load-btn-outer">
				<a href="#" class="product-load-btn-inner">
					Load More
				</a>
			</div>  --}}
		</div>
	</section>
    <!-- /Shop -->
@endsection
