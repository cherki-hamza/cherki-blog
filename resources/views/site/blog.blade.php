@extends('master.app')

@section('title' , 'Blog')

@section('content')

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    @include('layouts.menu')
    <!-- Header section end -->

    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="{{asset('assets/img/page-top-bg/3.jpg')}}">
        <div class="page-info">
            <h2>Blog</h2>
            <div class="site-breadcrumb">
                <a href="{{route('site.index')}}">Home</a> /
                <a href="{{route('site.blog')}}"><span>Blog</span></a>
            </div>
        </div>
    </section>
    <!-- Page top end-->


    <!-- Blog page -->
    <section class="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <ul class="blog-filter">
                        @foreach($categories as $category)
                            <li><a href="{{$category->slug}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>

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

                    <div class="pagination my-5">
                       {{$posts->links()}}
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5 sidebar">
                    <div id="stickySidebar">
                        <div class="widget-item">
                            <form class="search-widget">
                                <input type="text">
                                <button>search</button>
                            </form>
                        </div>
                        <div class="widget-item">
                            <h4 class="widget-title">Trending</h4>
                            <div class="trending-widget">
                                @foreach($trending_posts as $post)
                                    <div class="tw-item">
                                        <div class="tw-thumb">
                                            <img src="{{asset($post->featured_image)}}" alt="{{$post->title}}">
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

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog page end-->


    <!-- Newsletter section -->
    @include('inc.newsletter')
    <!-- Newsletter section end -->

@stop



