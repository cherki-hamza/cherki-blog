@extends('master.app')

@section('title' , 'Blog-two')

@section('content')

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    @include('layouts.menu')
    <!-- Header section end -->

    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="{{asset('assets/img/page-top-bg/2.jpg')}}">
        <div class="page-info">
            <h2>Reviews</h2>
            <div class="site-breadcrumb">
                <a href="{{route('site.index')}}">Home</a> /
                <a href="{{route('site.blog.two')}}"><span>Blog_two</span></a>
            </div>
        </div>
    </section>
    <!-- Page top end-->


    <!-- Review section -->
    <section class="review-section">
        <div class="container">
            <ul class="game-filter">
                <li><a href="">A</a></li>
                <li><a href="">B</a></li>
                <li><a href="">C</a></li>
                <li><a href="">D</a></li>
                <li><a href="">E</a></li>
                <li><a href="">F</a></li>
                <li><a href="">G</a></li>
                <li><a href="">H</a></li>
                <li><a href="">I</a></li>
                <li><a href="">J</a></li>
                <li><a href="">K</a></li>
                <li><a href="">L</a></li>
                <li><a href="">M</a></li>
                <li><a href="">N</a></li>
                <li><a href="">O</a></li>
                <li><a href="">P</a></li>
                <li><a href="">Q</a></li>
                <li><a href="">R</a></li>
                <li><a href="">S</a></li>
                <li><a href="">T</a></li>
                <li><a href="">U</a></li>
                <li><a href="">V</a></li>
                <li><a href="">W</a></li>
                <li><a href="">X</a></li>
                <li><a href="">Y</a></li>
                <li><a href="">Z</a></li>
            </ul>
           @foreach($posts as $post)
            <div class="review-item">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="review-pic">
                            <img src="{{asset($post->featured_image)}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="review-content text-box text-white">
                            <div class="rating">
                                <h5><i>Rating</i><span>4.5</span> / 5</h5>
                            </div>
                            <div class="top-meta">{{$post->publish_date->diffForHumans()}}  /  by <a href="">{{$post->author->name}}</a></div>
                            <h3>{{$post->title}}</h3>
                            <p>{{$post->excerpt}}</p>
                            <a href="{{$post->slug}}" class="read-more">Read More  <img src="{{asset('assets/img/icons/double-arrow.png')}}" alt="#"/></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="pagination my-5">
                {{$posts->links()}}
            </div>

        </div>
    </section>
    <!-- Review section end-->


    <!-- Newsletter section -->
    @include('inc.newsletter')
    <!-- Newsletter section end -->

@stop



