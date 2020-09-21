@extends('master.app')

@section('title' , 'About')

@section('content')

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    @include('layouts.menu')
    <!-- Header section end -->

    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="{{asset('assets/img/page-top-bg/4.jpg')}}">
        <div class="page-info">
            <h2>About me</h2>
            <div class="site-breadcrumb">
                <a href="{{route('site.index')}}">Home</a>  /
                <a href="{{route('site.about')}}"><span>About</span></a>
            </div>
        </div>
    </section>
    <!-- Page top end-->
    <div class="blog-page">
        <div class="container">
            <div class="widget-item">
                <h4 class="widget-title">{{$about->title}}</h4>
                <div class="trending-widget">

                    <div class="tw-item">
                        <div class="tw-thumb">
                          {!! $about->body !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
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
@stop



