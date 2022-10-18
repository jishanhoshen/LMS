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
                Please enter the OTP sent to your number: {{ session('phone') }}
                <form class="account-form" action="{{ route('verify') }}">
                    @csrf
                    <div class="form-group">
                        <label for="verification_code"
                            class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
                        <input type="hidden" name="phone" value="{{ session('phone') }}">
                        <input id="verification_code" type="tel"
                            class="form-control @error('verification_code') is-invalid @enderror" name="verification_code"
                            value="{{ old('verification_code') }}" required>
                            @error('verification_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="G-123456">
                    </div>
                    <div class="form-group text-center">
                        <button class="d-block lab-btn"><span>{{ __('Verify Phone Number') }}</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Login Section Section Ends Here -->
@endsection
