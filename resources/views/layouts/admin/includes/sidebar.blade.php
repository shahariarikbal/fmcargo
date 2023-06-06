<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <a class="nav-link" href="{{ url('dashboard') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                Dashboard
            </a>
            <a class="nav-link" href="{{ url('dashboard') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                Customer Register
            </a>
            <a class="nav-link" href="{{ route('customer.booking.list') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                Customer Booking
            </a>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#ecommerce" aria-expanded="false" aria-controls="ecommerce">
                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                Ecommerce Settings
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="ecommerce" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('category.list') }}">Category</a>
                    <a class="nav-link" href="{{ route('brand.list') }}">Brand</a>
                    <a class="nav-link" href="{{ route('product.list') }}">Product</a>
                    <a class="nav-link" href="#">Order Management</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Website Settings
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ url('/settings/show/1') }}">Settings</a>
                    {{--  <a class="nav-link" href="#">Light Sidenav</a>  --}}
                </nav>
            </div>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        {{ optional(auth()->user())->name }}
    </div>
</nav>
