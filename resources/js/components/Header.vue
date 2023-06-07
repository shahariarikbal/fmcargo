<template>
    <div>
        <div class="header-top-wrap">
            <div class="header-top-left">
                <ul class="social-icon-list">
                    <li class="social-icon-list-item">
                        <a href="javascript:void(0);" class="fab fa-facebook-f"></a>
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
                <a href="mailto:info@example.com">
                    <i class="fa fa-envelope"></i>
                    <span>info@example.com</span>
                </a>
                <a href="tel:+141 1234 567 890">
                    <i class="fas fa-phone-alt"></i>
                    <span>+141 1234 567 890</span>
                </a>
            </div>
        </div>
        <!-- /Header Top -->
        <!-- Main Header -->
        <div class="header-bottom-wrap">
            <!-- Website Logo -->
            <div class="header-brand-logo-outer">
                <a href="{{ url('/') }}" class="header-brand-logo">
                    <img src="{{ asset('/frontend/') }}/assets/images/logo2.png" width="193" height="89" alt="logo">
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
                        <a href="{{ url('/') }}" class="nav-item-link">
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
                                <a href="service-details.html" class="submenu-item-link">
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
                        <a href="tracking.html" class="nav-item-link">
                            Tracking
                        </a>
                    </li>
                    <li class="nav-list-item">
                        <a href="contact.html" class="nav-item-link">
                            Contact Us
                        </a>
                    </li>
                    <li class="nav-list-item item-has-submenu">
                        <a href="javascript:;" class="nav-item-link">
                            SignIn / SignUp
                            <i class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="nav-item-submenu">
                            <li class="submenu-item">
                                <a href="login.html" class="submenu-item-link">
                                    Login
                                </a>
                            </li>
                            <li class="submenu-item">
                                <a href="ragistration.html" class="submenu-item-link">
                                    Registration
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-list-item">
                        <a href="shop.html" class="nav-item-link">
                            Shop
                        </a>
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
    </div>
</template>

<script>
export default {
    name: "Header"
}
</script>

<style scoped>

</style>
