@extends('layouts.app')
@section('head')
    @include('meta::manager', [
    'title'         => 'Contact Us',
])
@endsection
@section('content')
    <!-- content Start Here -->
    <div class="site-content">
        <!-- Page-Header Section STARTS Here -->
        <div class="page-header text-center">
            <div class="container">
                <h1 class="page-title">Contact Us</h1>
                <ul id="breadcrumbs" class="breadcrumbs">
                    <li><a href="{{ route('home-page') }}">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
        <!-- Page-Header Section End Here -->
        <!-- Contact-Us Section STARTS Here -->
        <section>
            <div class="container">
                @include('partials.success')
                <form action="{{ route('save.message') }}" method="POST" onsubmit="disableButton()">
                    @csrf
                    <div class="row free-a-quote">
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                   value="{{ old('first_name') }}" autocomplete="first_name" autofocus name="first_name"
                                   id="First name" placeholder="First Name *" required="">
                            @error('first_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                   value="{{ old('last_name') }}" autocomplete="last_name" autofocus name="last_name" id="Last Name" placeholder="Last Name *" required="">
                            @error('last_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control @error('phone_number') is-invalid @enderror"
                                   value="{{ old('phone_number') }}" autocomplete="phone_number" autofocus name="phone_number" id="Phone Number" placeholder="Phone Number *"
                                   required="">
                            @error('phone_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                   value="{{ old('email') }}" autocomplete="email" autofocus name="email" id="Your Email" placeholder="Your Email *" required="">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 col-xs-12 multi-checkbox">
                            <h5>Reason To Contact</h5><br>
                            <span class="list-item first">
                        <label>
                            <input type="checkbox" class="checkbox" onchange="checkChange()" name="reason_for_contact"
                                   value="WhatsApp Promotions">
                            <span class="list-item-label">WhatsApp Promotions</span>
                        </label>
                    </span>
                            <span class="list-item">
                        <label>
                            <input type="checkbox" class="checkbox" onchange="checkChange()" name="reason_for_contact"
                                   value="Media Sessions">
                            <span class="list-item-label">Media Sessions</span>
                        </label>
                    </span>
                            <span class="list-item">
                        <label>
                            <input type="checkbox" class="checkbox" onchange="checkChange()" name="reason_for_contact"
                                   value="Co Workspace">
                            <span class="list-item-label">Co - Workspace</span>
                        </label>
                    </span>
                            <span class="list-item">
                        <label>
                            <input type="checkbox" class="checkbox" onchange="checkChange()" name="reason_for_contact"
                                   value="Other Reasons">
                            <span class="list-item-label">Other Reasons</span>
                        </label>
                    </span>
                        </div>
                        @error('reason_for_contact')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="col-lg-12">
                        <textarea type="text" class="form-control @error('message') is-invalid @enderror"
                                  autocomplete="message" autofocus name="message" id="message" placeholder="Message..." required=""
                                  style="height: 150px"></textarea>
                            @error('message')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="captcha">
                                <span>{!! app('captcha')->display() !!}</span>
                            </div>

                            @error('g-recaptcha-response')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-12 text-center mt-5">
                            <button type="submit" name="submit" class="btn">Send Message <i
                                    class="flaticon-right-arrow-1"></i></button>
                        </div>
                    </div>
                </form>

            </div>
        </section>
        <!-- Contact-Us Section End Here -->
    </div>
    <!-- content Start Here -->
@endsection

@section('script')
    <script>
        let checkbox = document.querySelectorAll('.checkbox')
        let b = false;

        function checkChange() {
            b = !b
            if (b) {
                for (let i = 0; i < checkbox.length; i++) {
                    if (checkbox[i].checked === false) {
                        checkbox[i].disabled = 'true';
                    }
                }
            } else {
                for (let i = 0; i < checkbox.length; i++) {
                    checkbox[i].removeAttribute('disabled');
                }

            }
        }

        function disableButton() {
            var btn = document.querySelector('.btn');
            btn.disabled = true;
            btn.innerText = 'Sending...'
        }
    </script>
@endsection
