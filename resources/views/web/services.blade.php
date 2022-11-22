@extends('layouts.app')
@section('head')
    @include('meta::manager', [
    'title'         => 'Our services',
])
@endsection

@section('content')
    <!-- content Start Here -->
    <div class="site-content">
        <!-- Page-Header Section STARTS Here -->
        <div class="page-header text-center">
            <div class="container">
                <h1 class="page-title">Our Services</h1>
                <ul id="breadcrumbs" class="breadcrumbs">
                    <li><a href="{{route('home-page')}}">Home</a></li>
                    <li class="active">Our Services</li>
                </ul>
            </div>
        </div>
        <!-- Page-Header Section End Here -->
        <!-- App Development Section STARTS Here -->
        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="development_text">
                            <div class="heading text-left">
                                <h2>WhatsApp Promotions</h2>
                                <img class="lazy" data-src="{{asset('assets/image/icons/headin_border.png')}}"
                                     src="{{asset('assets/image/icons/headin_border.png')}}" alt="headin_border">
                            </div>
                            <div class="development-tabs">
                                <p class="mb-3">We help businesses and brands like yours generate more profits by building
                                    awareness, driving web traffic, connecting with customers, and growing overall
                                    sales. Send us a message.</p>
                                <ul class="tabs-heading unstyle">
                                    <li class="tab-link btn current" data-tab="tab-1454">Features</li>
                                </ul>
                                <div id="tab-1454" class="tab-content current">
                                    <ul class="has-icon unstyle">
                                        <li><i class="fal fa-check-square"></i> We provide the largest engagement on your campaigns and advertisements on WhatsApp
                                        </li>
                                        <li><i class="fal fa-check-square"></i> We are your best bet to scale up your business/brand/events using WhatsApp Marketing
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="app-services-2">
                            <img class="lazy" data-src="{{asset('assets/image/bg/whatsapp.png')}}"
                                 src="{{asset('assets/image/bg/whatsapp.png')}}" alt="app-services-2">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="development_text">
                            <div class="heading text-left">
                                <h2>Co - Workspace</h2>
                                <img class="lazy" data-src="{{asset('assets/image/icons/headin_border.png')}}"
                                     src="{{asset('assets/image/icons/headin_border.png')}}" alt="headin_border">
                            </div>
                            <div class="development-tabs">
                                <p class="mb-3">Take your productivity to another level. We offer the best and unique
                                    co-workspace in Ibadan</p>
                                <ul class="tabs-heading unstyle">
                                    <li class="tab-link btn current" data-tab="tab-1454">Features</li>
                                </ul>
                                <div id="tab-1454" class="tab-content current">
                                    <ul class="has-icon unstyle">
                                        <li><i class="fal fa-check-square"></i> Stable Power Supply
                                        </li>
                                        <li><i class="fal fa-check-square"></i> Front Desk Services
                                        </li>
                                        <li><i class="fal fa-check-square"></i> Credible & Accessible location
                                        </li>
                                        <li><i class="fal fa-check-square"></i> Super fast WiFi
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="widget-insta-feeds instafeed-gallery">
                            <div class="instafeed-item">
                                <a href="{{asset('assets/image/blog/media2.jpg')}}" data-fancybox="video"><img
                                        class="lazy" data-src="{{asset('assets/image/blog/media2.jpg')}}"
                                        src="{{asset('assets/image/blog/media2.jpg')}}" alt="gallery"></a>
                            </div>
                            <div class="instafeed-item">
                                <a href="{{asset('assets/image/blog/media3.jpg')}}" data-fancybox="video"><img
                                        class="lazy" data-src="{{asset('assets/image/blog/media3.jpg')}}"
                                        src="{{asset('assets/image/blog/media3.jpg')}}" alt="gallery"></a>
                            </div>
                            <div class="instafeed-item">
                                <a href="{{asset('assets/image/blog/media4.jpg')}}" data-fancybox="video"><img
                                        class="lazy" data-src="{{asset('assets/image/blog/media4.jpg')}}"
                                        src="{{asset('assets/image/blog/media4.jpg')}}" alt="gallery"></a>
                            </div>
                            <div class="instafeed-item">
                                <a href="{{asset('assets/image/blog/media5.jpg')}}" data-fancybox="video"><img
                                        class="lazy" data-src="{{asset('assets/image/blog/media5.jpg')}}"
                                        src="{{asset('assets/image/blog/media5.jpg')}}" alt="gallery"></a>
                            </div>
                            <div class="instafeed-item">
                                <a href="{{asset('assets/image/blog/media6.jpg')}}" data-fancybox="video"><img
                                        class="lazy" data-src="{{asset('assets/image/blog/media6.jpg')}}"
                                        src="{{asset('assets/image/blog/media6.jpg')}}" alt="gallery"></a>
                            </div>
                            <div class="instafeed-item">
                                <a href="{{asset('assets/image/blog/media7.jpg')}}" data-fancybox="video"><img
                                        class="lazy" data-src="{{asset('assets/image/blog/media7.jpg')}}"
                                        src="{{asset('assets/image/blog/media7.jpg')}}" alt="gallery"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="development_text">
                            <div class="heading text-left">
                                <h2>Media Sessions</h2>
                                <img class="lazy" data-src="{{asset('assets/image/icons/headin_border.png')}}"
                                     src="{{asset('assets/image/icons/headin_border.png')}}" alt="headin_border">
                            </div>
                            <div class="development-tabs">
                                <p class="mb-3">For all your media shoots. We offer.</p>
                                <ul class="tabs-heading unstyle">
                                    <li class="tab-link btn current" data-tab="tab-1454">Features</li>
                                </ul>
                                <div id="tab-1454" class="tab-content current">
                                    <ul class="has-icon unstyle">
                                        <li><i class="fal fa-check-square"></i> Birthday shoots
                                        </li>
                                        <li><i class="fal fa-check-square"></i> Wedding photography
                                        </li>
                                        <li><i class="fal fa-check-square"></i> Makeup/beauty shoot
                                        </li>
                                        <li><i class="fal fa-check-square"></i> Wedding/Event Coverage
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="widget-insta-feeds instafeed-gallery">
                            <div class="instafeed-item">
                                <a href="{{asset('assets/image/blog/media1.jpg')}}" data-fancybox="video"><img
                                        class="lazy" data-src="{{asset('assets/image/blog/media1.jpg')}}"
                                        src="{{asset('assets/image/blog/media1.jpg')}}" alt="gallery"></a>
                            </div>
                            <div class="instafeed-item">
                                <a href="{{asset('assets/image/blog/media8.jpg')}}" data-fancybox="video"><img
                                        class="lazy" data-src="{{asset('assets/image/blog/media8.jpg')}}"
                                        src="{{asset('assets/image/blog/media8.jpg')}}" alt="gallery"></a>
                            </div>
                            <div class="instafeed-item">
                                <a href="{{asset('assets/image/blog/media9.jpg')}}" data-fancybox="video"><img
                                        class="lazy" data-src="{{asset('assets/image/blog/media9.jpg')}}"
                                        src="{{asset('assets/image/blog/media9.jpg')}}" alt="gallery"></a>
                            </div>
                            <div class="instafeed-item">
                                <a href="{{asset('assets/image/blog/media10.jpg')}}" data-fancybox="video"><img
                                        class="lazy" data-src="{{asset('assets/image/blog/media10.jpg')}}"
                                        src="{{asset('assets/image/blog/media10.jpg')}}" alt="gallery"></a>
                            </div>
                            <div class="instafeed-item">
                                <a href="{{asset('assets/image/blog/media11.jpg')}}" data-fancybox="video"><img
                                        class="lazy" data-src="{{asset('assets/image/blog/media11.jpg')}}"
                                        src="{{asset('assets/image/blog/media11.jpg')}}" alt="gallery"></a>
                            </div>
                            <div class="instafeed-item">
                                <a href="{{asset('assets/image/blog/media12.jpg')}}" data-fancybox="video"><img
                                        class="lazy" data-src="{{asset('assets/image/blog/media12.jpg')}}"
                                        src="{{asset('assets/image/blog/media12.jpg')}}" alt="gallery"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- App Development Section End Here -->
        {{--        <section class="pt-0">--}}
        {{--            <div class="container">--}}
        {{--                <div class="row">--}}
        {{--                    <div class="col-md-12">--}}
        {{--                        <div class="heading">--}}
        {{--                            <h2>Media Sessions</h2>--}}
        {{--                            <img class="lazy" data-src="{{asset('assets/image/icons/headin_border.png')}}"--}}
        {{--                                 src="{{asset('assets/image/icons/headin_border.png')}}" alt="headin_border">--}}
        {{--                            <p>We provide the best photo sessions to make everything better. <br> We have only professional team!</p>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="row">--}}
        {{--                    <div class="col-md-12">--}}
        {{--                        <div class="widget-insta-feeds instafeed-gallery">--}}
        {{--                            <div class="instafeed-item">--}}
        {{--                                <a href="{{asset('assets/image/blog/blog-grid-1.jpg')}}" data-fancybox="video"><img--}}
        {{--                                        class="lazy" data-src="{{asset('assets/image/blog/blog-grid-1.jpg')}}"--}}
        {{--                                        src="{{asset('assets/image/blog/blog-grid-1.jpg')}}" alt="gallery"></a>--}}
        {{--                            </div>--}}
        {{--                            <div class="instafeed-item">--}}
        {{--                                <a href="{{asset('assets/image/blog/blog-grid-2.jpg')}}" data-fancybox="video"><img--}}
        {{--                                        class="lazy" data-src="{{asset('assets/image/blog/blog-grid-2.jpg')}}"--}}
        {{--                                        src="{{asset('assets/image/blog/blog-grid-2.jpg')}}" alt="gallery"></a>--}}
        {{--                            </div>--}}
        {{--                            <div class="instafeed-item">--}}
        {{--                                <a href="{{asset('assets/image/blog/blog-grid-4.jpg')}}" data-fancybox="video"><img--}}
        {{--                                        class="lazy" data-src="{{asset('assets/image/blog/blog-grid-4.jpg')}}"--}}
        {{--                                        src="{{asset('assets/image/blog/blog-grid-4.jpg')}}" alt="gallery"></a>--}}
        {{--                            </div>--}}
        {{--                            <div class="instafeed-item">--}}
        {{--                                <a href="{{asset('assets/image/blog/blog-grid-3.jpg')}}" data-fancybox="video"><img--}}
        {{--                                        class="lazy" data-src="{{asset('assets/image/blog/blog-grid-3.jpg')}}"--}}
        {{--                                        src="{{asset('assets/image/blog/blog-grid-3.jpg')}}" alt="gallery"></a>--}}
        {{--                            </div>--}}
        {{--                            <div class="instafeed-item">--}}
        {{--                                <a href="{{asset('assets/image/blog/blog-grid-1.jpg')}}" data-fancybox="video"><img--}}
        {{--                                        class="lazy" data-src="{{asset('assets/image/blog/blog-grid-1.jpg')}}"--}}
        {{--                                        src="{{asset('assets/image/blog/blog-grid-1.jpg')}}" alt="gallery"></a>--}}
        {{--                            </div>--}}
        {{--                            <div class="instafeed-item">--}}
        {{--                                <a href="{{asset('assets/image/blog/blog-grid-2.jpg')}}" data-fancybox="video"><img--}}
        {{--                                        class="lazy" data-src="{{asset('assets/image/blog/blog-grid-2.jpg')}}"--}}
        {{--                                        src="{{asset('assets/image/blog/blog-grid-2.jpg')}}" alt="gallery"></a>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </section>--}}

        {{--        <section class="pt-0">--}}
        {{--            <div class="container">--}}
        {{--                <div class="row">--}}
        {{--                    <div class="col-md-12">--}}
        {{--                        <div class="heading">--}}
        {{--                            <h2>Co - Workspace</h2>--}}
        {{--                            <img class="lazy" data-src="{{asset('assets/image/icons/headin_border.png')}}"--}}
        {{--                                 src="{{asset('assets/image/icons/headin_border.png')}}" alt="headin_border">--}}
        {{--                            <p>We provide good workspace for individuals and very comfortable <br> We have only--}}
        {{--                                professional--}}
        {{--                                team!</p>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="row">--}}
        {{--                    <div class="col-md-12">--}}
        {{--                        <div class="widget-insta-feeds instafeed-gallery">--}}
        {{--                            <div class="instafeed-item">--}}
        {{--                                <a href="{{asset('assets/image/blog/blog-grid-1.jpg')}}" data-fancybox="video"><img--}}
        {{--                                        class="lazy" data-src="{{asset('assets/image/blog/blog-grid-1.jpg')}}"--}}
        {{--                                        src="{{asset('assets/image/blog/blog-grid-1.jpg')}}" alt="gallery"></a>--}}
        {{--                            </div>--}}
        {{--                            <div class="instafeed-item">--}}
        {{--                                <a href="{{asset('assets/image/blog/blog-grid-2.jpg')}}" data-fancybox="video"><img--}}
        {{--                                        class="lazy" data-src="{{asset('assets/image/blog/blog-grid-2.jpg')}}"--}}
        {{--                                        src="{{asset('assets/image/blog/blog-grid-2.jpg')}}" alt="gallery"></a>--}}
        {{--                            </div>--}}
        {{--                            <div class="instafeed-item">--}}
        {{--                                <a href="{{asset('assets/image/blog/blog-grid-4.jpg')}}" data-fancybox="video"><img--}}
        {{--                                        class="lazy" data-src="{{asset('assets/image/blog/blog-grid-4.jpg')}}"--}}
        {{--                                        src="{{asset('assets/image/blog/blog-grid-4.jpg')}}" alt="gallery"></a>--}}
        {{--                            </div>--}}
        {{--                            <div class="instafeed-item">--}}
        {{--                                <a href="{{asset('assets/image/blog/blog-grid-3.jpg')}}" data-fancybox="video"><img--}}
        {{--                                        class="lazy" data-src="{{asset('assets/image/blog/blog-grid-3.jpg')}}"--}}
        {{--                                        src="{{asset('assets/image/blog/blog-grid-3.jpg')}}" alt="gallery"></a>--}}
        {{--                            </div>--}}
        {{--                            <div class="instafeed-item">--}}
        {{--                                <a href="{{asset('assets/image/blog/blog-grid-1.jpg')}}" data-fancybox="video"><img--}}
        {{--                                        class="lazy" data-src="{{asset('assets/image/blog/blog-grid-1.jpg')}}"--}}
        {{--                                        src="{{asset('assets/image/blog/blog-grid-1.jpg')}}" alt="gallery"></a>--}}
        {{--                            </div>--}}
        {{--                            <div class="instafeed-item">--}}
        {{--                                <a href="{{asset('assets/image/blog/blog-grid-2.jpg')}}" data-fancybox="video"><img--}}
        {{--                                        class="lazy" data-src="{{asset('assets/image/blog/blog-grid-2.jpg')}}"--}}
        {{--                                        src="{{asset('assets/image/blog/blog-grid-2.jpg')}}" alt="gallery"></a>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </section>--}}
{{--        @include('partials.brand-logo')--}}
    </div>
    <!-- content Start Here -->
@endsection
