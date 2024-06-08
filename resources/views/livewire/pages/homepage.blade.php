<div>
    <!-- START HERO-WRAPPER AREA-->
    <section class="hero-wrapper hero-wrapper3">
        <div class="hero-box pb-0 hero-bg-3 ripple-bg bg-fixed">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        <div class="hero-content pb-5 hero-content-3 text-center mb-5">
                            <div class="section-heading">
                                <h2 class="sec__title">
                                    Discover the World with <br> Our Amazing Tours
                                </h2>
                                <p class="sec__desc pt-1">
                                    Be a traveller, not a tourist
                                </p>
                            </div>
                        </div>
                        <!-- end hero-content -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <svg class="hero-svg" viewBox="0 0 500 150" preserveAspectRatio="none">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"></path>
            </svg>
        </div>
    </section>
    <!-- end hero-wrapper -->
    <!-- END HERO-WRAPPER AREA -->


    <!-- ================================
    START DESTINATION AREA
================================= -->
    <section class="destination-area padding-top-130px padding-bottom-80px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2 class="sec__title">Popular Destinations</h2>
                        <p class="sec__desc pt-3">
                            Explore some of the best tips from around the city from our partners and friends.
                        </p>
                    </div>

                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-8 -->
                <div class="col-lg-4">
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
                                    <a href="{{ route('destination.detail', ['slug' => 'mt-kenya']) }}">Diani Beach</a>
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

    <!-- ================================
    START INFO AREA
================================= -->
    <section class="info-area padding-bottom-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 responsive-column">
                    <div class="icon-box icon-layout-3 d-flex">
                        <div class="info-icon flex-shrink-0">
                            <i class="la la-file-text"></i>
                        </div>
                        <!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">2,000+ Local Guides</h4>
                            <p class="info__desc">
                                Discover the best local guides who will make your travel and tours unforgettable.
                            </p>
                            </p>
                        </div>
                        <!-- end info-content -->
                    </div>
                    <!-- end icon-box -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="icon-box icon-layout-3 d-flex">
                        <div class="info-icon flex-shrink-0">
                            <i class="la la-bullhorn"></i>
                        </div>
                        <!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Handcrafted Experiences</h4>
                            <p class="info__desc">
                            <p class="info__desc">
                                We offer the best handcrafted experiences that will make your travel unforgettable.
                            </p>
                            </p>
                        </div>
                        <!-- end info-content -->
                    </div>
                    <!-- end icon-box -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="icon-box icon-layout-3 d-flex">
                        <div class="info-icon flex-shrink-0">
                            <i class="la la-users"></i>
                        </div>
                        <!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">95% Happy Travelers</h4>
                            <p class="info__desc">
                                Our travelers are happy with our services and rated us with 5-star reviews.
                            </p>
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
    START TRENDING AREA
