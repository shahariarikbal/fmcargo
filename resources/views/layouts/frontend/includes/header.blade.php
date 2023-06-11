<header class="header-section">
    <!-- Header Top -->
    <div class="header-top-wrap">
        <div class="header-top-left">
            <ul class="social-icon-list">
                <li class="social-icon-list-item">
                    <a href="{{ url($setting->facebook) }}" class="fab fa-facebook-f"></a>
                </li>
                <li class="social-icon-list-item">
                    <a href="javascript:void(0);" class="fab fa-twitter"></a>
                </li>
                <li class="social-icon-list-item">
                    <a href="javascript:void(0);" class="fab fa-linkedin-in"></a>
                </li>
                <li class="social-icon-list-item">
                    <a href="javascript:void(0);" class="fab fa-google-plus-g"></a>
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
                        Home
                    </a>
                </li>
                <li class="nav-list-item item-has-submenu">
                    <a href="javascript:;" class="nav-item-link">
                        Services
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="nav-item-submenu">
                        <li class="submenu-item">
                            <a href="{{ url('/service/details') }}" class="submenu-item-link">
                                Door To Door
                            </a>
                        </li>
                        <li class="submenu-item">
                            <a href="service-details.html" class="submenu-item-link">
                                Specialized
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-list-item">
                    <a href="{{ url('/tracking') }}" class="nav-item-link">
                        Tracking
                    </a>
                </li>
                <li class="nav-list-item">
                    <a href="{{ url('/shop') }}" class="nav-item-link">
                        Shop
                    </a>
                </li>
                <li class="nav-list-item">
                    <a href="{{ url('/contact') }}" class="nav-item-link">
                        Contact Us
                    </a>
                </li>
                @if(!session()->get('userId'))
                <li class="nav-list-item item-has-submenu">
                    <a href="javascript:;" class="nav-item-link">
                        SignIn / SignUp
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="nav-item-submenu">
                        <li class="submenu-item">
                            <a href="{{ url('/customer/login') }}" class="submenu-item-link">
                                Login
                            </a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ url('/registration') }}" class="submenu-item-link">
                                Registration
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
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
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
