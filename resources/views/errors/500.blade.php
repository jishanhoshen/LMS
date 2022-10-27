@extends('errors.newlayout')

@section('title', __('Under Development'))

@section('content')
    <!-- 404 section start here -->
    <div class="four-zero-section padding-tb section-bg" style="height:100vh">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="four-zero-content">
                        <h2 class="title" style="font-family: 'Exo 2';"><span style="font-size: 46px;">🙂</span> Be Patient</h2>
                        <p>Oops! The Page You Are Looking For is Under The Development</p>
                        <a href="{{ route('home') }}" class="lab-btn"><span>Go Back To Home <i class="icofont-external-link"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-6 col-12">
                    <div class="foue-zero-thumb">
                        <img src="{{ asset('development.webp') }}"style="height: calc(100vh - 12vh);">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 section ending here -->

@endsection