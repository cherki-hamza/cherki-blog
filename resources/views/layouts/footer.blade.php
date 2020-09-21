
<!-- Footer section -->
<footer class="footer-section">
    <div class="container">
        <div class="footer-left-pic">
            <img src="{{asset('assets/img/footer-left-pic.png')}}" alt="">
        </div>
        <div class="footer-right-pic">
            <img src="{{asset('assets/img/footer-right-pic.png')}}" alt="">
        </div>
        <a href="#" class="footer-logo">
            <img src="{{asset('assets/img/logo/logohamza.png')}}" alt="">
        </a>
        <ul class="main-menu footer-menu">
            <li><a href="{{route('site.index')}}">Home</a></li>
            <li><a href="{{route('site.about')}}">About</a></li>
            <li><a href="{{route('site.blog')}}">blog</a></li>
            <li><a href="{{route('site.blog.two')}}">Codding News</a></li>
            <li><a href="{{route('site.contact')}}">Contact</a></li>
        </ul>
        <div class="footer-social d-flex justify-content-center">
            <a href="https://github.com/cherki-hamza" target="_blank"><i class="fa fa-github"></i></a>
            <a href="https://bitbucket.org/cherki-hamza/"><i class="fa fa-bitbucket"></i></a>
            <a href="https://twitter.com/onlintechnology"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-git"></i></a>
        </div>
        <div class="blog-text text-box text-white tw-text"><a href="{{route('site.index')}}">cherki Hamza &#10084;&#65039;</a> {{date('Y')}} @ All rights reserved</div>
    </div>
</footer>
<!-- Footer section end -->


<!--====== Javascripts & Jquery ======-->
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.sticky-sidebar.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<!-- add custom script -->
@yield('my_scripts')

</body>
</html>