================================= -->
    <section class="trending-area position-relative section-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">
                            Our Popular Packages
                        </h2>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-12">
                    <div class="trending-carousel carousel-action">
                        @if ($packages && count($packages) > 0)
                            <div class="card-item trending-card mb-0">
                                <div class="card-img">
                                    <a href="{{ route('package.detail', ['package' => $packages[0]->slug]) }}"
                                        class="d-block">
                                        <img src="{{ asset('storage/' . $packages[0]->featured_image) }}"
                                            alt="Destination-img" />
                                    </a>
                                    <span class="badge d-none">Featured</span>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <a href="{{ route('package.detail', ['package' => $packages[0]->slug]) }}">
                                            {{ $packages[0]->package_name }}
                                        </a>
                                    </h3>
                                    <p class="card-meta">{{ $packages[0]->location }}</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__num">From Ksh.
                                                {{ number_format($packages[0]->price) }}</span>
                                        </p>
                                        <a href="{{ route('package.detail', ['package' => $packages[0]->slug]) }}"
                                            class="btn-text">View details<i class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!-- end card-item -->

                        @if ($packages && count($packages) > 1)
                            <div class="card-item trending-card mb-0">
                                <div class="card-img">
                                    <a href="{{ route('package.detail', ['package' => $packages[1]->slug]) }}"
                                        class="d-block">
                                        <img src="{{ asset('storage/' . $packages[1]->featured_image) }}"
                                            alt="Destination-img" />
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <a href="{{ route('package.detail', ['package' => $packages[1]->slug]) }}">
                                            {{ $packages[1]->package_name }}
                                        </a>
                                    </h3>
                                    <p class="card-meta">{{ $packages[1]->location }}</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__num">From Ksh.
                                                {{ number_format($packages[1]->price) }}</span>
                                        </p>
                                        <a href="{{ route('package.detail', ['package' => $packages[1]->slug]) }}"
                                            class="btn-text">View details<i class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!-- end card-item -->

                        @if ($packages && count($packages) > 2)
                            <div class="card-item trending-card mb-0">
                                <div class="card-img">
                                    <a href="{{ route('package.detail', ['package' => $packages[2]->slug]) }}"
                                        class="d-block">
                                        <img src="{{ asset('storage/' . $packages[2]->featured_image) }}"
                                            alt="Destination-img" />
                                    </a>
                                    <span class="badge">Featured</span>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <a href="{{ route('package.detail', ['package' => $packages[2]->slug]) }}">
                                            {{ $packages[2]->package_name }}
                                        </a>
                                    </h3>
                                    <p class="card-meta">{{ $packages[2]->location }}</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__num">From Ksh.
                                                {{ number_format($packages[2]->price) }}</span>
                                        </p>
                                        <a href="{{ route('package.detail', ['package' => $packages[2]->slug]) }}"
                                            class="btn-text">View details<i class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!-- end card-item -->
                        @if ($packages && count($packages) > 3)
                            <div class="card-item trending-card mb-0">
                                <div class="card-img">
                                    <a href="{{ route('package.detail', ['package' => $packages[3]->slug]) }}"
                                        class="d-block">
                                        <img src="{{ asset('storage/' . $packages[3]->featured_image) }}"
                                            alt="Destination-img" />
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <a href="{{ route('package.detail', ['package' => $packages[3]->slug]) }}">
                                            {{ $packages[3]->package_name }}
                                        </a>
                                    </h3>
                                    <p class="card-meta">{{ $packages[3]->location }}</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__num">From Ksh.
                                                {{ number_format($packages[3]->price) }}</span>
                                        </p>
                                        <a href="{{ route('package.detail', ['package' => $packages[3]->slug]) }}"
                                            class="btn-text">View details<i class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-item -->
                        @endif

                        @if ($packages && count($packages) > 4)
                            <div class="card-item trending-card mb-0">
                                <div class="card-img">
                                    <a href="{{ route('package.detail', ['package' => $packages[4]->slug]) }}"
                                        class="d-block">
                                        <img src="{{ asset('storage/' . $packages[4]->featured_image) }}"
                                            alt="Destination-img" />
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <a href="{{ route('package.detail', ['package' => $packages[4]->slug]) }}">
                                            {{ $packages[4]->package_name }}
                                        </a>
                                    </h3>
                                    <p class="card-meta">{{ $packages[4]->location }}</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__num">From Ksh.
                                                {{ number_format($packages[4]->price) }}</span>
                                        </p>
                                        <a href="{{ route('package.detail', ['package' => $packages[4]->slug]) }}"
                                            class="btn-text">View details<i class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!-- end card-item -->

                        @if ($packages && count($packages) > 5)
                            <div class="card-item trending-card mb-0">
                                <div class="card-img">
                                    <a href="{{ route('package.detail', ['package' => $packages[5]->slug]) }}"
                                        class="d-block">
                                        <img src="{{ asset('storage/' . $packages[5]->featured_image) }}"
                                            alt="Destination-img" />
                                    </a>
                                    <span class="badge d-none">Featured</span>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <a href="{{ route('package.detail', ['package' => $packages[5]->slug]) }}">
                                            {{ $packages[5]->package_name }}
                                        </a>
                                    </h3>
                                    <p class="card-meta">{{ $packages[5]->location }}</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__num">From Ksh.
                                                {{ number_format($packages[5]->price) }}</span>
                                        </p>
                                        <a href="{{ route('package.detail', ['package' => $packages[5]->slug]) }}"
                                            class="btn-text">View details<i class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!-- end card-item -->
                    </div>
                    <!-- end car-carousel -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
            <path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path>
        </svg>
    </section>
    <!-- end trending-area -->
    <!-- ================================
    END TRENDING AREA
