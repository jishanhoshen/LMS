@extends('layouts.app')

@section('content')
<!-- Page Header section start here -->
<div class="pageheader-section" style="padding:72px 0px">
    <div class="container">
    </div>
</div>
<!-- Page Header section ending here -->
<!-- Login Section Section Starts Here -->
<div class="login-section padding-tb section-bg">
    <div class="container">
        <div class="account-wrapper">
            <h3 class="title">{{ __('Register') }}</h3>
            @if(session()->has('error'))
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ session()->get('error') }}</strong>
            </span>
            @endif
            <form class="account-form" method="POST" action="{{ route('createUser') }}">
                @csrf
                <div class="form-group">
                    <label for="name" class="col-form-label text-start d-block">{{ __('Full Name') }}</label>

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email" class="col-form-label text-start d-block">{{ __('Email Address') }}</label>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone" class="col-form-label text-start d-block">{{ __('Phone') }}</label>
                    <div class="phone_custom d-flex align-items-center">
                        <div class="contrycode form-control w-auto" style="color: #737c83;">+880</div>
                        <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                    </div>
                    @error('phone')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password" class="col-form-label text-start d-block">{{ __('Password') }}</label>

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password-confirm" class="col-form-label text-start d-block">{{ __('Confirm Password') }}</label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="form-group">
                    <button type="submit" class="lab-btn"><span>{{ __('Register') }}</span></button>
                </div>
            </form>
            <div class="account-bottom">
                <span class="d-block cate pt-10">Are you a member? <a href="{{ route('login') }}">Login</a></span>
                <span class="or"><span>or</span></span>
                <h5 class="subtitle">Register With Social Media</h5>
                <ul class="lab-ul social-icons justify-content-center">
                    <li>
                        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#" class="pinterest"><i class="icofont-pinterest"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Login Section Section Ends Here -->
<script>
    $("#phone").keydown(function(event) {
        k = event.which;
        console.log(k);
        if ((k >= 96 && k <= 105) || k == 8 || (k >= 48 && k <= 57)) {

            if ($(this).val().length == 10) {
                if (k == 8) {
                    return true;
                } else {
                    event.preventDefault();
                    return false;
                }
            }
        } else {
            event.preventDefault();
            return false;
        }

    });
</script>
@endsection