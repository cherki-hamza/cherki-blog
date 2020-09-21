
<header class="header-section">
    <div class="header-warp">
        <div class="header-social d-flex justify-content-end">
            <p>Follow us:</p>
            <a href="https://github.com/cherki-hamza" target="_blank"><i class="fa fa-github"></i></a>
            <a href="https://bitbucket.org/cherki-hamza/"><i class="fa fa-bitbucket"></i></a>
            <a href="https://twitter.com/onlintechnology"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-git"></i></a>
        </div>
        <div class="header-bar-warp  d-flex">
            <!-- site logo -->
            <a href="{{route('site.index')}}" class="site-logo">
                <img  src="{{asset('assets/img/logo/logohamza.png')}}" width="150px" height="60px" alt="">
{{--                <img src="{{asset('assets/img/logo.png')}}" alt="">--}}
            </a>
            <nav class="top-nav-area w-100">
                <div class="user-panel">
                    <a class="text-danger" href="{{url('/wink/posts')}}">Dashboard</a>

                    @if($author = session()->get('author'))
                        <img class="mx-4" style="border-radius: 100%; width: 40px;height: 40px;" src="{{asset($author->avatar)}}" alt="">
                    <a href="{{route('site.about')}}">
                        {{$author['name']}}
                    </a>
                    @endif

                </div>
                <!-- Menu -->
                <ul class="main-menu primary-menu">
                    <li><a href="{{route('site.index')}}">Home</a></li>
                    <li><a href="{{route('site.about')}}">About</a></li>
                    <li><a href="{{route('site.blog')}}">blog</a></li>
                    <li><a href="{{route('site.blog.two')}}">Codding News</a></li>
                    <li><a href="{{route('site.contact')}}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