================================= -->

    <!-- ================================
       START TESTIMONIAL AREA
================================= -->
    <section class="testimonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center mb-0">
                        <h2 class="sec__title">Our Happy Travelers</h2>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row  -->
            <div class="row padding-top-50px">
                <div class="col-lg-12">
                    <div class="testimonial-carousel-2 carousel-action">
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                    Excepteur sint occaecat cupidatat non proident sunt in culpa
                                    officia deserunt mollit anim laborum sint occaecat cupidatat
                                    non proident.
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="{{ asset('assets/images/team8.jpg') }}" alt="testimonial image" />
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Leroy Bell</h4>
                                    <span class="author__meta">United States</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                    Excepteur sint occaecat cupidatat non proident sunt in culpa
                                    officia deserunt mollit anim laborum sint occaecat cupidatat
                                    non proident.
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="{{ asset('assets/images/team9.jpg') }}" alt="testimonial image" />
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Richard Pam</h4>
                                    <span class="author__meta">Canada</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                    Excepteur sint occaecat cupidatat non proident sunt in culpa
                                    officia deserunt mollit anim laborum sint occaecat cupidatat
                                    non proident.
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="{{ asset('assets/images/team10.jpg') }}" alt="testimonial image" />
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Luke Jacobs</h4>
                                    <span class="author__meta">Australia</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                    Excepteur sint occaecat cupidatat non proident sunt in culpa
                                    officia deserunt mollit anim laborum sint occaecat cupidatat
                                    non proident.
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="{{ asset('assets/images/team8.jpg') }}" alt="testimonial image" />
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Chulbul Panday</h4>
                                    <span class="author__meta">Italy</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end testimonial-card -->
                    </div>
                    <!-- end testimonial-carousel -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end testimonial-area -->
    <!-- ================================
       START TESTIMONIAL AREA
================================= -->

    <div class="section-block"></div>

    <!-- ================================
       START BLOG AREA
