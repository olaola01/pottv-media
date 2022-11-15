@extends('layouts.dashboard')
@section('title')
    Create New Category
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Create Category Form</h4>
                    <form class="needs-validation" action="{{route('categories.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" id="validationCustom01" placeholder="Enter category title"required/>

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
{{--                            <div class="col-md-6 mb-3">--}}
{{--                                <label for="validationCustom02" class="form-label">Last name</label>--}}
{{--                                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name"--}}
{{--                                       value="Otto" required/>--}}
{{--                                <div class="valid-feedback">--}}
{{--                                    Looks good!--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
@endsection
