@extends('master.app')

@section('title' , ''.$post->title)

@section('content')

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    @include('layouts.menu')
    <!-- Header section end -->

    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="{{asset('assets/img/page-top-bg/1.jpg')}}">
        <div class="page-info">
            <h2>{{$post->title}}</h2>
            <div class="site-breadcrumb">
                <a href="{{route('site.index')}}">Home</a> /
                <a href=""><span>{{$post->title}}</span></a>
            </div>
        </div>
    </section>
    <!-- Page top end-->


    <!-- Games section -->
    <section class="games-single-page">
        <div class="container">
            <div class="game-single-preview">
                <img src="{{asset($post->featured_image)}}" alt="">
            </div>
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-7 game-single-content">
                    <div class="gs-meta">{{$post->publish_date->diffForHumans()}}  /  by <a href="">{{$post->author->name}}</a></div>
                    <h2 class="gs-title">{{$post->title}}</h2>
                    {!! $post->body !!}
                    <div class="">
                        <p>Share:</p>

                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_inline_share_toolbox"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5 sidebar game-page-sideber">
                    <div id="stickySidebar">
                        <div class="widget-item">
                            <div class="rating-widget">
                                <h4 class="widget-title">Ratings</h4>
                                <ul>
                                    <li>Price<span>3.5/5</span></li>
                                    <li>Graphics<span>4.5/5</span></li>
                                    <li>Levels<span>3.5/5</span></li>
                                    <li>Levels<span>4.5/5</span></li>
                                    <li>Dificulty<span>4.5/5</span></li>
                                </ul>
                                <div class="rating">
                                    <h5><i>Rating</i><span>4.5</span> / 5</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Games end-->

    <section class="game-author-section">
        <div class="container">
            <div class="game-author-pic set-bg" data-setbg="{{asset($post->author->avatar)}}"></div>
            <div class="game-author-info">
                <h4 class="text-danger opacity-75">Written by: {{$post->author->name}}</h4>
                 {!! $post->author->bio !!}
            </div>
        </div>
    </section>


    <!-- Newsletter section -->
    @include('inc.newsletter')
    <!-- Newsletter section end -->

@stop

@section('my_scripts')
   <script>
        $(document).ready(function (){
            $('p').addClass('blog-text text-box text-white tw-text');
        });
    </script>
   <!-- Go to www.addthis.com/dashboard to customize your tools -->
   <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f68cf51703b0b66"></script>

@stop



