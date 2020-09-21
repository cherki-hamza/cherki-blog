@extends('master.app')

@section('title' , 'Home Site')

@section('content')

<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
@include('layouts.menu')
<!-- Header section end -->


<!-- Hero section slider start -->
<section class="hero-section overflow-hidden">
    <div class="hero-slider owl-carousel">
        <div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="{{asset('assets/img/slider-bg-1.jpg')}}">
            <div class="container">
                <h2>Cherki Hamza!</h2>
                <p>Hello <span class="text-success">  (السلام عليكم) </span> community of programmers i do programming not because they expect to get paid or get adulation by the public,
                    but because it is fun to program..</p>
                <a href="#" class="site-btn">Read More  <img src="{{asset('assets/img/icons/double-arrow.png')}}" alt="#"/></a>
            </div>
        </div>
        <div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="{{asset('assets/img/slider-bg-2.jpg')}}">
            <div class="container">
                <h2>Developer web full stack!</h2>
                <p>People enjoy the interaction on the Internet, and the feeling of belonging to a group that does something
                    interesting: that's how some software projects are born..</p>
                <a href="#" class="site-btn">Read More  <img src="{{asset('assets/img/icons/double-arrow.png')}}" alt="#"/></a>
            </div>
        </div>
    </div>
</section>
<!-- /Hero section slider end-->


<!-- Intro section -->
<section class="intro-section">
    <div class="container">
        <div class="row">
           @foreach($tree_posts as $post)
            <div class="col-md-4">
                <div class="intro-text-box text-box text-white">
                    <div class="top-meta">{{$post->publish_date->diffForHumans()}}  /  by <a href="">{{$post->author->name}}</a></div>
                    <h3>{{$post->title}}</h3>
                    <p>{{$post->excerpt}}</p>
                    <a href="#" class="read-more">Read More  <img src="{{asset('assets/img/icons/double-arrow.png')}}" alt="#"/></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- /Intro section end -->


<!-- Blog section -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-7">
                <div class="section-title text-white">
                    <h2>Programming Languages and framework</h2>
                </div>
                <ul class="blog-filter">
                    @foreach($five_categories as $category)
                      <li><a href="#">{{$category->name}}</a></li>
                    @endforeach
                </ul>
                <!-- Blog item -->
                  @foreach($posts as $post)
                   <div class="blog-item">
                    <div class="blog-thumb">
                        <img src="{{asset($post->featured_image)}}" alt="">
                    </div>
                    <div class="blog-text text-box text-white">
                        <div class="top-meta">{{$post->publish_date->diffForHumans()}}  /  by <a href="">{{$post->author->name}}</a></div>
                        <h3>{{$post->title}}</h3>
                        <p>{{$post->excerpt}}</p>
                        <a href="{{$post->slug}}" class="read-more">Read More  <img src="{{asset('assets/img/icons/double-arrow.png')}}" alt="#"/></a>
                    </div>
                </div>
                  @endforeach
                <!-- / Blog item -->

            </div>

            <!-- start sidebar -->
            <div class="col-xl-3 col-lg-4 col-md-5 sidebar">

                <div id="stickySidebar">
                    <div class="widget-item">
                        <h4 class="widget-title">Trending</h4>
                        <div class="trending-widget">
                            @foreach($trending_posts as $post)
                              <div class="tw-item">
                                <div class="tw-thumb">
                                    <a href="{{$post->slug}}">
                                        <img src="{{asset($post->featured_image)}}" alt="{{$post->title}}">
                                    </a>
                                </div>
                                <div class="tw-text">
                                    <div class="tw-meta">{{$post->publish_date->diffForHumans()}}  /  by <a href="">{{$post->author->name}}</a></div>
                                    <h5>{{$post->title}}</h5>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="widget-item">
                        <div class="categories-widget">
                            <h4 class="widget-title">categories</h4>
                            <ul>
                                @foreach($categories as $category)
                                  <li><a href="{{$category->slug}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="widget-item">
                        <a href="#" class="add">
                            <img src="{{asset('assets/img/add.jpg')}}" alt="">
                        </a>
                    </div>
                </div>

            </div>
            <!-- / end sidebar -->
        </div>
    </div>
</section>
<!-- Blog section end -->


<!-- Intro section -->
<section class="intro-video-section set-bg d-flex align-items-end " data-setbg="{{asset('assets/img/promo-bg.jpg')}}">
    <a href="https://www.youtube.com/watch?v=Ipk3Em_XzDw" class="video-play-btn video-popup">
        <img src="{{asset('assets/img/icons/solid-right-arrow.png')}}" alt=">">
    </a>
    <div class="container">
        <div class="video-text">
            <h2>Cherki Hamza Intro</h2>
            <p>this is cherki hamza developer web full stack.</p>
        </div>
    </div>
</section>
<!-- Intro section end -->


<!-- Featured section -->
<section class="featured-section">
    <div class="featured-bg set-bg" data-setbg="{{asset($latest_post->featured_image)}}"></div>
    <div class="featured-box">
        <div class="text-box">
            <div class="tw-meta">{{$latest_post->publish_date->diffForHumans()}}  /  by <a href="">{{$latest_post->author->name}}</a></div>
            <h3>{{$latest_post->title}}</h3>
            {!! $latest_post->body !!}
            <a href="#" class="read-more">Read More  <img src="{{asset('assets/img/icons/double-arrow.png')}}" alt="#"/></a>
        </div>
    </div>
</section>
<!-- Featured section end-->



<!-- Newsletter section -->
@include('inc.newsletter')
<!-- Newsletter section end -->

@stop



