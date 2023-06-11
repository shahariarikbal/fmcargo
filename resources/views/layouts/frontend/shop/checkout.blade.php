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
            <form action="{{ url('/order/complete') }}" method="post" class="form-group">
                @csrf
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
                                            <label for="first_name">First Name :</label>
                                            <input type="text" name="first_name" value="{{ session()->has('firstName') ? session()->get('firstName') : old('first_name') }}" class="form-control" placeholder="Jackson Mile">
                                        </div>
                                        @if ($errors->has('first_name'))
                                            <div class="text-danger">{{ $errors->first('first_name') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-field-wrap">
                                            <label for="last_name">Last Name :</label>
                                            <input type="text" name="last_name" value="{{ session()->has('lastName') ? session()->get('lastName') : old('last_name') }}" class="form-control" placeholder="Jackson Mile">
                                        </div>
                                        @if ($errors->has('last_name'))
                                            <div class="text-danger">{{ $errors->first('last_name') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-field-wrap">
                                            <label for="division">Division* :</label>
                                            <select name="division" id="divisions" class="form-control">
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
                                        @if ($errors->has('division'))
                                            <div class="text-danger">{{ $errors->first('division') }}</div>
                                        @endif
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
                                                <option value="Bogra">Bogra</option>
                                                <option value="Joypurhat">Joypurhat</option>
                                                <option value="Naogaon">Naogaon</option>
                                                <option value="Natore">Natore</option>
                                                <option value="Nawabganj">Nawabganj</option>
                                                <option value="Pabna">Pabna</option>
                                                <option value="Rajshahi">Rajshahi</option>
                                                <option value="Sirajgonj">Sirajgonj</option>
                                                <option value="Dinajpur">Dinajpur</option>
                                                <option value="Gaibandha">Gaibandha</option>
                                                <option value="Kurigram">Kurigram</option>
                                                <option value="Lalmonirhat">Lalmonirhat</option>
                                                <option value="Nilphamari">Nilphamari</option>
                                                <option value="Panchagarh">Panchagarh</option>
                                                <option value="Rangpur">Rangpur</option>
                                                <option value="Thakurgaon">Thakurgaon</option>
                                                <option value="Barguna">Barguna</option>
                                                <option value="Barisal">Barisal</option>
                                                <option value="Bhola">Bhola</option>
                                                <option value="Jhalokati">Jhalokati</option>
                                                <option value="Patuakhali">Patuakhali</option>
                                                <option value="Pirojpur">Pirojpur</option>
                                                <option value="Bandarban">Bandarban</option>
                                                <option value="Brahmanbaria">Brahmanbaria</option>
                                                <option value="Chandpur">Chandpur</option>
                                                <option value="Chittagong">Chittagong</option>
                                                <option value="Comilla">Comilla</option>
                                                <option value="Cox''s Bazar">Cox''s Bazar</option>
                                                <option value="Feni">Feni</option>
                                                <option value="Khagrachari">Khagrachari</option>
                                                <option value="Lakshmipur">Lakshmipur</option>
                                                <option value="Noakhali">Noakhali</option>
                                                <option value="Rangamati">Rangamati</option>
                                                <option value="Habiganj">Habiganj</option>
                                                <option value="Maulvibazar">Maulvibazar</option>
                                                <option value="Sunamganj">Sunamganj</option>
                                                <option value="Sylhet">Sylhet</option>
                                                <option value="Bagerhat">Bagerhat</option>
                                                <option value="Chuadanga">Chuadanga</option>
                                                <option value="Jessore">Jessore</option>
                                                <option value="Jhenaidah">Jhenaidah</option>
                                                <option value="Khulna">Khulna</option>
                                                <option value="Kushtia">Kushtia</option>
                                                <option value="Magura">Magura</option>
                                                <option value="Meherpur">Meherpur</option>
                                                <option value="Narail">Narail</option>
                                                <option value="Satkhira">Satkhira</option>
                                            </select>
                                        </div>
                                        @if ($errors->has('district'))
                                            <div class="text-danger">{{ $errors->first('district') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-field-wrap">
                                            <label for="post_code">Post Code* :</label>
                                            <input type="text" name="post_code" value="{{ old('post_code') }}" class="form-control" placeholder="3100">
                                        </div>
                                        @if ($errors->has('post_code'))
                                            <div class="text-danger">{{ $errors->first('post_code') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-field-wrap">
                                            <label for="email">Email* :</label>
                                            <input type="email" name="email" value="{{ session()->has('email') ? session()->get('email') : old('email') }}" class="form-control" placeholder="info@gmail.com">
                                        </div>
                                        @if ($errors->has('email'))
                                            <div class="text-danger">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-field-wrap">
                                            <label for="address">Address :</label>
                                            <textarea name="address" class="form-control" rows="4" cols="50" placeholder="Address here...">{{ old('address') }}</textarea>
                                        </div>
                                        @if ($errors->has('email'))
                                            <div class="text-danger">{{ $errors->first('email') }}</div>
                                        @endif
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
                                    $qty = 0;
                                    foreach ($addToCart as $product){
                                        $price = $product->product?->price;
                                        $p_qty = $product?->quantity;

                                        $sum += $price;
                                        $qty += $p_qty;
                                    }
                                @endphp
                            <div class="total-payment-form mt-3">
                                @foreach($addToCart as $cartProduct)
                                    <input type="hidden" name="product_id[]" value="{{ $cartProduct?->product_id }}">
                                    <input type="hidden" name="price[]" value="{{ $cartProduct->product?->price }}">
                                    <input type="hidden" name="qty[]" value="{{ $cartProduct?->quantity }}">
                                @endforeach
                                    <input type="hidden" name="total_price" value="{{ $sum }}">
                                    <input type="hidden" name="total_qty" value="{{ $qty }}">
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
                                    <div class="payment-item-outer">
                                        <input type="radio" name="payment" id="cod" value="cod">
                                        <label for="cod">
                                            <img src="{{ asset('/frontend/') }}/assets/images/cod.png" alt="image">
                                        </label>
                                    </div>
                                </div>
                                    @if ($errors->has('payment'))
                                        <div class="text-danger">{{ $errors->first('payment') }}</div>
                                    @endif
                                <div class="condition-ac-wrap">
                                    <input type="checkbox" name="check" id="check" required>
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
