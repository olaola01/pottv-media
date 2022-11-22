@extends('layouts.app')
@section('head')
    @include('meta::manager', [
    'title'         => 'About Us',
])
@endsection
@section('content')
    <!-- content Start Here -->
    <div class="site-content">
        <!-- Page-Header Section STARTS Here -->
        <div class="page-header text-center">
            <div class="container">
                <h1 class="page-title">About Company</h1>
                <ul id="breadcrumbs" class="breadcrumbs">
                    <li><a href="{{ route('home-page') }}">Home</a></li>
                    <li class="active">About Company</li>
                </ul>
            </div>
        </div>
        <!-- Page-Header Section End Here -->
        <section>
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6">
                        <div class="businessgrow_img">
                            <img class="lazy" data-src="{{asset('assets/image/bg/about-home2.png')}}" src="{{asset('assets/image/bg/about-home2.png')}}" alt="businessgrow_img">
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
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Take Website to Next Level Section Strat Here -->
        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="services-video">
                            <div class="row home_3_counter mt-0">
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
                    </div>
                </div>
            </div>
        </section>
        <!-- Take Website to Next Level Section End Here -->
        <!-- Our Best Team Section Strat Here -->
        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>Meet Our Team</h2>
                            <img class="lazy" data-src="{{asset('assets/image/icons/headin_border.png')}}" src="{{asset('assets/image/icons/headin_border.png')}}" alt="headin_border">
                            <p>If we had a ‘secret sauce’ it would be our awesome people. <br> We only have a professional team!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="team" class="owl-carousel owl-theme">
                            <div class="team-wrap">
                                <div class="team-thumb">
                                    <img class="lazy" data-src="{{asset('assets/image/team/team1.jpg')}}" src="{{asset('assets/image/team/team1.jpg')}}" alt="team1">
                                </div>
                                <div class="team-info">
                                    <h4>Victor O. Ehindero</h4>
                                    <span>CEO, POTTV Media</span>
                                    <div class="team-social">
                                        <a href="https://twitter.com/v_ehindero" target="_blank" class="twitter"><i class="fab fab fa-twitter"></i></a>
                                        <a href="https://instagram.com/v_ehindero" class="instagram"><i class="fab fab fa-instagram"></i></a>
                                        <i class="fal fa-plus"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="team-wrap">
                                <div class="team-thumb">
                                    <img class="lazy" data-src="{{asset('assets/image/team/team4.jpg')}}" src="{{asset('assets/image/team/team4.jpg')}}" alt="team1">
                                </div>
                                <div class="team-info">
                                    <h4>Alaba O. Ehindero</h4>
                                    <span>Director, POTTV Media</span>
                                </div>
                            </div>
                            <div class="team-wrap">
                                <div class="team-thumb">
                                    <img class="lazy" data-src="{{asset('assets/image/team/team3.jpg')}}" src="{{asset('assets/image/team/team3.jpg')}}" alt="team1">
                                </div>
                                <div class="team-info">
                                    <h4>Jemimah A. Adeyemo</h4>
                                    <span>COO, POTTV Media</span>
                                </div>
                            </div>

                            <div class="team-wrap">
                                <div class="team-thumb">
                                    <img class="lazy" data-src="{{asset('assets/image/team/team2.jpg')}}" src="{{asset('assets/image/team/team2.jpg')}}" alt="team1">
                                </div>
                                <div class="team-info">
                                    <h4>Comfort I. Akinmodun</h4>
                                    <span>CCO, POTTV Media</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Best Team Section End Here -->
{{--       @include('partials.brand-logo')--}}
    </div>
    <!-- content Start Here -->
@endsection
