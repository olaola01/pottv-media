@extends('layouts.dashboard')
@section('title')
    Posts - {{ $post->title }}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body task-detail">
                    <div class="d-flex mb-3">
                        <img class="flex-shrink-0 me-3 rounded-circle avatar-md" alt="64x64"
                             src="{{asset('public/posts/'.$post->post_image)}}">
                        <div class="flex-grow-1">
                            <h4 class="media-heading mt-0">{{ ucfirst($post->title) }}</h4>
                            @if(is_null($post->deleted_at))
                                <span class="badge bg-success">Active Post</span>
                            @else
                                <span class="badge bg-danger">Deleted Post</span>

                            @endif
                        </div>
                    </div>

                    <h4>Post Content</h4>

                    <p class="text-muted">
                        {!! $post->content !!}
                    </p>

                    <div class="row task-dates mb-0 mt-2">
                        <div class="col-lg-6">
                            <h5 class="font-600 m-b-5">Date Published</h5>
                            <p> {{ $post->created_at->format('d M Y') }} <small
                                    class="text-muted">{{ $post->created_at->format('h:i A') }}</small></p>
                        </div>

                        @if(!is_null($post->deleted_at))
                            <div class="col-lg-6">
                                <h5 class="font-600 m-b-5">Date Deleted</h5>
                                <p> {{ $post->deleted_at->format('d M Y') }} <small
                                        class="text-muted">{{ $post->deleted_at->format('h:i A') }}</small></p>
                            </div>
                        @endif
                    </div>
                    <div class="clearfix"></div>
                    @if(!is_null($post->category))
                    <div class="task-tags mt-2 inline">
                        <h5>Category</h5>
                        <p><span class="badge bg-secondary me-1" style="font-size: 13px">{{ $post->category->title }} </span></p>
                    </div>
                    @endif
                    <div class="task-tags mt-2 inline">
                        <h5>Tags</h5>
                        <p>@foreach($post->tags as $tag)
                                <span class="badge bg-primary me-1" style="font-size: 13px">{{ $tag->title }} </span>
                            @endforeach
                        </p>
                    </div>

                    <div class="attached-files mt-3">
                        <h5>Attached File </h5>
                        <img src="{{asset('public/posts/'.$post->post_image)}}" class="img-fluid" alt="attached-img" width="300">
                    </div>
                </div>
            </div>

        </div><!-- end col -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body task-detail">
                    <div class="d-flex mb-3">
                        <h4>Total views:  {{ $post->post_views->count() }}</h4>
                    </div>

                    <div class="clearfix"></div>
                    <a type="button" href="{{ route('blog.show', $post->slug) }}" class="btn btn-outline-success waves-effect waves-light">Visit Post</a>


                </div>
            </div>

        </div><!-- end col -->
    </div>
    <!-- end row -->

@endsection
