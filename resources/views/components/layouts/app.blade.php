<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <title>{{ $title ?? config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
        rel="stylesheet" />

    <!-- Scripts -->
    @livewireStyles
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])


    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animated-headline.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>
    <!-- start cssload-loader -->
    <div class="preloader" id="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
            </svg>
        </div>
    </div>
    <!-- end cssload-loader -->
    @if (Route::is(['login', 'register', 'password.confirm', 'password.email', 'password.request', 'password.reset']))
    @else
        <!-- ================================
            START HEADER AREA
================================= -->
        <header class="header-area">
            <div class="header-top-bar padding-right-100px padding-left-100px">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="header-top-content">
                                <div class="header-left">
                                    <ul class="list-items">
                                        <li>
                                            <a href="tel:+254715459941">
                                                <i class="la la-phone me-1"></i>+254715459941</a>
                                        </li>
                                        <li>
                                            <a href="mailto:info@gentriiqsafaris.co.ke">
                                                <i class="la la-envelope me-1"></i>info@gentriiqsafaris.co.ke</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header-top-content">
                                <div class="header-right header--right d-flex align-items-center justify-content-end">
                                    <div class="header-right-action">
                                        <a href="#" class="theme-btn theme-btn-small theme-btn-transparent me-1"
                                            data-bs-toggle="modal" data-bs-target="#signupPopupForm">Sign Up</a>
                                        <a href="#" class="theme-btn theme-btn-small" data-bs-toggle="modal"
                                            data-bs-target="#loginPopupForm">Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-menu-wrapper padding-right-100px padding-left-100px">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="menu-wrapper justify-content-between">
                                <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                                <div class="logo">
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('logo.png') }}" alt="logo" height="50" /></a>
                                    <div class="menu-toggler">
                                        <i class="la la-bars"></i>
                                        <i class="la la-times"></i>
                                    </div>
                                    <!-- end menu-toggler -->
                                </div>
                                <!-- end logo -->
                                <div class="main-menu-content pe-0 ms-0">
                                    <nav>
                                        <ul>
                                            <li>
                                                <a href="{{ route('homepage') }}">Home</i></a>
                                            </li>
                                            <li>
                                                <a href="{{ route('our.packages') }}">Packages</i></a>
                                            </li>
                                            <li>
                                                <a href="{{ route('popular.destinations') }}">Destinations</i></a>
                                            </li>
                                            <li>
                                                <a href="{{ route('about.us') }}">About us</i></a>
                                            </li>
                                            <li>
                                                <a href="{{ route('contact.us') }}">Contact us</i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- end main-menu-content -->
                                <div class="nav-btn d-none">
                                    <a href="#" class="theme-btn">Become Local Expert</a>
                                </div>
                                <!-- end nav-btn -->
                            </div>
                            <!-- end menu-wrapper -->
                        </div>
                        <!-- end col-lg-12 -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container-fluid -->
            </div>
            <!-- end header-menu-wrapper -->
        </header>
        <!-- END HEADER AREA -->
    @endif
    <div class="">
        {{ $slot }}
    </div>
    <!-- start back-to-top -->
    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->
    <!-- end modal-shared -->
    <div class="modal-popup">
        <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title title" id="exampleModalLongTitle">
                                Sign Up
                            </h5>
                            <p class="font-size-14">Hello! Welcome Create a New Account</p>
                        </div>
                        <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form-action">
                            <form method="post">
                                <div class="input-box">
                                    <label class="label-text">Username</label>
                                    <div class="form-group">
                                        <span class="la la-user form-icon"></span>
                                        <input class="form-control" type="text" name="text"
                                            placeholder="Type your username" />
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">Email Address</label>
                                    <div class="form-group">
                                        <span class="la la-envelope form-icon"></span>
                                        <input class="form-control" type="text" name="text"
                                            placeholder="Type your email" />
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">Password</label>
                                    <div class="form-group">
                                        <span class="la la-lock form-icon"></span>
                                        <input class="form-control" type="text" name="text"
                                            placeholder="Type password" />
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">Repeat Password</label>
                                    <div class="form-group">
                                        <span class="la la-lock form-icon"></span>
                                        <input class="form-control" type="text" name="text"
                                            placeholder="Type again password" />
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="btn-box pt-3 pb-4">
                                    <button type="button" class="theme-btn w-100">
                                        Register Account
                                    </button>
                                </div>
                                <div class="action-box text-center">
                                    <p class="font-size-14">Or Sign up Using</p>
                                    <ul class="social-profile py-3">
                                        <li>
                                            <a href="#" class="bg-5 text-white"><i
                                                    class="lab la-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="bg-6 text-white"><i
                                                    class="lab la-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="bg-7 text-white"><i
                                                    class="lab la-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="bg-5 text-white"><i
                                                    class="lab la-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                        <!-- end contact-form-action -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal-popup -->

    <!-- end modal-shared -->
    <div class="modal-popup">
        <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title title" id="exampleModalLongTitle2">
                                Login
                            </h5>
                            <p class="font-size-14">Hello! Welcome to your account</p>
                        </div>
                        <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form-action">
                            <form method="post">
                                <div class="input-box">
                                    <label class="label-text">Username</label>
                                    <div class="form-group">
                                        <span class="la la-user form-icon"></span>
                                        <input class="form-control" type="text" name="text"
                                            placeholder="Type your username" />
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">Password</label>
                                    <div class="form-group mb-2">
                                        <span class="la la-lock form-icon"></span>
                                        <input class="form-control" type="text" name="text"
                                            placeholder="Type your password" />
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="custom-checkbox mb-0">
                                            <input type="checkbox" class="form-check-input" id="rememberchb" />
                                            <label for="rememberchb">Remember me</label>
                                        </div>
                                        <p class="forgot-password">
                                            <a href="#">Forgot Password?</a>
                                        </p>
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="btn-box pt-3 pb-4">
                                    <button type="button" class="theme-btn w-100">
                                        Login Account
                                    </button>
                                </div>
                                <div class="action-box text-center">
                                    <p class="font-size-14">Or Login Using</p>
                                    <ul class="social-profile py-3">
                                        <li>
                                            <a href="#" class="bg-5 text-white"><i
                                                    class="lab la-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="bg-6 text-white"><i
                                                    class="lab la-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="bg-7 text-white"><i
                                                    class="lab la-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="bg-5 text-white"><i
                                                    class="lab la-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                        <!-- end contact-form-action -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal-popup -->

    @livewireScripts
    <!-- Template JS Files -->

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>

    {{-- <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countTo.min.js') }}"></script>
    <script src="{{ asset('assets/js/animated-headline.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ripples-min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
