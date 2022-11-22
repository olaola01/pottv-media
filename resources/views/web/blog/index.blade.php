@extends('layouts.app')
@section('head')
    @include('meta::manager', [
    'title'         => 'Blog',
])
@endsection
@section('content')
    <!-- content Start Here -->
    <div class="site-content">
        <!-- Page-Header Section STARTS Here -->
        <div class="page-header text-center">
            <div class="container">
                <h1 class="page-title">Blog</h1>
                <ul id="breadcrumbs" class="breadcrumbs">
                    <li><a href="{{ route('home-page') }}">Home</a></li>
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
        <!-- Page-Header Section End Here -->
        <!-- Blog Grid Section Start Here -->
        <section class="blog-page">
            <div class="container">
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-lg-3 col-md-6">
                        <div class="post-inner">
                            <div class="entry-media">
                                <div class="post-cat">
{{--                                <span class="posted-in">--}}
{{--                                    @foreach($post->tags as $tag)--}}
{{--                                        <a href="javascript:void(0)">{{ ucfirst($tag->title) }}</a>--}}
{{--                                    @endforeach--}}
{{--                                </span>--}}
                                </div>
                                <a href="{{ route('blog.show', $post->slug) }}">
                                    <img class="lazy" data-src="{{asset('public/posts/'.$post->post_image)}}" src="{{asset('public/posts/'.$post->post_image)}}" alt="blog-grid">
                                </a>
                            </div>
                            <div class="inner-post">
                                <div class="entry-header">
                                    <div class="entry-meta">
                                        <span class="posted-on">
                                        <a href="javascript:void(0)"><i class="far fa-clock"></i> <time class="entry-date published">{{ $post->created_at->format('F d, Y') }}</time></a>
                                    </span>
                                    </div>
                                    <a href="{{ route('blog.show', $post->slug) }}" class="entry-title">{{ ucfirst($post->title) }}</a>
                                </div>
                                <p class="entry-summary">{!! \Illuminate\Support\Str::limit(strip_tags($post->content), 80) !!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-12">
                        {!! $posts->links() !!}
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Grid Section End Here -->
    </div>
    <!-- content Start Here -->
@endsection
