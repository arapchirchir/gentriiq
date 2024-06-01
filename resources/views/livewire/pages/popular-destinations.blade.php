<div>
    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title line-height-55 text-white">
                                    Let's Show the Beauty of Nature <br />
                                    Around us
                                </h2>
                                <p class="sec__desc pt-2 text-white">
                                </p>
                            </div>
                            <div class="btn-box pt-4">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#signupPopupForm"
                                    class="theme-btn border-0 d-none">Register Now</a>
                            </div>
                        </div>
                        <!-- end breadcrumb-content -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end breadcrumb-wrap -->
        <div class="bread-svg-box">
            <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 0 50 10 0 0 0 10 100 10"></polygon>
            </svg>
        </div>
        <!-- end bread-svg -->
    </section>
    <!-- end breadcrumb-area -->
    <!-- ================================
    END BREADCRUMB AREA
================================= -->
    <!-- ================================
    START INFO AREA
================================= -->
    <section class="info-area info-bg padding-top-100px padding-bottom-60px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">How {{ config('app.name') }} work?</h2>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-4 responsive-column">
                    <div class="icon-box icon-layout-3 d-flex">
                        <div class="info-icon flex-shrink-0">
                            <i class="la la-sign-in"></i>
                        </div>
                        <!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">View Destination</h4>
                            <p class="info__desc">
                                Choose the destination you want to visit and view the details
                            </p>
                            <span class="info__num">1</span>
                        </div>
                        <!-- end info-content -->
                    </div>
                    <!-- end icon-box -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="icon-box icon-layout-3 d-flex">
                        <div class="info-icon flex-shrink-0">
                            <i class="la la-gears"></i>
                        </div>
                        <!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Make a request</h4>
                            <p class="info__desc">
                                Make a request online or via call to the destination you have chosen
                            </p>
                            <span class="info__num">2</span>
                        </div>
                        <!-- end info-content -->
                    </div>
                    <!-- end icon-box -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="icon-box icon-layout-3 d-flex">
                        <div class="info-icon flex-shrink-0">
                            <i class="la la-money"></i>
                        </div>
                        <!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Explore natue</h4>
                            <p class="info__desc">
                                Explore the beauty of nature and enjoy the moment
                            </p>
                            <span class="info__num">3</span>
                        </div>
                        <!-- end info-content -->
                    </div>
                    <!-- end icon-box -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end info-area -->
    <!-- ================================
    END INFO AREA
================================= -->

    <!-- ================================
    START DESTINATION AREA
================================= -->
    <section class="destination-area padding-top-130px padding-bottom-80px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2 class="sec__title">Places to visit</h2>
                        <p class="sec__desc pt-3">Explore some of the best tips around from our partners
                            and
                            friends. Discover some of the most popular listings based on user reviews and
                            ratings.
                        </p>
                    </div>

                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-8 -->
                <div class="col-lg-4 d-none">
                    <div class="btn-box btn--box text-end">
                        <a href="{{ route('popular.destinations') }}" class="theme-btn">Discover More <i
                                class="la la-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-4 responsive-column">
                    <div class="card-item destination-card destination--card">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/destination-img2.jpg') }}" alt="destination-img" />
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="card-title">
                                    <a href="{{ route('destination.detail', ['slug' => 'mt-kenya']) }}">Amboseli
                                        National Park</a>
                                </h3>
                                <p class="card-meta">34 Activities</p>
                            </div>
                            <div>
                                <a href="{{ route('destination.detail', ['slug' => 'mt-kenya']) }}"
                                    class="theme-btn theme-btn-small border-0">Explore <i
                                        class="la la-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item destination-card destination--card">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/destination-img3.jpg') }}" alt="destination-img" />
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="card-title">
                                    <a href="{{ route('destination.detail', ['slug' => 'mt-kenya']) }}">Mt. Kenya</a>
                                </h3>
                                <p class="card-meta">13 Activities</p>
                            </div>
                            <div>
                                <a href="{{ route('destination.detail', ['slug' => 'mt-kenya']) }}"
                                    class="theme-btn theme-btn-small border-0">Explore <i
                                        class="la la-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item destination-card destination--card">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/destination-img4.jpg') }}" alt="destination-img" />
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="card-title">
                                    <a href="{{ route('destination.detail', ['slug' => 'mt-kenya']) }}">Lake
                                        Victoria</a>
                                </h3>
                                <p class="card-meta">44 Activities</p>
                            </div>
                            <div>
                                <a href="{{ route('destination.detail', ['slug' => 'mt-kenya']) }}"
                                    class="theme-btn theme-btn-small border-0">Explore <i
                                        class="la la-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item destination-card destination--card">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/destination-img5.jpg') }}" alt="destination-img" />
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="card-title">
                                    <a href="{{ route('destination.detail', ['slug' => 'mt-kenya']) }}">Lake
                                        Naivasha</a>
                                </h3>
                                <p class="card-meta">22 Activities</p>
                            </div>
                            <div>
                                <a href="{{ route('destination.detail', ['slug' => 'mt-kenya']) }}"
                                    class="theme-btn theme-btn-small border-0">Explore <i
                                        class="la la-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item destination-card destination--card">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/destination-img7.jpg') }}" alt="destination-img" />
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="card-title">
                                    <a href="{{ route('destination.detail', ['slug' => 'mt-kenya']) }}">Samburu
                                        National Reserve</a>
                                </h3>
                                <p class="card-meta">54 Activities</p>
                            </div>
                            <div>
                                <a href="{{ route('destination.detail', ['slug' => 'mt-kenya']) }}"
                                    class="theme-btn theme-btn-small border-0">Explore <i
                                        class="la la-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item destination-card destination--card">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/destination-img8.jpg') }}" alt="destination-img" />
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="card-title">
                                    <a href="{{ route('destination.detail', ['slug' => 'mt-kenya']) }}">Diani
                                        Beach</a>
                                </h3>
                                <p class="card-meta">55 Activities</p>
                            </div>
                            <div>
                                <a href="{{ route('destination.detail', ['slug' => 'mt-kenya']) }}"
                                    class="theme-btn theme-btn-small border-0">Explore <i
                                        class="la la-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end destination-area -->
    <!-- ================================
    END DESTINATION AREA
================================= -->

</div>
