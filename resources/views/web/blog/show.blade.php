@extends('layouts.app')
@section('head')
    @include('meta::manager', [
    'title' => $post->title,
])
@endsection
@section('content')
    <div class="site-content">
        <!-- Blog Single Section Start Here -->
        <section class="blog-single">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-xs-12">
                        <div class="post-inner">
                            <div class="entry-media">
                                <div class="post-cat">
                                <span class="posted-in">
                                      @foreach($post->tags as $tag)
                                        <a href="javascript:void(0)" class="mb-1">{{ ucfirst($tag->title) }}</a>
                                    @endforeach
                                </span>
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
                                <p class="entry-summary">{!! $post->content !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="main_widget widget_categories">
                            <h5 class="widget-title">Top Categories</h5>
                            <ul>
                                @foreach($categories as $category)
                                <li><a href="javascript:void(0)">{{ $category->title }}</a> <span class="posts-count">({{ $category->posts->count() }})</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="main_widget">
                            <h5 class="widget-title">Tags</h5>
                            <div class="tagcloud">
                                @foreach($tags as $tag)
                                <a href="javascript:void(0)" class="tag-cloud-link">{{ $tag->title }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Single Section End Here -->
        <!-- Our Latest Media Section Start Here -->
        @if($recentPosts->count() > 0)
        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>Recent Posts</h2>
                            <img class="lazy" data-src="{{asset('assets/image/icons/headin_border.png')}}" src="{{asset('assets/image/icons/headin_border.png')}}" alt="headin_border">
                            <p>You can also browse through our recent posts</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($recentPosts as $recent)
                    <div class="col-lg-3">
                        <div class="post-inner">
                            <div class="entry-media">
                                <div class="post-cat">
                                <span class="posted-in">
                                    @foreach($recent->tags as $tag)
                                        <a href="javascript:void(0)" class="mb-1">{{ ucfirst($tag->title) }}</a>
                                    @endforeach
                                </span>
                                </div>
                                <a href="{{ route('blog.show', $post->slug) }}">
                                    <img class="lazy" data-src="{{asset('public/posts/'.$recent->post_image)}}" src="{{asset('public/posts/'.$recent->post_image)}}" alt="blog-grid">
                                </a>
                            </div>
                            <div class="inner-post">
                                <div class="entry-header">
                                    <div class="entry-meta">
                                        <span class="posted-on">
                                        <a href="javascript:void(0)"><i class="far fa-clock"></i> <time class="entry-date published">{{ $recent->created_at->format('F d, Y') }}</time></a>
                                    </span>
                                    </div>
                                    <a href="{{ route('blog.show', $recent->slug) }}" class="entry-title">{{ ucfirst($recent->title) }}</a>
                                </div>
                                <p class="entry-summary">{!! \Illuminate\Support\Str::limit(strip_tags($recent->content), 80) !!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif

        <!-- Our Latest Media Section End Here -->
    </div>
@endsection
