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
                                <h3 class="title font-size-24">{{ count($packages) }} Packages found</h3>
                                <p class="font-size-14 line-height-20 pt-1">
                                    Book with confidence - We have plenty of flexible travel options to choose from.
                                </p>
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
                @if (isset($packages) && count($packages) > 0)
                    @foreach ($packages as $package)
                        <div class="col-lg-4 responsive-column">
                            <div class="card-item cruise--card">
                                <div class="card-img">
                                    <a href="{{ route('package.detail', ['package' => $package->slug]) }}"
                                        class="d-block">
                                        <img src="{{ asset('storage/' . $package->featured_image) }}" alt="cruise-img">
                                        <span class="badge">Featured</span>
                                    </a>
                                </div>
                                <div class="card-body px-2">
                                    <img src="{{ asset('storage/' . $package->featured_image) }}" alt=""
                                        class="cruise-logo d-none">
                                    <h3 class="card-title">
                                        <a href="{{ route('package.detail', ['package' => $package->slug]) }}">
                                            {{ $package->package_name }}
                                        </a>
                                    </h3>
                                    <p class="card-meta">{{ $package->location }}</p>
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
                                        <a href="{{ route('package.detail', ['package' => $package->slug]) }}"
                                            class="btn-text">View
                                            <i class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-item -->
                        </div>
                        <!-- end col-lg-4 -->
                    @endforeach
                @endif
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="btn-box mt-3 text-center">
                        <button type="button" class="theme-btn" wire:loading.attr='disabled' wire:click='loadMore'>
                            <i class="la la-refresh me-1"></i>Load More
                        </button>
                        <p class="font-size-13 pt-2">Showing {{ $packages->count() }} - {{ $packages->total() }} of
                            {{ $packages->total() }}
                            Packages</p>
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
