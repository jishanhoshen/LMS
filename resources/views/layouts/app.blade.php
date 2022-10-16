<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/x-icon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->


    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
    <!-- scrollToTop ending here -->


    <!-- header section start here -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="header-top-area">
                    <ul class="lab-ul left">
                        <li>
                            <a href="tel:{{ $config->phone }}"> <i class="icofont-ui-call"></i>
                                <span>{{ $config->phone }}</span> </a>
                        </li>
                        <li>
                            <i class="icofont-location-pin"></i> {{ $config->address }}
                        </li>
                    </ul>
                    <ul class="lab-ul social-icons d-flex align-items-center">
                        <li>
                            <p>Find us on : </p>
                        </li>
                        @foreach (json_decode($config->social) as $key => $item)
                            @if ($key == 'facebook')
                                <li><a href="{{ $item }}" class="fb"><i class="icofont-facebook-messenger"></i></a></li>
                            @elseif($key == 'twitter')
                                <li><a href="{{ $item }}" class="twitter"><i class="icofont-twitter"></i></a></li>
                            @elseif($key == 'instagram')
                                <li><a href="{{ $item }}" class="instagram"><i class="icofont-instagram"></i></a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <?php $logo = '01.png'; ?>
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo/' . $logo) }}"
                                alt="{{ config('app.name') . '-logo' }}"></a>
                    </div>
                    <div class="menu-area">
                        <div class="menu">
                            <ul class="lab-ul">
                                <li>
                                    <a href="{{ route('home') }}">Home</a>
                                </li>

                                <li>
                                    <a href="{{ route('all_course') }}">Courses</a>
                                </li>

                                <li><a href="contact.html">Contact</a></li>
                                @guest
                                    @if (Route::has('login'))
                                        <a href="{{ route('login') }}" class="login"><i class="icofont-user"></i>
                                            <span>LOG
                                                IN</span></a>
                                    @endif

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="signup"><i class="icofont-users"></i>
                                            <span>SIGN
                                                UP</span> </a>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>




                        <!-- toggle icons -->
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="ellepsis-bar d-lg-none">
                            <i class="icofont-info-square"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header section ending here -->


    @yield('content')


    <!-- footer -->
    <div class="news-footer-wrap">
        <div class="fs-shape">
            <img src="{{ asset('assets/images/shape-img/03.png') }}" alt="fst" class="fst-1">
            <img src="{{ asset('assets/images/shape-img/04.png') }}" alt="fst" class="fst-2">
        </div>
        <!-- Newsletter Section Start Here -->
        <div class="news-letter">
            <div class="container">
                <div class="section-wrapper" style="opacity:0">

                </div>
            </div>
        </div>
        <!-- Newsletter Section Ending Here -->

        <!-- Footer Section Start Here -->
        <footer>
            <div class="footer-bottom style-2">
                <div class="container">
                    <div class="section-wrapper">
                        <p>&copy; 2021 <a href="{{ route('home') }}">{{ config('app.name') }}</a> All Right Reserved
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section Ending Here -->
    </div>
    <!-- footer -->


    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/progress.js') }}"></script>
    <script src="{{ asset('assets/js/lightcase.js') }}"></script>
    <script src="{{ asset('assets/js/counter-up.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>

</body>

</html>
