@extends('layouts.frontend.master')

@section('title')
    Home | FM Cargo Service
@endsection

@section('content')
    <!-- Home Slider -->
    <section class="home-slider-section">
        <div class="slider-items-wrapper owl-carousel">
            @foreach ($frontend_contents['sliders'] as $slider)
                <div class="slider-item">
                    <img src="{{ asset('/slider/'.$slider->image) }}" alt="images not found">
                    <div class="slider-content-outer">
                        <div class="container">
                            <div class="slider-content">
                                <h2>{{ ucfirst($slider->{ 'title_'.app()->getLocale() }) }}</h2>
                                <a href="{{ url('/contact') }}" target="_blank" class="contact-us-link">
                                    @if (app()->getLocale()=='bn')
                                    যোগাযোগ করুন
                                    @else
                                    Contact Us
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- /Home Slider -->

    <!-- Service -->
    <section class="service-section">
        <div class="container">
            <div class="section-title-wrap">
                <div class="testimonial-top-left">
                    <h6 class="top-title">
                        @if (app()->getLocale()=='bn')
                        সেবা
                        @else
                        Service
                        @endif
                    </h6>
                    <h1 class="title">
                        @if (app()->getLocale()=='bn')
                        আমাদের মূল্যবান সেবা
                        @else
                        Our Valuable service
                        @endif
                    </h1>
                </div>
            </div>
            <div class="row">
                @foreach ($frontend_contents['services'] as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-wrap">
                        <img src="{{ asset('service/'.$service->image) }}" alt="service" class="Service" />
                        <div class="service-item-info">
                            <a href="#" class="service-item-title">
                                {{ $service->{ 'title_'.app()->getLocale() } }}
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                {{--  <div class="col-lg-4 col-md-6">
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
                </div>  --}}
            </div>
        </div>
    </section>
    <!-- /Service -->

     <!-- Service -->
     <section class="youtube-section">
        <div class="container">
            <div class="section-title-wrap">
                <div class="testimonial-top-left">
                    <h6 class="top-title mb-4">
                        @if (app()->getLocale()=='bn')
                        ইউটিউব ভিডিও
                        @else
                        Youtube Video
                        @endif
                    </h6>
                </div>
            </div>
            <div class="row">
                @foreach ( $frontend_contents['youtubes'] as $youtube )
                <div class="col-lg-6 col-md-6">
                    <div class="youtube-item-wrap">
                        <iframe width="100%" height="315" src="{{ $youtube->youtube }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                    </div>
                </div>
                @endforeach
            </div>
            <div class="youtube-btn-outer">
                <a href="#" target="_blank" class="youtube-btn-inner">
                    @if (app()->getLocale()=='bn')
                    আরো দেখুন
                    @else
                    See More
                    @endif
                </a>
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
                            @if (app()->getLocale()=='bn')
                            আমাদের কার্গো
                            @else
                            OUR CARGO
                            @endif
                        </h6>
                        <h2 class="title">
                            @if (app()->getLocale()=='bn')
                            পরিবহন দক্ষতা
                            @else
                            Transportations Skills
                            @endif
                        </h2>
                        <p class="text">
                            @if (app()->getLocale()=='bn')
                            আমরা কেবল সরবরাহকারীদের পরিচালনা করি না, আমরা তাদের মাইক্রো-ম্যানেজ করি। নতুন কর্মচারী নিয়োগের জন্য আমাদের একটি পরামর্শমূলক, ব্যক্তিগতকৃত পদ্ধতি রয়েছে।
                            @else
                            We don’t just manage suppliers, we micro-manage them. We have a consultative, personalized approach to hiring new employees.
                            @endif
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
                        @if (app()->getLocale()=='bn')
                        প্রশংসাপত্র
                        @else
                        Testimonials
                        @endif
                    </h6>
                    <h1 class="title">
                        @if (app()->getLocale()=='bn')
                        আমাদের গ্রাহক পর্যালোচনা
                        @else
                        Our Customer Reviews
                        @endif
                    </h1>
                </div>
            </div>
            <div class="testimonial-items-wrap owl-carousel">
                @foreach ( $frontend_contents['testimonials'] as $testimonial )
                <div class="testimonial-item-outer">
                    <div class="testimonial-author-outer">
                        <div class="author-image">
                            <img src="{{ asset('testimonial/'.$testimonial->reviewer_image) }}" alt="Testimonial">
                        </div>
                        <div class="author-info">
                            <h6 class="author-name">
                                {{ $testimonial->{'reviewer_name_'.app()->getLocale() } }}
                            </h6>
                            <p class="description">
                                {{ $testimonial->{'reviewer_designation_'.app()->getLocale()} }}
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-info">
                        <h6 class="testimonial-title">
                            {{ $testimonial->{'short_comment_'.app()->getLocale()} }}
                        </h6>
                        <p class="text">
                            {{ $testimonial->{'long_comment_'.app()->getLocale()} }}
                        </p>
                    </div>
                </div>
                @endforeach
                {{--  <div class="testimonial-item-outer">
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
                </div>  --}}
            </div>
        </div>
    </section>
    <!-- /Testimonial -->

    <!-- Blog -->
    @include('layouts.frontend.includes.blogs')
@endsection
