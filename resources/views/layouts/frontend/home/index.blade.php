@extends('layouts.frontend.master')

@section('title')
    Home | FM Cargo Service
@endsection

@section('content')
    <!-- Home Slider -->
    <section class="home-slider-section">
        <div class="slider-items-wrapper owl-carousel">
            <div class="slider-item">
                <img src="{{ asset('/frontend/') }}/assets/images/slide4.jpg" alt="images not found">
                <div class="slider-content-outer">
                    <div class="container">
                        <div class="slider-content">
                            <h2>Teimagine Digital Experience with</h2>
                            <h1><span style="color: #FC9D01;">Start-ups</span> and solutions</h1>
                            <a href="#" class="contact-us-link">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <img src="{{ asset('/frontend/') }}/assets/images/slide4.jpg" alt="images not found">
                <div class="slider-content-outer">
                    <div class="container">
                        <div class="slider-content">
                            <h2>Peimagine Digital Experience with</h2>
                            <h1><span style="color: #FC9D01;">Intelligent</span> Solutions</h1>
                            <a href="#" class="contact-us-link">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <img src="{{ asset('/frontend/') }}/assets/images/slide4.jpg" alt="images not found">
                <div class="slider-content-outer">
                    <div class="container">
                        <div class="slider-content">
                            <h2>Reimagine Digital Experience with</h2>
                            <h1><span style="color: #FC9D01;">Intelligent</span> solutions</h1>
                            <a href="#" class="contact-us-link">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Home Slider -->

    <!-- Service -->
    <section class="service-section">
        <div class="container">
            <div class="section-title-wrap">
                <div class="testimonial-top-left">
                    <h6 class="top-title">
                        Service
                    </h6>
                    <h1 class="title">
                        Our Valuable service
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-wrap">
                        <img src="{{ asset('/frontend/') }}/assets/images/service1.jpg" class="Service" />
                        <div class="service-item-info">
                            <a href="service-details.html" class="service-item-title">
                                DOOR TO DOOR SERVICE
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-wrap">
                        <img src="{{ asset('/frontend/') }}/assets/images/service2.jpg" class="Service">
                        <div class="service-item-info">
                            <a href="#" class="service-item-title">
                                C & F Service
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-wrap">
                        <img src="{{ asset('/frontend/') }}/assets/images/service3.jpg" class="Service">
                        <div class="service-item-info">
                            <a href="#" class="service-item-title">
                                INTERNATIONAL COURIER
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-wrap">
                        <img src="{{ asset('/frontend/') }}/assets/images/service2.jpg" class="Service">
                        <div class="service-item-info">
                            <a href="#" class="service-item-title">
                                AIR FREIGHT SERVICE
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-wrap">
                        <img src="{{ asset('/frontend/') }}/assets/images/service4.jpg" class="Service">
                        <div class="service-item-info">
                            <a href="#" class="service-item-title">
                                SEA FREIGHT SERVICE
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-wrap">
                        <img src="{{ asset('/frontend/') }}/assets/images/service5.png" class="Service">
                        <div class="service-item-info">
                            <a href="#" class="service-item-title">
                                CUSTOMIZED FCL AND LCL
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service -->

    <!-- Skill -->
    <section class="transport-skill-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="transport-skill-left">
                        <img src="{{ asset('/frontend/') }}/assets/images/services-promo.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="transport-skill-right">
                        <h6 class="top-title">
                            OUR CARGO
                        </h6>
                        <h2 class="title">
                            Transportations Skills
                        </h2>
                        <p class="text">
                            We don’t just manage suppliers, we micro-manage them. We have a consultative, personalized approach to hiring new employees.
                        </p>
                        <div class="transport-skill-progress-wrap">
                            <div class="transport-skill-progress-item">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 70%;">

                                    </div>
                                    <span>70%</span>
                                </div>
                                <p class="text">
                                    Transport
                                </p>
                            </div>
                            <div class="transport-skill-progress-item">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 80%;">

                                    </div>
                                    <span>80%</span>
                                </div>
                                <p class="text">
                                    Logistics
                                </p>
                            </div>
                            <div class="transport-skill-progress-item">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 50%;">

                                    </div>
                                    <span>50%</span>
                                </div>
                                <p class="text">
                                    Support
                                </p>
                            </div>
                            <div class="transport-skill-progress-item">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 90%;">

                                    </div>
                                    <span>90%</span>
                                </div>
                                <p class="text">
                                    Chain Supply
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Skill -->

    <!-- Testimonial -->
    <section class="testimonial-section">
        <div class="gradien-box"></div>
        <div class="gradien-box1"></div>
        <div class="container">
            <div class="section-title-wrap">
                <div class="testimonial-top-left">
                    <h6 class="top-title">
                        Testimonials
                    </h6>
                    <h1 class="title">
                        Our Customer Reviews
                    </h1>
                </div>
            </div>
            <div class="testimonial-items-wrap owl-carousel">
                <div class="testimonial-item-outer">
                    <div class="testimonial-author-outer">
                        <div class="author-image">
                            <img src="{{ asset('/frontend/') }}/assets/images/testimonial1.png" alt="Testimonial">
                        </div>
                        <div class="author-info">
                            <h6 class="author-name">
                                Stavis Jobs
                            </h6>
                            <p class="description">
                                Self Employer
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-info">
                        <h6 class="testimonial-title">
                            Great Service!
                        </h6>
                        <p class="text">
                            Great service! Riad was very responsive and helpful. We have now worked with him twice and have had a great experience.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item-outer">
                    <div class="testimonial-author-outer">
                        <div class="author-image">
                            <img src="{{ asset('/frontend/') }}/assets/images/testimonial1.png" alt="Testimonial">
                        </div>
                        <div class="author-info">
                            <h6 class="author-name">
                                Stavis Jobs
                            </h6>
                            <p class="description">
                                Self Employer
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-info">
                        <h6 class="testimonial-title">
                            Great Service!
                        </h6>
                        <p class="text">
                            Great service! Riad was very responsive and helpful. We have now worked with him twice and have had a great experience.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item-outer">
                    <div class="testimonial-author-outer">
                        <div class="author-image">
                            <img src="{{ asset('/frontend/') }}/assets/images/testimonial2.png" alt="Testimonial">
                        </div>
                        <div class="author-info">
                            <h6 class="author-name">
                                Stavis Jobs
                            </h6>
                            <p class="description">
                                Self Employer
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-info">
                        <h6 class="testimonial-title">
                            Great Service!
                        </h6>
                        <p class="text">
                            Great service! Riad was very responsive and helpful. We have now worked with him twice and have had a great experience.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item-outer">
                    <div class="testimonial-author-outer">
                        <div class="author-image">
                            <img src="{{ asset('/frontend/') }}/assets/images/testimonial3.png" alt="Testimonial">
                        </div>
                        <div class="author-info">
                            <h6 class="author-name">
                                Stavis Jobs
                            </h6>
                            <p class="description">
                                Self Employer
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-info">
                        <h6 class="testimonial-title">
                            Great Service!
                        </h6>
                        <p class="text">
                            Great service! Riad was very responsive and helpful. We have now worked with him twice and have had a great experience.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Testimonial -->

    <!-- Blog -->
    <section class="blog-section">
        <div class="container">
            <div class="section-title-wrap mx-width-secure-data">
                <h6 class="top-title">
                    Recent Blogs
                </h6>
                <h1 class="title">
                    Our Recent News & Articles
                </h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-item-wrap">
                        <a href="blog-details.html" class="blog-item-image-outer">
                            <img src="{{ asset('/frontend/') }}/assets/images/blog1.png" alt="Blog">
                            <span class="blog-item-category-title">
                                Cargo
                            </span>
                        </a>
                        <div class="blog-item-info-outer">
                            <div class="blog-item-info-top">
                                <div class="post-info">
                                    <i class="far fa-user"></i>
                                    Admin Panel
                                </div>
                                <div class="post-info">
                                    <i class="far fa-calendar-alt"></i>
                                    11 July, 2023
                                </div>
                            </div>
                            <a href="blog-details.html" class="blog-item-info-title">
                                8 Best Ways To Increase Travel Cargo.
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-item-wrap">
                        <a href="#" class="blog-item-image-outer">
                            <img src="{{ asset('/frontend/') }}/assets/images/blog2.png" alt="Blog">
                            <span class="blog-item-category-title">
                                Cargo
                            </span>
                        </a>
                        <div class="blog-item-info-outer">
                            <div class="blog-item-info-top">
                                <div class="post-info">
                                    <i class="far fa-user"></i>
                                    Admin Panel
                                </div>
                                <div class="post-info">
                                    <i class="far fa-calendar-alt"></i>
                                    11 July, 2023
                                </div>
                            </div>
                            <a href="#" class="blog-item-info-title">
                                How To Generate Leads For Software Company.
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-item-wrap">
                        <a href="#" class="blog-item-image-outer">
                            <img src="{{ asset('/frontend/') }}/assets/images/blog3.png" alt="Blog">
                            <span class="blog-item-category-title">
                                Cargo
                            </span>
                        </a>
                        <div class="blog-item-info-outer">
                            <div class="blog-item-info-top">
                                <div class="post-info">
                                    <i class="far fa-user"></i>
                                    Admin Panel
                                </div>
                                <div class="post-info">
                                    <i class="far fa-calendar-alt"></i>
                                    11 July, 2023
                                </div>
                            </div>
                            <a href="#" class="blog-item-info-title">
                                How To Generate Leads For Small Business? Which Is Better?
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-item-wrap">
                        <a href="#" class="blog-item-image-outer">
                            <img src="{{ asset('/frontend/') }}/assets/images/blog1.png" alt="Blog">
                            <span class="blog-item-category-title">
                                Cargo
                            </span>
                        </a>
                        <div class="blog-item-info-outer">
                            <div class="blog-item-info-top">
                                <div class="post-info">
                                    <i class="far fa-user"></i>
                                    Admin Panel
                                </div>
                                <div class="post-info">
                                    <i class="far fa-calendar-alt"></i>
                                    11 July, 2023
                                </div>
                            </div>
                            <a href="#" class="blog-item-info-title">
                                8 Best Ways To Increase Travel Cargo.
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
