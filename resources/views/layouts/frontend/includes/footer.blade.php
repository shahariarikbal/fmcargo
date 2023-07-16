<footer class="footer-section">
    <div class="footer-top-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item-wrapper">
                        <img src="{{ asset('setting/'.$setting->logo) }}" alt="Footer Logo" class="footer-brand-logo">
                        <p class="footer-item-des">
                            {{ $setting->{ 'footer_description_'.app()->getLocale() } }}
                        </p>
                        <ul class="socials-link-list">
                            <li class="socials-link-list-item">
                                <a href="{{ url($setting->facebook) }}" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="socials-link-list-item">
                                <a href="{{ url('https://wa.me/'.$setting->whatsapp) }}" target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>
                            <li class="socials-link-list-item">
                                <a href="#">
                                    <i class="fab fa-weixin"></i>
                                </a>
                            </li>
                            <li class="socials-link-list-item">
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item-wrapper">
                        <h5 class="footer-item-heading">
                        @if (app()->getLocale()=='bn')
                        কর্মপন্থা
                        @else
                        Policis
                        @endif
                        </h5>
                        <ul class="service-list">
                            <li class="service-list-item">
                                <a href="{{ url('/terms/condition') }}" class="service-list-item-link">
                                    @if (app()->getLocale()=='bn')
                                    শর্তাবলী
                                    @else
                                    Terms & Conditions
                                    @endif
                                </a>
                            </li>
                            <li class="service-list-item">
                                <a href="{{ url('/privacy/policy') }}" class="service-list-item-link">
                                    @if (app()->getLocale()=='bn')
                                    গোপনীয়তা নীতি
                                    @else
                                    Privacy Policy
                                    @endif
                                </a>
                            </li>
                            <li class="service-list-item">
                                <a href="{{ url('/about') }}" class="service-list-item-link">
                                    @if (app()->getLocale()=='bn')
                                    আমাদের সম্পর্কে
                                    @else
                                    About Us
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item-wrapper">
                        <h5 class="footer-item-heading">
                        @if (app()->getLocale()=='bn')
                        আমাদের পেজ
                        @else
                        Our pages
                        @endif
                        </h5>
                        <ul class="service-list">
                            <li class="service-list-item">
                                <a href="{{ url('/tracking') }}" class="service-list-item-link">
                                    @if (app()->getLocale()=='bn')
                                    ট্র্যাকিং
                                    @else
                                    Tracking
                                    @endif
                                </a>
                            </li>
                            <li class="service-list-item">
                                <a href="{{ url('/shop') }}" class="service-list-item-link">
                                    @if (app()->getLocale()=='bn')
                                    দোকান
                                    @else
                                    Shop
                                    @endif
                                </a>
                            </li>
                            <li class="service-list-item">
                                <a href="{{ url('/contact') }}" class="service-list-item-link">
                                    @if (app()->getLocale()=='bn')
                                    যোগাযোগ করুন
                                    @else
                                    Contact Us
                                    @endif
                                </a>
                            </li>
                            <li class="service-list-item">
                                <a href="{{ url('/customer/login') }}" class="service-list-item-link">
                                    @if (app()->getLocale()=='bn')
                                    লগইন
                                    @else
                                    Login
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item-wrapper">
                        <h5 class="footer-item-heading">
                        @if (app()->getLocale()=='bn')
                        যোগাযোগের তথ্য
                        @else
                        Contact Info
                        @endif
                        </h5>
                        <div class="footer-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="content">
                                <h6 class="name">
                                    @if (app()->getLocale()=='bn')
                                    ঠিকানা
                                    @else
                                    Address
                                    @endif
                                </h6>
                                <p class="text">
                                    {{ $setting->{ 'address_'.app()->getLocale() } }}
                                </p>
                            </div>
                        </div>
                        <div class="footer-item">
                            <i class="fas fa-mobile-alt"></i>
                            <div class="content">
                                <h6 class="name">
                                    @if (app()->getLocale()=='bn')
                                    ফোন
                                    @else
                                    PHONE
                                    @endif
                                </h6>
                                <a href="tel:01688801343" class="text">
                                    01688-801343, 01511-027225
                                </a>
                            </div>
                        </div>
                        <div class="footer-item">
                            <i class="fas fa-envelope"></i>
                            <div class="content">
                                <h6 class="name">
                                    @if (app()->getLocale()=='bn')
                                    ইমেইল
                                    @else
                                    EMAIL
                                    @endif
                                </h6>
                                <a href="mailto:info@demo.com" class="text">
                                    fmcargoworld@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-wrapper">
        <div class="container">
            <div class="footer-bottom-text">
                <p>
                    © copyright 2022. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
