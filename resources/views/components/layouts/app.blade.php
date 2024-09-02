<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? config('app.name') }} {{ ' - ' . config('app.name') }}</title>
    <meta name="description"
        content="Discover unforgettable safari adventures in East Africa with Gentriiq Safaris, Kenya's fastest-growing safari company. Experience the best wildlife and scenic tours with our expert guides.">
    <meta name="keywords"
        content="Gentriiq Safaris, safari, Kenya safari, East Africa safari, wildlife tours, safari adventures, best safari company, safari industry leader,affordable kenya safari packages, kenya safaris, kenya safari tours from nairobi, kenya safari all inclusive packages, africa kenya safaris reviews, kenya safari packages prices, kenya wildlife safari packages, kenya tours">
    <meta name="author" content="Dennis Kipchumba - Techworld">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://gentriiqsafaris.co.ke/">
    <meta property="og:title"
        content="{{ $title ?? config('app.name') }} {{ config('app.name') }} - Leading Safari Company in East Africa">
    <meta property="og:description"
        content="Discover unforgettable safari adventures in East Africa with Gentriiq Safaris, Kenya's fastest-growing safari company. Experience the best wildlife and scenic tours with our expert guides.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://gentriiqsafaris.co.ke/">
    <meta property="og:image" content="{{ asset('logo.png') }}">
    <meta property="og:site_name" content="Gentriiq Safaris">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Gentriiq Safaris - Leading Safaris Company in East Africa">
    <meta name="twitter:description"
        content="Discover unforgettable safari adventures in East Africa with Gentriiq Safaris, Kenya's fastest-growing safari company. Experience the best wildlife and scenic tours with our expert guides.">
    <meta name="twitter:image" content="https://gentriiqsafaris.co.ke/images/twitter-image.jpg">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

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
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.css') }}" /> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/animated-headline.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
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
        <header class="header-area shadow mb-2">
            <div class="header-top-bar padding-right-100px padding-left-100px">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="header-top-content">
                                <div class="header-left">
                                    <ul class="list-items">
                                        <li>
                                            <a href="#"><i class="la la-phone me-1"></i>+254 717 838 061</a>
                                        </li>
                                        <li>
                                            <a href="#"><i
                                                    class="la la-envelope me-1"></i>gentriiqtours@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header-top-content">
                                <div class="header-right header--right d-flex align-items-center justify-content-end">
                                    <div class="header-right-action">
                                        @guest
                                            <a href="#" class="theme-btn theme-btn-small theme-btn-transparent me-1"
                                                data-bs-toggle="modal" data-bs-target="#signupPopupForm">Sign Up</a>
                                            <a href="#" class="theme-btn theme-btn-small" data-bs-toggle="modal"
                                                data-bs-target="#loginPopupForm">Login</a>
                                        @endguest
                                        @auth
                                            <a href="{{ route('home') }}" class="theme-btn theme-btn-small">Dashboard</a>
                                        @endauth
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
                                    <a href="{{ route('homepage') }}">
                                        <img src="{{ asset('logo.png') }}" alt="logo" height="50"></a>
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
                                                <a href="{{ route('homepage') }}">Home</a>
                                            </li>
                                            @guest
                                                <li>
                                                    <a href="{{ route('our.packages') }}">Packages</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('popular.destinations') }}">Destinations</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('about.us') }}">About us</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('our.blog') }}">Blogs</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('contact.us') }}">Contact us</a>
                                                </li>
                                            @endguest

                                            @role('admin')
                                                <li>
                                                    <a href="{{ route('admin.packages') }}">Packages</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('admin.destinations') }}">Destinations</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('admin.blog.posts') }}">Blogs</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('bookings') }}">Bookings</a>
                                                </li>
                                                <div class="btn-group">
                                                    <button class="btn btn-secondary dropdown-toggle rounded-1"
                                                        type="button" id="accountInfo" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        {{ Auth::user()->name }}
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="accountInfo">
                                                        <a class="dropdown-item bg-transparent"
                                                            href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();document.getElementById('logoutForm').submit();">Logout</a>
                                                    </div>
                                                    <form action="{{ route('logout') }}" class="d-none" id="logoutForm"
                                                        method="POST">
                                                        @csrf
                                                    </form>
                                                </div>
                                            @endrole
                                        </ul>
                                    </nav>
                                </div>
                                <!-- end main-menu-content -->
                                <div class="nav-btn d-none">
                                    <a href="become-local-expert.html" class="theme-btn">Become Local Expert</a>
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
        </header>
    @endif

    <div class="">
        <div class="container-fluid">
            <div class="offcanvas offcanvas-start" tabindex="-1" id="adminSideMenu"
                aria-labelledby="adminSideMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="adminSideMenuLabel">
                        Offcanvas
                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="{{ route('admin.homepage') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.destinations') }}">Destinations</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{ $slot }}
    </div>
    <div class="container">
        <footer class="py-3 my-4">
            <h6 class="text-center">Quick links</h6>
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="{{ route('homepage') }}" class="nav-link px-2 text-muted">Home</a>
                </li>
                <li class="nav-item"><a href="{{ route('our.packages') }}"
                        class="nav-link px-2 text-muted">Packages</a></li>
                <li class="nav-item"><a href="{{ route('popular.destinations') }}"
                        class="nav-link px-2 text-muted">Destinations</a></li>
                <li class="nav-item"><a href="{{ route('contact.us') }}" class="nav-link px-2 text-muted">Contact
                        us</a></li>
                <li class="nav-item"><a href="{{ route('about.us') }}" class="nav-link px-2 text-muted">About us</a>
                </li>
            </ul>
            <p class="text-center text-muted">© {{ date('Y') }} {{ config('app.name') }} - Designed by <a
                    href="https://techworld.co.ke" target="_blank">Techworld</a></p>
        </footer>
    </div>
    <!-- start back-to-top -->
    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
    <div id="whatsapp" class="fixed-bottom p-2">
        <div class=" align-items-center mb-4">
            <a href="https://wa.me/254717838061?text=Hello%2C%20I%27m%20interested%20in%20learning%20more%20about%20Gentriiq%20Safaris%20%26%20Tours.%20Could%20you%20please%20provide%20me%20with%20more%20details%3F"
                target="_blank">
                <img src="{{ asset('assets/images/whatsapp.svg') }}" alt="WhatsApp" style="height: 40px">
            </a>
            <span class="text-success">Chat with us</span>
        </div>
    </div>

    <!-- end back-to-top -->
    <!-- end modal-shared -->
    <div class="modal-popup">
        <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
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
                                @csrf
                                <div class="input-box">
                                    <label class="label-text">User name</label>
                                    <div class="form-group">
                                        <span class="la la-user form-icon"></span>
                                        <input class="form-control" type="text" name="text"
                                            placeholder="Type your name" />
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
                                    <button type="button" class="theme-btn w-100" id="registerAccount">
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
                            <form method="post" action="{{ route('login') }}">
                                @csrf
                                <div class="input-box">
                                    <label class="label-text">Username</label>
                                    <div class="form-group">
                                        <span class="la la-user form-icon"></span>
                                        <input class="form-control" type="email" name="email"
                                            placeholder="Type your username" />
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">Password</label>
                                    <div class="form-group mb-2">
                                        <span class="la la-lock form-icon"></span>
                                        <input class="form-control" type="password" name="password"
                                            placeholder="Type your password" />
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="custom-checkbox mb-0">
                                            <input type="checkbox" class="form-check-input" id="rememberchb" />
                                            <label for="rememberchb">Remember me</label>
                                        </div>
                                        <p class="forgot-password">
                                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                                        </p>
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="btn-box pt-3 pb-4">
                                    <button type="submit" class="theme-btn w-100">
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
    {{-- <script src="{{ asset('assets/js/moment.min.js') }}"></script> --}}

    {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countTo.min.js') }}"></script>
    <script src="{{ asset('assets/js/animated-headline.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ripples-min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

    <script>
        $(function() {
            $('input[name="daterangepicker"]').daterangepicker({
                opens: 'left'
            }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                    .format('YYYY-MM-DD'));
            });

            $('#myTable').DataTable();
        });

        let registerAccount = document.getElementById('registerAccount');
        if (registerAccount) {
            registerAccount.addEventListener('click', function(event) {
                event.preventDefault();
                alert('Registering an account will be available soon.');
            });
        }
    </script>
</body>

</html>
