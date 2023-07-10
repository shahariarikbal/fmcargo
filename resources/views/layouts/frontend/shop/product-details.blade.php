@extends('layouts.frontend.master')

@section('title')
    Product Details | FM Cargo Service
@endsection

@section('content')
        <!-- Banner -->
        <section class="banner-section">
            <div class="container">
                <div class="banner-content-wrapper">
                    <h1 class="banner-title">Product Details</h1>
                    <ul class="banner-item">
                        <li>
                            <a href="index.html">
                                <i class="fas fa-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">
                            <a href="javascript:void(0)">
                                Details
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- /Banner -->

        <!-- Service details -->
        <div class="product-details-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="product-details-left-outer">
                            <div id="big" class="owl-carousel owl-theme">
                                @foreach ( json_decode($product->gallery_image) as $image )
                                <div class="item">
                                    <img src="{{ asset('product/'.$image) }}" alt="Image" class="product-image">
                                </div>
                                @endforeach
                            </div>
                            <!-- <img src="assets/images/product.webp" alt="Image" class="product-image">
                            <span class="product-details-discount-persent">
                                -15%
                            </span> -->
                        </div>
                        <div  id="thumbs" class="owl-carousel owl-theme">
                            @foreach (json_decode($product->gallery_image) as $image )
                            <div class="item">
                                <img src="{{ asset('product/'.$image) }}" alt="Image" class="product-image">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="product-details-right">
                            <h3 class="product-name">
                                {{ $product->{'short_description_'.app()->getLocale()} }}
                            </h3>
                            {{--  <ul class="product-details-item-ratting">
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
                            <span class="reviews-count">05 reviews</span>  --}}
                            <div class="product-details-price-outer">
                                {{--  <del class="main-price">
                                    $1500
                                </del>  --}}
                                <span class="discount-price">
                                    ${{ $product->{'price_'.app()->getLocale()} }}
                                </span>
                                {{--  <span class="discount-price-persect">
                                    (-15%)
                                </span>  --}}
                            </div>
                            <div class="product-count">
                                <div class="left">
                                    <label for="size">Quantity</label>
                                    <form action="{{ url('/product/add-to-cart/'.$product->id) }}" class="display-flex">
                                        @csrf
                                        <div class="product-increment-outer">
                                            <div class="qtyminus">-</div>
                                            <input type="text" name="quantity" value="1" class="qty">
                                            <div class="qtyplus">+</div>
                                        </div>
                                        <button type="submit" class="add-cart-btn">Add to Cart</button>
                                    </form>
                                </div>
                            </div>
                            <a href="{{ url('/product/add-to-cart/'.$product->id) }}" class="buy-now-btn">Buy Now</a>
                            <p class="category-of-product">
                                <strong>Category:</strong>
                                {{ $product->category->{'name_'.app()->getLocale()} }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="product-details-info-outer">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-details-tab" data-bs-toggle="pill" data-bs-target="#pills-details" type="button" role="tab" aria-controls="pills-details" aria-selected="true">Details</button>
                        </li>
                        {{--  <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-review-tab" data-bs-toggle="pill" data-bs-target="#pills-review" type="button" role="tab" aria-controls="pills-review" aria-selected="false">Review (01)</button>
                        </li>  --}}
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-details" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="details-tab-info">
                                {{--  <p class="text">  --}}
                                    {{ $product->{'long_description_'.app()->getLocale()} }}
                                {{--  </p>  --}}
                                {{--  <p class="text">
                                    The paragraph may also highlight any benefits or advantages that the product offers to the consumer, such as improved performance, durability, or convenience. Additionally, the product details paragraph may provide information on how to use the product, as well as any care or maintenance requirements that the user should be aware of. Overall, the purpose of a product details.
                                </p>  --}}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="review-items-wrap">
                                        <div class="review-item-outer">
                                            <div class="review-item-left">
                                                <img src="{{ asset('/frontend') }}/assets/images/review.png" alt="Avater">
                                            </div>
                                            <div class="review-item-right">
                                                <ul class="review-star-list">
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
                                                <p class="message">
                                                    Additionally, the product details paragraph may provide information on how to use the product, as well as any care or maintenance requirements that the user should be aware of.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-review-wrap">
                                        <h3 class="title">
                                            Add A Review
                                        </h3>
                                        <div class="stars">
                                            <input type="radio" id="star1" name="rating" class="star star-1" value="1">
                                            <label for="star1" class="star star-1"></label> <span class="text-danger text-center"></span>
                                            <input type="radio" id="star2" name="rating" class="star star-2" value="2">
                                            <label for="star2" class="star star-2"></label>
                                            <input type="radio" id="star3" name="rating" class="star star-3" value="3">
                                            <label for="star3" class="star star-3"></label>
                                            <input type="radio" id="star4" name="rating" class="star star-4" value="4">
                                            <label for="star4" class="star star-4"></label>
                                            <input type="radio" id="star5" name="rating" class="star star-5" value="5">
                                            <label for="star5" class="star star-5"></label>
                                        </div>
                                        <form action="" method="" class="review-form form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="review-form-item">
                                                        <label for="message">Write Review :</label>
                                                        <textarea name="message" rows="3" cols="50" class="form-control" placeholder="Write Something..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="review-form-item">
                                                        <input type="checkbox" name="check" id="check">
                                                        <label for="check">Please save my name, email address for the next time I comment. </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="review-form-item">
                                                        <label for="name">Your Name* :</label>
                                                        <input type="text" name="name" class="form-control" placeholder="Jackson Mile">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="review-form-item">
                                                        <label for="email">Your Email* :</label>
                                                        <input type="email" name="email" class="form-control" placeholder="example@gamil.com">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="review-form-submit-btn">
                                                Submit
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Service details -->
@endsection
