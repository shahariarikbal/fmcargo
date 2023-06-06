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
						<a href="index.html">
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
                                            <label for="company_name">Company Name :</label>
                                            <input type="text" name="company_name" class="form-control" placeholder="Bitsro Ltd">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-field-wrap">
                                            <label for="country">Country* :</label>
                                            <select name="country" class="form-control">
                                                <option selected disabled>-- Select Country --</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Australia">Australia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-field-wrap">
                                            <label for="address">Address* :</label>
                                            <input type="text" name="address" class="form-control" placeholder="Type Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-field-wrap">
                                            <label for="city">City* :</label>
                                            <select name="city" class="form-control">
                                                <option selected disabled>-- Select City --</option>
                                                <option value="Sydney">Sydney</option>
                                                <option value="Sydney">Sydney</option>
                                                <option value="Sydney">Sydney</option>
                                                <option value="Sydney">Sydney</option>
                                                <option value="Sydney">Sydney</option>
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
                                        <h4 class="billing-details-title">
                                            Additional Information
                                        </h4>
                                    </div>                              
                                    <div class="col-md-12">
                                        <div class="input-field-wrap">
                                            <label for="note">Order Notes :</label>
                                            <textarea name="note" class="form-control" rows="4" cols="50" placeholder="About your orders..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="billing-details-form-outer">
                            <h4 class="billing-details-title">
                                Your Product
                            </h4>
                            <div class="cart-product-item-wrap">
                                <div class="cart-product-item-left">
                                    <img src="{{ asset('/frontend') }}/assets/images/cart-product.png" alt="image">
                                </div>
                                <div class="cart-product-item-right">
                                    <div class="left">
                                        <h5 class="cart-product-name">
                                            Shopify Leads
                                        </h5>
                                        <p class="cart-product-price">
                                            $1500.00
                                        </p>
                                    </div>
                                    <div class="right">
                                        QTY 01
                                    </div>
                                </div>
                            </div>
                            <div class="total-payment-form">
                                <div class="sub-total-wrap">
                                    <div class="sub-total-item">
                                        <strong>Sub Total</strong>
                                        <strong>$1500.00</strong>
                                    </div>
                                    <div class="sub-total-item">
                                        <strong>Sub Total</strong>
                                        <strong>$1500.00</strong>
                                    </div>
                                    <div class="sub-total-item grand-total">
                                        <strong>Sub Total</strong>
                                        <strong>$1500.00</strong>
                                    </div>
                                </div>
                                <h6 class="payment-item-title">
                                    Select Payment Method
                                </h6>
                                <div class="payment-items-wrap">
                                    <div class="payment-item-outer">
                                        <input type="radio" name="payment" id="visa" value="visa">
                                        <label for="visa">
                                            <img src="{{ asset('/frontend') }}/assets/images/payment1.png" alt="image">
                                        </label>
                                    </div>
                                    <div class="payment-item-outer">
                                        <input type="radio" name="payment" id="wise" value="wise">
                                        <label for="wise">
                                            <img src="{{ asset('/frontend') }}/assets/images/payment2.png" alt="image">
                                        </label>
                                    </div>
                                    <div class="payment-item-outer">
                                        <input type="radio" name="payment" id="strip" value="strip">
                                        <label for="strip">
                                            <img src="{{ asset('/frontend') }}/assets/images/payment3.png" alt="image">
                                        </label>
                                    </div>
                                    <div class="payment-item-outer">
                                        <input type="radio" name="payment" id="paypal" value="paypal">
                                        <label for="paypal">
                                            <img src="{{ asset('/frontend') }}/assets/images/payment4.png" alt="image">
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