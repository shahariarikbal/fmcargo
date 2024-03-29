<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Pavicon ICon -->
    @include('layouts.frontend.includes.style')
</head>
<body>

<!-- Header -->
@include('layouts.frontend.includes.header')
<!-- Header END -->

<main class="main-section">
    <div class="shopping-cart">
        <div class="cart-hide-icon cart-show-hide-btn">
            <button class="shopping-cart-close-icon">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        <div class="shopping-cart-items-count">
            <div class="left">
                <p class="shopping-cart-item-cont">
                    <span>
                        <i class="fas fa-shopping-bag"></i>
                    </span>
                    <span class="shopping-item-number">
                        {{ $addToCartCount }}
                    </span>
                    <span>items</span>
                </p>
            </div>
            <div class="right cart-show-hide-btn">
                <button class="shopping-cart-close-btn">
                    close
                </button>
            </div>
        </div>
        <div class="shopping-delivery">
            <span>
                <i class="fas fa-truck"></i>
                Express Delivery
            </span>
        </div>
        <div class="shopping-order-items-wrapper">
            @php
            $sum = 0;
            @endphp
            @foreach ($addToCart as $item )
            <div class="shopping-order-item-outer">
                <div class="order-quantity">
                    <div>
                        <i class="fas fa-chevron-up"></i>
                    </div>
                    <span>{{ $item?->quantity }}</span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="shopping-order-item-image">
                    <img src="{{ asset('product/'.$item->product?->image) }}" />
                </div>
                <div class="shopping-order-item-name">
                    <h3 class="name">
                        {{ $item->product?->name_en }}
                    </h3>
                    <span class="sub-text">
                        ৳ {{ $totalPrice = $item->product?->price_en }}
                    </span>
                </div>
                <div class="shopping-order-item-amount">
                    <a href="{{ url('/delete/add-to-cart/'.$item->id) }}" class="shopping-order-item-delete-btn">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
                @php
                    $sum += $totalPrice;
                @endphp
            @endforeach
        </div>
        <div class="shopping-cart-order-check">
            <span class="shopping-order-price">
                ৳ {{ $sum }}
            </span>
            <a href="{{ url('/checkout') }}" class="shopping-order-view-cart">
                Place Order
            </a>
        </div>
    </div>
    {{-- <div class="add-cart-outer cart-show-hide-btn">
        <div class="cart-item-count">
            <i class="fas fa-shopping-bag"></i>
            <span class="items-number">{{ $addToCartCount }}</span>
        </div>
    </div> --}}
    <!-- /Fixed Cart -->

    <!-- Fixed Social Icon -->
    <div class="fixed-social-icon-wrap">
        <ul class="fixed-social-list">
            <li class="fixed-social-list-item">
                <div class="add-cart-outer cart-show-hide-btn">
                    <div class="cart-item-count">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="items-number">{{ $addToCartCount }}</span>
                    </div>
                </div>
            </li>
            <li class="fixed-social-list-item">
                <a href="{{ url('https://wa.me/'.$setting?->whatsapp) }}" class="fixed-social-list-item-link">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </li>
            <li class="fixed-social-list-item">
                <a href="#" class="fixed-social-list-item-link">
                    <i class="fab fa-weixin"></i>
                </a>
            </li>
            <li class="fixed-social-list-item">
                <a href="{{ url($setting?->facebook) }}" target="_blank" class="fixed-social-list-item-link">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li class="fixed-social-list-item">
                <a href="{{ url($setting?->wechat) }}" target="_blank"  class="fixed-social-list-item-link">
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
        </ul>
    </div>
    <!-- /Fixed Social Icon -->
    @yield('content')
    <!-- /Blog -->
</main>

<!-- Footer -->
@include('layouts.frontend.includes.footer')
<!-- /Footer -->

@include('layouts.frontend.includes.script')
@stack('script')
</body>
</html>
