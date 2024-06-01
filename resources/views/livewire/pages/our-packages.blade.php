<div>
    <section class="breadcrumb-area bread-bg-3">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Our Packages</h2>
                            </div>
                        </div>
                        <!-- end breadcrumb-content -->
                    </div>
                    <!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-end">
                            <ul class="list-items">
                                <li><a href="{{ route('homepage') }}">Home</a></li>
                                <li>Our Packages</li>
                            </ul>
                        </div>
                        <!-- end breadcrumb-list -->
                    </div>
                    <!-- end col-lg-6 -->
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

    <section class="card-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-wrap margin-bottom-30px">
                        <div class="filter-top d-flex align-items-center justify-content-between pb-4">
                            <div>
                                <h3 class="title font-size-24">24 Packages found</h3>
                                <p class="font-size-14 line-height-20 pt-1">
                                    Book with confidence - We have plenty of flexible travel options to choose from.
                                </p>
                            </div>
                            <div class="layout-view d-flex align-items-center d-none">
                                <a href="{{ route('package.detail', ['package' => 'package']) }}"
                                    data-bs-toggle="tooltip" data-placement="top" class="active" aria-label="Grid View"
                                    data-bs-original-title="Grid View"><i class="la la-th-large"></i></a>
                                <a href="cruises-list.html" data-bs-toggle="tooltip" data-placement="top"
                                    aria-label="List View" data-bs-original-title="List View"><i
                                        class="la la-th-list"></i></a>
                            </div>
                        </div>
                        <!-- end filter-top -->
                    </div>
                    <!-- end filter-wrap -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-4 responsive-column">
                    <div class="card-item cruise--card">
                        <div class="card-img">
                            <a href="{{ route('package.detail', ['package' => 'package']) }}" class="d-block">
                                <img src="{{ asset('assets/images/cruise-img6.jpg') }}" alt="cruise-img">
                                <span class="badge">Bestseller</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('assets/images/royal-caribbean.png') }}" alt=""
                                class="cruise-logo d-none">
                            <h3 class="card-title">
                                <a href="{{ route('package.detail', ['package' => 'package']) }}">7 Nights Caribbean
                                    Southern Cruise</a>
                            </h3>
                            <p class="card-meta">Departing San Juan</p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Very good</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$399.00</span>
                                </p>
                                <a href="{{ route('package.detail', ['package' => 'package']) }}" class="btn-text">View
                                    <i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item cruise--card">
                        <div class="card-img">
                            <a href="{{ route('package.detail', ['package' => 'package']) }}" class="d-block">
                                <img src="{{ asset('assets/images/cruise-img7.jpg') }}" alt="cruise-img">
                            </a>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('assets/images/msc.png') }}" alt="" class="cruise-logo d-none">
                            <h3 class="card-title">
                                <a href="{{ route('package.detail', ['package' => 'package']) }}">5 Nights Bermuda
                                    Cruise</a>
                            </h3>
                            <p class="card-meta">Departing Baltimore</p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Amazing</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$379.00</span>
                                </p>
                                <a href="{{ route('package.detail', ['package' => 'package']) }}" class="btn-text">View
                                    <i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item cruise--card">
                        <div class="card-img">
                            <a href="{{ route('package.detail', ['package' => 'package']) }}" class="d-block">
                                <img src="{{ asset('assets/images/cruise-img8.jpg') }}" alt="cruise-img">
                                <span class="badge">Featured</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('assets/images/stenaline.jpg') }}" alt=""
                                class="cruise-logo d-none">
                            <h3 class="card-title">
                                <a href="{{ route('package.detail', ['package' => 'package']) }}">11 Night Caribbean
                                    Cruise</a>
                            </h3>
                            <p class="card-meta">Departing Miami</p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Supperb</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$599.00</span>
                                </p>
                                <a href="{{ route('package.detail', ['package' => 'package']) }}"
                                    class="btn-text">View
                                    <i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item cruise--card">
                        <div class="card-img">
                            <a href="{{ route('package.detail', ['package' => 'package']) }}" class="d-block">
                                <img src="{{ asset('assets/images/cruise-img9.jpg') }}" alt="cruise-img">
                            </a>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('assets/images/carnival.png') }}" alt=""
                                class="cruise-logo d-none">
                            <h3 class="card-title">
                                <a href="{{ route('package.detail', ['package' => 'package']) }}">4 Nights Baja Mexico
                                    Cruise</a>
                            </h3>
                            <p class="card-meta">Departing Los Angeles</p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$108.00</span>
                                </p>
                                <a href="{{ route('package.detail', ['package' => 'package']) }}"
                                    class="btn-text">View
                                    <i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item cruise--card">
                        <div class="card-img">
                            <a href="{{ route('package.detail', ['package' => 'package']) }}" class="d-block">
                                <img src="{{ asset('assets/images/cruise-img7.jpg') }}" alt="cruise-img">
                                <span class="badge">Bestseller</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('assets/images/msc.png') }}" alt=""
                                class="cruise-logo d-none">
                            <h3 class="card-title">
                                <a href="{{ route('package.detail', ['package' => 'package']) }}">5 Nights Bermuda
                                    Cruise</a>
                            </h3>
                            <p class="card-meta">Departing Baltimore</p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Amazing</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$379.00</span>
                                </p>
                                <a href="{{ route('package.detail', ['package' => 'package']) }}"
                                    class="btn-text">View
                                    <i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item cruise--card">
                        <div class="card-img">
                            <a href="{{ route('package.detail', ['package' => 'package']) }}" class="d-block">
                                <img src="{{ asset('assets/images/cruise-img7.jpg') }}" alt="cruise-img">
                            </a>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('assets/images/msc.png') }}" alt=""
                                class="cruise-logo d-none">
                            <h3 class="card-title">
                                <a href="{{ route('package.detail', ['package' => 'package']) }}">7 - Night Eastern
                                    Caribbean Cruise</a>
                            </h3>
                            <p class="card-meta">Departing Baltimore</p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Amazing</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$379.00</span>
                                </p>
                                <a href="{{ route('package.detail', ['package' => 'package']) }}"
                                    class="btn-text">View
                                    <i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="btn-box mt-3 text-center">
                        <button type="button" class="theme-btn">
                            <i class="la la-refresh me-1"></i>Load More
                        </button>
                        <p class="font-size-13 pt-2">Showing 1 - 6 of 24 Cruises</p>
                    </div>
                    <!-- end btn-box -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
</div>
