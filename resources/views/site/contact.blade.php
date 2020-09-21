@extends('master.app')

@section('title' , 'Contact')

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
            <h2>Contact</h2>
            <div class="site-breadcrumb">
                <a href="{{route('site.index')}}">Home</a> /
                <a href="{{route('site.contact')}}"><span>Contact</span></a>
            </div>
        </div>
    </section>
    <!-- Page top end-->


    <!-- Contact page -->
    <section class="contact-page">
        <div class="container">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d103599.78959013023!2d-5.904509533579809!3d35.763253948399935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b875cf04c132d%3A0x76bfc571bfb4e17a!2sTangier!5e0!3m2!1sen!2sma!4v1600706842846!5m2!1sen!2sma" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="row">
                <div class="col-lg-7 order-2 order-lg-1">
                    <form class="contact-form">
                        <input type="text" placeholder="Your name">
                        <input type="text" placeholder="Your e-mail">
                        <input type="text" placeholder="Subject">
                        <textarea placeholder="Message"></textarea>
                        <button class="site-btn">Send message<img src="{{asset('assets/img/icons/double-arrow.png')}}" alt="#"/></button>
                    </form>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 contact-text text-white">
                    <h3>Cherki Hamza! Say hello</h3>
                    <p>I'm a developer web full stack</p>
                    <div class="cont-info">
                        <div class="ci-icon"><img src="{{asset('assets/img/icons/location.png')}}" alt=""></div>
                        <div class="ci-text">Main Str, Tanger & Casablanca, Morocco .</div>
                    </div>
                    <div class="cont-info">
                        <div class="ci-icon"><img src="{{asset('assets/img/icons/phone.png')}}" alt=""></div>
                        <div class="ci-text">+212 06-37-80-69-39</div>
                    </div>
                    <div class="cont-info">
                        <div class="ci-icon"><img src="{{asset('assets/img/icons/mail.png')}}" alt=""></div>
                        <div class="ci-text">cherki0hamza@gmail.com</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact page end-->


    <!-- Newsletter section -->
    @include('inc.newsletter')
    <!-- Newsletter section end -->


@stop



