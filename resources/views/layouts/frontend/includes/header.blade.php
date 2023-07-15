<header class="header-section">
    <!-- Header Top -->
    <div class="header-top-wrap">
        <div class="header-top-left">
            <ul class="social-icon-list">
                <li class="social-icon-list-item">
                    <a href="{{ url($setting->facebook) }}" class="fab fa-facebook-f"></a>
                </li>
                <li class="social-icon-list-item">
                    <a href="javascript:void(0);" class="fab fa-whatsapp"></a>
                </li>
                <li class="social-icon-list-item">
                    <a href="javascript:void(0);" class="fab fa-weixin"></a>
                </li>
                <li class="social-icon-list-item">
                    <a href="javascript:void(0);" class="fab fa-youtube"></a>
                </li>
            </ul>
        </div>
        <div class="header-top-right">
            <a href="{{ url('mailto:'.$setting->email) }}">
                <i class="fa fa-envelope"></i>
                <span>{{ $setting->email }}</span>
            </a>
            <a href="{{ url('tel:'.$setting->phone) }}">
                <i class="fas fa-phone-alt"></i>
                <span>{{ $setting->phone }}</span>
            </a>
        </div>
    </div>
    <!-- /Header Top -->
    <!-- Main Header -->
    <div class="header-bottom-wrap">
        <!-- Website Logo -->
        <div class="header-brand-logo-outer">
            <a href="{{ url('/') }}" class="header-brand-logo">
                <img src="{{ asset('setting/'.$setting->logo) }}" width="193" height="89" alt="logo">
            </a>
        </div>
        <!-- Nav Item -->
        <div class="nav-items-wrap">
            <!-- Nav Toggle Button -->
            <div class="nav-toggle-btn">
                <div class="btn-inner"></div>
            </div>
            <!-- Main Nav -->
            <ul class="nav-item-list">
                <li class="nav-list-item">
                    <a href="{{url('/')}}" class="nav-item-link">
                        @if (app()->getLocale()=='bn')
                        হোম
                        @else
                        Home
                        @endif
                    </a>
                </li>
                <li class="nav-list-item item-has-submenu">
                    <a href="javascript:;" class="nav-item-link">
                        @if (app()->getLocale()=='bn')
                        সেবা
                        @else
                        Services
                        @endif
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="nav-item-submenu">
                        <li class="submenu-item">
                            <a href="{{ url('/door/to/door/service') }}" class="submenu-item-link">
                                @if (app()->getLocale()=='bn')
                                দ্বারে দ্বারে
                                @else
                                Door To Door
                                @endif
                            </a>
                        </li>
                         <li class="submenu-item">
                            <a href="{{ url('/specialized/service') }}" class="submenu-item-link">
                                @if (app()->getLocale()=='bn')
                                বিশেষজ্ঞ
                                @else
                                Specialized
                                @endif
                            </a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ url('/cf/service') }}" class="submenu-item-link">
                                @if (app()->getLocale()=='bn')
                                সিএন্ডএফ
                                @else
                                C&F
                                @endif
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-list-item">
                    <a href="{{ url('/tracking') }}" class="nav-item-link">
                        @if (app()->getLocale()=='bn')
                        ট্র্যাকিং
                        @else
                        Tracking
                        @endif
                    </a>
                </li>
                <li class="nav-list-item">
                    <a href="{{ url('/shop') }}" class="nav-item-link">
                        @if (app()->getLocale()=='bn')
                        দোকান
                        @else
                        Shop
                        @endif
                    </a>
                </li>
                <li class="nav-list-item">
                    <a href="{{ url('/contact') }}" class="nav-item-link">
                        @if (app()->getLocale()=='bn')
                        যোগাযোগ করুন
                        @else
                        Contact Us
                        @endif
                    </a>
                </li>
                @if(!session()->get('userId'))
                <li class="nav-list-item item-has-submenu">
                    <a href="javascript:;" class="nav-item-link">
                        @if (app()->getLocale()=='bn')
                        সাইন ইন / সাইন আপ
                        @else
                        SignIn / SignUp
                        @endif
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="nav-item-submenu">
                        <li class="submenu-item">
                            <a href="{{ url('/customer/login') }}" class="submenu-item-link">
                                @if (app()->getLocale()=='bn')
                                লগইন
                                @else
                                Login
                                @endif
                            </a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ url('/registration') }}" class="submenu-item-link">
                                @if (app()->getLocale()=='bn')
                                নিবন্ধন
                                @else
                                Registration
                                @endif
                            </a>
                        </li>
                    </ul>
                </li>
                @else
                    <li class="nav-list-item item-has-submenu">
                        <a href="javascript:;" class="nav-item-link" style="color: orangered; font-weight: 600">
                            {{ ucfirst(session()->get('userName')) }}
                            <i class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="nav-item-submenu">
                            <li class="submenu-item">
                                <a href="{{ url('/customer/logout') }}" class="submenu-item-link">
                                    @if (app()->getLocale()=='bn')
                                    লগ আউট
                                    @else
                                    Logout
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
                <li class="nav-list-item item-has-submenu">
                    <a href="javascript:;" class="nav-item-link">
                        @if (app()->getLocale()=='bn')
                        ভাষা
                        @else
                        Language
                        @endif
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="nav-item-submenu">
                        @foreach(config('app.available_locale') as $locale)
                        <li class="submenu-item"><a class="submenu-item-link" href="{{ request()->url() }}?language={{ $locale }}">{{
                                strtoupper($locale) }}</a></li>
                        @endforeach
                        {{-- <li class="submenu-item">
                            <a href="#" class="submenu-item-link">
                                English
                            </a>
                        </li>
                        <li class="submenu-item">
                            <a href="#" class="submenu-item-link">
                                Bangla
                            </a>
                        </li> --}}
                    </ul>
                </li>
            </ul>
        </div>
        <!-- <div class="cart-items-wrap">
            <ul class="nav-item-list">
                <li class="nav-list-item">
                    <a href="#" class="nav-item-link">
                        Cart <sup>(2)</sup>
                    </a>
                </li>
            </ul>
        </div>
 -->    </div>
    <!-- Main Header END -->
</header>
