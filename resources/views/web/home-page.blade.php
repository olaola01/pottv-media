@extends('layouts.app')
@section('head')
    @include('meta::manager', [
    'title'         => 'The Pottv Media',
    'description' => 'We are a group of creative experts creating magic that sparks attention and drives engagement for our clients, using WhatsApp Marketing.'
])
@endsection
@section('content')
<!-- content Start Here -->
<div class="site-content">
    <!-- Home 4 Banner Section STARTS Here -->
    <section class="home_4">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-lg-1">
                    <div class="home_4_img">
                        <img class="lazy" data-src="{{asset('assets/image/bg/bannerimg.png')}}"
                             src="{{asset('assets/image/bg/bannerimg.png')}}" alt="header-home4">
                    </div>
                </div>
                <div class="col-md-6 order-1 order-lg-2">
                    <div class="home4_text">
                        <h6>Who we are?</h6>
                        <h1>We are the biggest <br> WhatsApp Community</h1>
                        <a href="https://wa.me/2348182542750?text=Hello!%20I%20want%20to%20view%20PotTV%20Status%20Updates%20from%20Website.%20Save%20my%20number.%20" target="_blank" class="btn">Join Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home 4 Banner Section End Here -->
{{--    @include('partials.brand-logo')--}}
    <!-- Business Grow Section STARTS Here -->
    <section class="pt-0 mt-5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="businessgrow_img">
                        <img class="lazy" data-src="{{asset('assets/image/bg/businessgrow_img.png')}}"
                             src="{{asset('assets/image/bg/businessgrow_img.png')}}" alt="businessgrow_img">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="businessgrow_text">
                        <div class="heading text-lg-left">
                            <h2>Grow Your Business with Our WhatsApp Community</h2>
                            <img class="lazy" data-src="{{asset('assets/image/icons/headin_border.png')}}"
                                 src="{{asset('assets/image/icons/headin_border.png')}}" alt="headin_border">
                        </div>
                        <span class="text">For over 7 years, POTTV helped brands and businesses hit their branding and financial goals.</span>
                        <p>Over the years, we have worked with existing and brand-new startups. We help businesses
                            like yours grow more profit by building bigger awareness, driving traffic and connecting
                            with paying customers. Talk to us</p>
                        <a class="btn" href="{{ route('about') }}">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Business Grow Section End Here -->
    <!-- Our Services Section STARTS Here -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Our Services</h2>
                        <img class="lazy" data-src="{{asset('assets/image/icons/headin_border.png')}}"
                             src="{{asset('assets/image/icons/headin_border.png')}}" alt="headin_border">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service_bg white_bg">
                        <div class="service_img">
                            <img class="lazy" data-src="{{asset('assets/image/services/service_img1.png')}}"
                                 src="{{asset('assets/image/services/service_img1.png')}}" alt="service_img">
                        </div>
                        <div class="service_text">
                            <h5>WhatsApp Promotions</h5>
                            <p>We help businesses and brands like yours generate more profits.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service_bg white_bg">
                        <div class="service_img">
                            <img class="lazy" data-src="{{asset('assets/image/services/service_img42.png')}}"
                                 src="{{asset('assets/image/services/service_img42.png')}}" alt="service_img">
                        </div>
                        <div class="service_text">
                            <h5>Media Sessions</h5>
                            <p>For all your media shoots. We've got you covered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service_bg white_bg">
                        <div class="service_img">
                            <img class="lazy" data-src="{{asset('assets/image/services/service_img4.png')}}"
                                 src="{{asset('assets/image/services/service_img4.png')}}" alt="service_img">
                        </div>
                        <div class="service_text">
                            <h5>Co - Workspace</h5>
                            <p>Take your productivity to another level with our conducive workspace.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Services Section End Here -->

    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 col-6">
                    <div class="seomek-counter">
                        <div>
                            <span class="num" data-to="1500" data-time="2000">0</span>
                            <span>+</span>
                        </div>
                        <h6>Active Clients</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-6">
                    <div class="seomek-counter">
                        <div>
                            <span class="num" data-to="10000" data-time="2000">0</span>
                            <span>+</span>
                        </div>
                        <h6>Campaigns Done</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-6">
                    <div class="seomek-counter">
                        <div>
                            <span class="num" data-to="10" data-time="2000">0</span>
                            <span>+</span>
                        </div>
                        <h6>Team Advisors</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-6">
                    <div class="seomek-counter">
                        <div>
                            <span class="num" data-to="6" data-time="2000">0</span>
                            <span>+</span>
                        </div>
                        <h6>Glorious Years</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client  Counter Section End Here -->
    <!-- Website Next Level Section Start Here -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="web_bg">
                        <h3>Be A Part Of the Largest Community On WhatsApp!</h3>
                        <p></p>
                        <a class="btn" href="https://wa.me/2348182542690?text=Hello!%20I%20want%20to%20view%20PotTV%20Status%20Updates%20from%20Website.%20Save%20my%20number.%20" target="_blank">Join Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Website Next Level Section End Here -->
</div>
<!-- content Start Here -->
@endsection

