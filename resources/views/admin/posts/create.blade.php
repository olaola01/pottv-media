@extends('layouts.dashboard')
@section('title')
    {{ isset($post) ? 'Edit Post' : 'Create Post' }}
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdn.tiny.cloud/1/hi28p8jnwg0si1kzmqnfa4pljzw9vgrihtepuofitl0gig0r/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            padding: 0px 5px 0px 7px !important;
        }
        .select2-container--default .select2-results__option--selected.select2-results__option[aria-selected=true]{
            background-color: #35495e !important;
            color: #fff !important;
        }
        .select2-container--default .select2-results__option--selected.select2-results__option[aria-selected=true]:hover{
            background-color: #e0e0e0 !important;
            color: #35495e !important;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            border-right: 1px solid #aaaaaa57;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
            cursor: default;
            padding-left: 8px;
            padding-right: 5px;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            @include('partials.success')
            @include('partials.errors')
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">{{ isset($post) ? 'Edit Post Form' : 'Create Post Form' }}</h4>
                    <form class="needs-validation" action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($post))
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01" class="form-label">Title</label>
                                <input type="text" onblur="getSlug()" name="title"
                                       class="form-control @error('title') is-invalid @enderror"
                                       value="{{ isset($post) ? $post->title: old('title') }}" id="title" placeholder="Enter post title"
                                       required/>
                                <span id="slug" style="font-size: 15px" class="text-success italic"></span>
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01" class="form-label">Category</label>
                                <select class="form-select @error('category_id') is-invalid @enderror" id="category-id" name="category_id">
                                    <option>Please Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                                @if(isset($post))
                                                    @if($category->id == $post->category_id)
                                                        selected
                                            @endif
                                            @endif
                                        >{{$category->title}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01" class="form-label">Tags</label>
                                <select class="select2-multiple form-control" name="tags[]" multiple="multiple"
                                        id="select2Multiple">
                                    @foreach($tags as $tag)
                                        <option value="{{$tag->id}}"
                                                @if(isset($post))
                                                    @if($post->hasTag($tag->id))
                                                        selected
                                                     @endif
                                                @endif
                                        >{{$tag->title}}</option>
                                    @endforeach
                                </select>
                                @error('tags')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01" class="form-label">Post Image</label>
                                <input type="file" name="post_image"
                                       class="form-control @error('image') is-invalid @enderror"
                                       value="{{ old('post_image') }}" id="validationCustom01"/>

                                @error('post_image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <label for="validationCustom01" class="form-label">Post Content</label>
                                    <textarea name="content">
                                        {{ isset($post) ? $post->content: old('content') }}
                                     </textarea>
                                    @error('post_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit"> {{ isset($post) ? 'Update Post' :'Create Post' }}</button>
                    </form>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <!-- Initialize Quill editor -->
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists searchreplace table visualblocks wordcount checklist casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Pottv Media',
            mergetags_list: [
                { value: 'Pottv Media', title: 'Pottv Media' }
            ]
        });
    </script>
    </script>
    <script>
        function getSlug() {
            let a = document.getElementById("title").value;
            let b = a.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
            document.getElementById("slug").value = b;
            document.getElementById("slug").innerHTML = `slug: ${b}`;
        }
    </script>

    <script>
        $(document).ready(function() {
            $('.select2-multiple').select2({
                placeholder: "Select tags",
                allowClear: true,
                width: 'resolve'
            });

        });
    </script>
@endsection
