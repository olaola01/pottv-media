<!DOCTYPE html>

<html>
<head>
    <!-- Title of The Page -->
{{--    <title> The Pottv Media </title>--}}

    <!-- Meta Informations -->
    <meta charset="utf-8">
{{--    <meta name="description" content="We are a group of creative experts creating magic that sparks attention and drives engagement for our clients, using WhatsApp Marketing.">--}}
{{--    <meta name="keywords" content="Pottv media, POTTV Media">--}}
{{--    <meta name="author" content="POTTV Media">--}}
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('head')

    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/image/logo/favicon.ico')}}" type="image/x-icon">

    <!-- font-awsome css  -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/all.min.css')}}">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Carousel css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <!-- Magnific-popup css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- jquery.Fancybox.min css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.fancybox.min.css')}}">
    <!-- style css  -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- responsive css  -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    <x-rich-text-trix-styles />

</head>
<!-- Spinner loader Start -->
<div class="loader">
    <div id="loading-bar-spinner" class="spinner">
        <div class="spinner-icon"></div>
    </div>
</div>
<!-- Spinner loader End -->
<body>
<!-- Header STARTS Here -->
<header class="header-style-4">
    <!-- Navbar STARTS Here -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{route('home-page')}}"><img class="lazy" data-src="{{asset('assets/image/logo/logo.jpg')}}" src="{{asset('assets/image/logo/logo.jpg')}}" alt="logo"></a>
            <div class="collapse navbar-collapse justify-content-end main-navigation" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item {{ Route::currentRouteNamed('home-page') ? 'active' : '' }}">
                        <a href="{{route('home-page')}}">Home</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteNamed('about') ? 'active' : '' }}">
                        <a href="{{route('about')}}">About Us</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteNamed('services') ? 'active' : '' }}">
                        <a href="{{ route('services') }}">Our Services</a>
                    </li>
                    @if(\App\Models\Post::all()->count() > 0)
                    <li class="nav-item {{ Route::currentRouteNamed('blog.index') || Route::currentRouteNamed('blog.show') ? 'active' : '' }}">
                        <a href="{{ route('blog.index') }}">Blog</a>
                    </li>
                    @endif
                    <li class="nav-item {{ Route::currentRouteNamed('contact') ? 'active' : '' }}">
                        <a href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
{{--            <div class="header_end">--}}
{{--                <div class="all_btn">--}}
{{--                    <a class="btn" href="javascript:void(0)">Join Now</a>--}}
{{--                </div>--}}
{{--            </div>--}}
            <button class="navbar-toggler toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span></span>
            </button>
        </div>
    </nav>
    <!-- Navbar ENDS Here -->
</header>
<!-- Header ENDS Here -->
@yield('content')

<!-- Footer Section Start Here -->
<footer>
    <div class="footer_before">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <a href="{{ route('home-page') }}" class="footer_title footer-logo">POTTV MEDIA</a>
                    <ul class="footer_url">
                        <li><i class="fad fa-map-marker-alt"></i><a href="javascript:void(0)">3, Ayoola Drive, New
                                Bodija, Ibadan.</a></li>
                        <li><i class="fal fa-envelope-open-text"></i><a href="mailto:thepottvmedia@gmail.com">thepottvmedia@gmail.com </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer_title">Our Services</div>
                    <ul class="footer_url">
                        <li><a href="{{ route('services') }}">WhatsApp Promotions</a></li>
                        <li><a href="{{ route('services') }}">Media Sessions</a></li>
                        <li><a href="{{ route('services') }}">Co - Workspace</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer_title">Quick Links</div>
                    <ul class="footer_url">
                        <li><a href="{{ route('home-page') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('services') }}">Our Services</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="footer_title">Social</div>
                    <ul class="footer_social_icon">
                        <li class="instagram"><a href="https://instagram.com/thepottvmediang" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li class="twitter"><a href="https://twitter.com/thepottvmedia" target="_blank"><i class="fab fab fa-twitter"></i></a></li>
                        <li class="whatsapp"><a href="https://wa.me/2348182542750?text=Hello!%20I%20want%20to%20view%20PotTV%20Status%20Updates%20from%20Website.%20Save%20my%20number.%20" target="_blank"><i class="fab fab fa-whatsapp"></i></a></li>
                        <li class="facebook"><a href="https://facebook.com/thepottv" target="_blank"><i class="fab fab fa-facebook-f"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_after text-center">
        <div class="container">
            <p>Copyright @ {{\Carbon\Carbon::now()->year}} POTTV MEDIA. All Rights Reserved</p>
        </div>
    </div>
</footer>
<!-- Footer Section End Here -->

<a onclick="topFunction()" id="back-to-top" title="Go to top" style="display: block;"><i
        class="far fa-arrow-up"></i></a>

<!-- bootstrap js -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- lazyload js -->
<script src="{{asset('assets/js/jquery.lazyload.min.js')}}"></script>
<!-- Carousel js -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- Countdown js -->
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<!-- jquery.magnific-popup.min js -->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- easypiechart js -->
<script src="{{asset('assets/js/easypiechart.js')}}"></script>
<!-- jquery.fancybox.min js -->
<script src="{{asset('assets/js/jquery.fancybox.min.js')}}"></script>
<!-- custom js -->
<script src="{{asset('assets/js/custom.js')}}"></script>
@yield('script')
</body>


</html>
