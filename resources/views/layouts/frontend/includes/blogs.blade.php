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
            @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-item-wrap">
                        <a href="{{ url('/blog/details/'.$blog?->id.'/'.$blog?->slug) }}" class="blog-item-image-outer">
                            <img src="{{ asset('/blog/'.$blog?->image) }}" alt="Blog">
                        </a>
                        <div class="blog-item-info-outer">
                            <div class="blog-item-info-top">
                                <div class="post-info">
                                    <i class="far fa-user"></i>
                                    Admin
                                </div>
                                <div class="post-info">
                                    <i class="far fa-calendar-alt"></i>
                                    {{ $blog?->created_at->format('d M, Y') }}
                                </div>
                            </div>
                            <a href="{{ url('/blog/details/'.$blog?->id.'/'.$blog?->slug) }}" class="blog-item-info-title">
                                {{ $blog?->title }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