================================= -->
    <section class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">Our Latest News</h2>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-4 responsive-column">
                    <div class="card-item blog-card blog-card-layout-2">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/blog-img.jpg') }}" alt="blog-img" />
                            <div class="post-format icon-element d-none">
                                <i class="la la-photo"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="post-categories">
                                <a href="#" class="badge">Travel</a>
                                <a href="#" class="badge">lifestyle</a>
                            </div>
                            <h3 class="card-title line-height-26">
                                <a href="{{ route('blog.detail', ['slug' => 'blog-detail']) }}">When Traveling Avoid
                                    Expensive Hotels & Resorts</a>
                            </h3>
                            <p class="card-meta">
                                <span class="post__date"> 1 January, 2020</span>
                                <span class="post-dot"></span>
                                <span class="post__time">5 Mins read</span>
                            </p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="{{ asset('assets/images/small-team1.jpg') }}"
                                        alt="testimonial image" />
                                </div>
                                <div class="author-bio">
                                    <a href="#" class="author__title">Leroy Bell</a>
                                </div>
                            </div>
                            <div class="post-share">
                                <ul>
                                    <li>
                                        <i class="la la-share icon-element"></i>
                                        <ul class="post-share-dropdown d-flex align-items-center">
                                            <li>
                                                <a href="#"><i class="lab la-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="lab la-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="lab la-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item blog-card blog-card-layout-2">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/blog-img2.jpg') }}" alt="blog-img" />
                            <div class="post-format icon-element d-none">
                                <i class="la la-play"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="post-categories">
                                <a href="#" class="badge">Video</a>
                            </div>
                            <h3 class="card-title line-height-26">
                                <a href="{{ route('blog.detail', ['slug' => 'blog-detail']) }}">My Best Travel Tips:
                                    The
                                    Ultimate Travel Guide</a>
                            </h3>
                            <p class="card-meta">
                                <span class="post__date"> 1 February, 2020</span>
                                <span class="post-dot"></span>
                                <span class="post__time">4 Mins read</span>
                            </p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="{{ asset('assets/images/small-team2.jpg') }}"
                                        alt="testimonial image" />
                                </div>
                                <div class="author-bio">
                                    <a href="#" class="author__title">Phillip Hunt</a>
                                </div>
                            </div>
                            <div class="post-share">
                                <ul>
                                    <li>
                                        <i class="la la-share icon-element"></i>
                                        <ul class="post-share-dropdown d-flex align-items-center">
                                            <li>
                                                <a href="#"><i class="lab la-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="lab la-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="lab la-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item blog-card blog-card-layout-2">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/blog-img3.jpg') }}" alt="blog-img" />
                            <div class="post-format icon-element d-none">
                                <i class="la la-music"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="post-categories">
                                <a href="#" class="badge">audio</a>
                            </div>
                            <h3 class="card-title line-height-26">
                                <a href="{{ route('blog.detail', ['slug' => 'blog-detail']) }}">Travel to Popular
                                    Sites &
                                    Don’t Rule Out Other Locations</a>
                            </h3>
                            <p class="card-meta">
                                <span class="post__date"> 1 March, 2020</span>
                                <span class="post-dot"></span>
                                <span class="post__time">3 Mins read</span>
                            </p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="{{ asset('assets/images/small-team3.jpg') }}"
                                        alt="testimonial image" />
                                </div>
                                <div class="author-bio">
                                    <a href="#" class="author__title">Luke Jacobs</a>
                                </div>
                            </div>
                            <div class="post-share">
                                <ul>
                                    <li>
                                        <i class="la la-share icon-element"></i>
                                        <ul class="post-share-dropdown d-flex align-items-center">
                                            <li>
                                                <a href="#"><i class="lab la-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="lab la-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="lab la-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
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
                    <div class="btn-box text-center pt-4">
                        <a href="{{ route('our.blog') }}" class="theme-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end blog-area -->
    <!-- ================================
       START BLOG AREA
================================= -->

    <!-- ================================
    START CTA AREA
================================= -->
    <section class="cta-area cta-bg bg-fixed section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="sec__title text-white font-size-50 line-height-60">
                            Relax with us. <br />We love Our Clients.
                        </h2>
                        <p class="sec__desc text-white pt-3">
                            We are here to make your travel experience as seamless as possible.
                        </p>
                    </div>
                    <!-- end section-heading -->
                    <div class="btn-box padding-top-35px">
                        <a href="{{ route('popular.destinations') }}" class="theme-btn border-0">Book now</a>
                    </div>
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end cta-area -->
    <!-- ================================
    END CTA AREA
================================= -->

    <!-- ================================
    START SUB AREA
================================= -->
    <section class="subscriber-area section-bg padding-top-70px padding-bottom-130px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-heading">
                        <p class="sec__desc pb-1">Get Updates & More</p>
                        <h2 class="sec__title font-size-30 mb-0">
                            Thoughtful thoughts to your inbox
                        </h2>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-7 -->
                <div class="col-lg-5">
                    <div class="subscriber-box">
                        <div class="contact-form-action">
                            <form action="#">
                                <div class="input-box">
                                    <label class="label-text">Enter email address</label>
                                    <div class="form-group mb-0">
                                        <span class="la la-envelope form-icon"></span>
                                        <input class="form-control" type="email" name="email"
                                            placeholder="Email address" />
                                        <button class="theme-btn theme-btn-small submit-btn" type="submit">
                                            Subscribe
                                        </button>
                                        <span class="font-size-14 pt-1 text-white-50"><i
                                                class="la la-lock me-1"></i>Don't worry your
                                            information is safe with us.</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-5 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end cta-area -->
    <!-- ================================
    END SUB AREA
================================= -->


</div>
