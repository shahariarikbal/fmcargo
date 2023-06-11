@extends('layouts.frontend.master')

@section('title')
    Checkout | FM Cargo Service
@endsection

@section('content')
    <!-- Banner -->
	<section class="banner-section">
		<div class="container">
			<div class="banner-content-wrapper">
				<h1 class="banner-title">Billing Details</h1>
				<ul class="banner-item">
					<li>
						<a href="{{ url('/') }}">
							<i class="fas fa-home"></i>
							Home
						</a>
					</li>
					<li class="active">
						<a href="javascript:void(0)">
							Billing
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- /Banner -->
    <section class="billing-details-section">
        <div class="container">
            <form action="" method="" class="form-group">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="billing-details-form-outer">
                            <h4 class="billing-details-title">
                                Billing Details
                            </h4>
                            <div class="billing-details-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-field-wrap">
                                            <label for="first_name">First Name* :</label>
                                            <input type="text" name="first_name" class="form-control" placeholder="Jackson Mile">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-field-wrap">
                                            <label for="last_name">Last Name* :</label>
                                            <input type="text" name="last_name" class="form-control" placeholder="Jackson Mile">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-field-wrap">
                                            <label for="division">Division* :</label>
                                            <select name="division" id="divisions">
                                                <option disabled selected>Select Division</option>
                                                <option value="Barishal">Barishal</option>
                                                <option value="Chattogram">Chattogram</option>
                                                <option value="Dhaka">Dhaka</option>
                                                <option value="Khulna">Khulna</option>
                                                <option value="Mymensingh">Mymensingh</option>
                                                <option value="Rajshahi">Rajshahi</option>
                                                <option value="Rangpur">Rangpur</option>
                                                <option value="Sylhet">Sylhet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-field-wrap">
                                            <label for="district">District* :</label>
                                            <select name="district" class="form-control">
                                                <option selected disabled>-- Select Country --</option>
                                                <option value="Dhaka">Dhaka</option>
                                                <option value="Faridpur">Faridpur</option>
                                                <option value="Gazipur">Gazipur</option>
                                                <option value="Gopalganj">Gopalganj</option>
                                                <option value="Jamalpur">Jamalpur</option>
                                                <option value="Kishoreganj">Kishoreganj</option>
                                                <option value="Madaripur">Madaripur</option>
                                                <option value="Manikganj">Manikganj</option>
                                                <option value="Munshiganj">Munshiganj</option>
                                                <option value="Mymensingh">Mymensingh</option>
                                                <option value="Narayanganj">Narayanganj</option>
                                                <option value="Narsingdi">Narsingdi</option>
                                                <option value="Netrokona">Netrokona</option>
                                                <option value="Rajbari">Rajbari</option>
                                                <option value="Shariatpur">Shariatpur</option>
                                                <option value="Sherpur">Sherpur</option>
                                                <option value="Tangail">Tangail</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-field-wrap">
                                            <label for="post_code">Post Code* :</label>
                                            <input type="text" name="post_code" class="form-control" placeholder="3100">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-field-wrap">
                                            <label for="email">Email* :</label>
                                            <input type="email" name="email" class="form-control" placeholder="info@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-field-wrap">
                                            <label for="address">Address :</label>
                                            <textarea name="address" class="form-control" rows="4" cols="50" placeholder="Address here..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="billing-details-form-outer">
                            <h4 class="billing-details-title">
                                Total Cost
                            </h4>
{{--                            <div class="cart-product-item-wrap">--}}
{{--                                <div class="cart-product-item-left">--}}
{{--                                    <img src="{{ asset('/frontend/') }}/assets/images/cart-product.png" alt="image">--}}
{{--                                </div>--}}
{{--                                <div class="cart-product-item-right">--}}
{{--                                    <div class="left">--}}
{{--                                        <h5 class="cart-product-name">--}}
{{--                                            Shopify Leads--}}
{{--                                        </h5>--}}
{{--                                        <p class="cart-product-price">--}}
{{--                                            $1500.00--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                    <div class="right">--}}
{{--                                        QTY 01--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                                @php
                                    $sum = 0;
                                    foreach ($addToCart as $product){
                                        $price = $product->product->price;

                                        $sum += $price;
                                    }
                                @endphp
                            <div class="total-payment-form mt-3">
                                <div class="sub-total-wrap">
{{--                                    <div class="sub-total-item">--}}
{{--                                        <strong>Sub Total</strong>--}}
{{--                                        <strong>$1500.00</strong>--}}
{{--                                    </div>--}}
                                    <div class="sub-total-item">
                                        <strong>Sub Total</strong>
                                        <strong>৳ {{ $sum }}</strong>
                                    </div>
                                    <div class="sub-total-item grand-total">
                                        <strong>Grand Total</strong>
                                        <strong>৳ {{ $sum }}</strong>
                                    </div>
                                </div>
                                <h6 class="payment-item-title">
                                    Select Payment Method
                                </h6>
                                <div class="payment-items-wrap">
                                    <div class="payment-item-outer">
                                        <input type="radio" name="payment" id="visa" value="visa">
                                        <label for="visa">
                                            <img src="{{ asset('/frontend/') }}/assets/images/paypal.jpeg" alt="image">
                                        </label>
                                    </div>
                                    <div class="payment-item-outer">
                                        <input type="radio" name="payment" id="wise" value="wise">
                                        <label for="wise">
                                            <img src="{{ asset('/frontend/') }}/assets/images/stripe.jpeg" alt="image">
                                        </label>
                                    </div>
                                    <div class="payment-item-outer">
                                        <input type="radio" name="payment" id="strip" value="strip">
                                        <label for="strip">
                                            <img src="{{ asset('/frontend/') }}/assets/images/wise.jpeg" alt="image">
                                        </label>
                                    </div>
                                    <div class="payment-item-outer">
                                        <input type="radio" name="payment" id="paypal" value="paypal">
                                        <label for="paypal">
                                            <img src="{{ asset('/frontend/') }}/assets/images/visa.jpeg" alt="image">
                                        </label>
                                    </div>
                                </div>
                                <div class="condition-ac-wrap">
                                    <input type="checkbox" name="check" id="check">
                                    <label for="check">
                                        I have read and agree to the website
                                        <a href="#" style="color: #FF7E16;">Terms & Conditions.</a>
                                    </label>
                                </div>
                                <button type="submit" class="order-place-btn-inner">
                                    Place An Order
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
