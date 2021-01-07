<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-ticle</title>
    <link rel="icon" href="{{asset('frontend/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<!--::header part start::-->
<header class="main_menu single_page_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand logo_1" href="/"> <img src="{{asset('frontend/img/favicon.png')}}" alt="logo"> </a>
                    <a class="navbar-brand logo_2" href="/"> <img src="{{asset('frontend/img/favicon.png')}}" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item justify-content-end"
                         id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                            </li>
                            @if(Auth::check())
                                @if(Auth::user()->role==2)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pagekritik') }}">Kritik Saran</a>
                            </li>
                                @endif
                            @endif
                            <li class="d-none d-lg-block">
                                <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                                    @if (Route::has('login'))
                                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                            @auth
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="{{ url('/dashboard') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        {{ Auth::user()->name }}
                                                    </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a>
                                                    @if(Auth::user()->role==2)
                                                        <a class="dropdown-item" href="{{ url('/profile') }}">Profil</a>
                                                    @endif
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                                </li>
                                            @else
                                                <a class="btn_1" href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                                                <a class="btn_1" href="{{ route('register') }}" class="text-sm text-gray-700 underline">Register</a>
                                            @endif
                                        </div>
                                @endif
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->

<!-- Content part start-->
@yield('content')
<!-- Content part end-->

<!-- footer part start-->
@include('layouts.footer')
<!-- footer part end-->

<!-- jquery plugins here-->
<!-- jquery -->
<script src="{{asset('frontend/js/jquery-1.12.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<!-- easing js -->
<script src="{{asset('frontend/js/jquery.magnific-popup.js')}}"></script>
<!-- swiper js -->
<script src="{{asset('frontend/js/swiper.min.js')}}"></script>
<!-- swiper js -->
<script src="{{asset('frontend/js/masonry.pkgd.js')}}"></script>
<!-- particles js -->
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>
<!-- swiper js -->
<script src="{{asset('frontend/js/slick.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
<!-- custom js -->
<script src="{{asset('frontend/js/custom.js')}}"></script>
</body>

</html>
