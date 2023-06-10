@extends('layouts.frontend.master')

@section('title')
    FM Cargo Service | Blog Details
@endsection

@section('content')
    <section class="banner-section">
        <div class="container">
            <div class="banner-content-wrapper">
                <h1 class="banner-title">Blog Details</h1>
                <ul class="banner-item">
                    <li>
                        <a href="{{ url('/') }}">
                            <i class="fas fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li class="active">
                        <a href="javascript:void(0)">
                            {{ $blog?->title }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- /Banner -->
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="blog-items-wrapper">
                        <div class="blog-item-outer">
                            <div class="blog-item-image">
                                <img src="{{ asset('/blog/'.$blog->image) }}" alt="Blog Image" />
                            </div>
                            <ul class="blog-meta-list">
                                <li class="blog-meta-list-item">
                                    Admin
                                </li>
                                <li>
                                    {{ $blog->created_at->format('Y m D') }}
                                </li>
                            </ul>
                            <h2 class="blog-item-title">
                                {{ $blog->title }}
                            </h2>
                            <p class="blog-item-text">
                                {!! $blog->description !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="recent-blogs-wrapper">
                        <h2 class="category-title">
                            Recent Post
                        </h2>
                        @foreach($relatedPosts as $relatedPost)
                        <div class="recent-blog-outer">
                            <a href="{{ url('/blog/details/'.$relatedPost?->id.'/'.$blog?->slug) }}" class="recent-blog-image">
                                <img src="{{ asset('/blog/'.$relatedPost->image) }}" alt="Blog Image" />
                            </a>
                            <div class="recent-blog-content">
                                <a href="{{ url('/blog/details/'.$relatedPost?->id.'/'.$blog?->slug) }}" target="_blank" class="recent-blog-title">
                                    {{ substr($relatedPost->title,0,50) }}
                                </a>
                                <p class="recent-blog-post-date">
                                    {{ $relatedPost->created_at->format('Y M-d') }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
@endsection
