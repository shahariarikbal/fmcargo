<section class="blog-section">
    <div class="container">
        <div class="section-title-wrap mx-width-secure-data">
            <h6 class="top-title">
                @if (app()->getLocale()=='bn')
                সাম্প্রতিক ব্লগ
                @else
                Recent Blogs
                @endif
            </h6>
            <h1 class="title">
                @if (app()->getLocale()=='bn')
                আমাদের সাম্প্রতিক খবর এবং নিবন্ধ
                @else
                Our Recent News & Articles
                @endif
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
                                {{ $blog?->{ 'title_'.app()->getLocale() } }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
