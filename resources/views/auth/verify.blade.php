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
            <h3 class="title">{{ __('Verify Your Phone Number') }}</h3>
            @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
            @endif
            <p>
            Please enter the OTP sent to your number: +880{{ session('phone') }}
            </p>
            <form class="account-form" action="{{ route('verifyOtp') }}" method="POST">
                @csrf
                <div class="form-group">
                    <br>
                    <input type="hidden" name="phone" value="1967569642">
                    <input id="verification_code" type="tel" class="form-control @error('verification_code') is-invalid @enderror" name="verification_code" value="{{ old('verification_code') }}" placeholder="123456" required>
                    @error('verification_code')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group text-center">
                    <button class="d-block lab-btn"><span>{{ __('Verify OTP') }}</span></button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Login Section Section Ends Here -->
@endsection