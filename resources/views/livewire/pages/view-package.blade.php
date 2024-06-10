<div>
    <!-- ================================
    START BREADCRUMB TOP BAR
================================= -->
    <section class="breadcrumb-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-list breadcrumb-top-list">
                        <ul class="list-items bg-transparent radius-none p-0">
                            <li><a href="{{ route('homepage') }}">Home</a></li>
                            <li><a href="{{ route('our.packages') }}">Packages</a></li>
                            <li>{{ $selected_package->package_name }}</li>
                        </ul>
                    </div>
                    <!-- end breadcrumb-list -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end breadcrumb-top-bar -->
    <!-- ================================
    END BREADCRUMB TOP BAR
================================= -->

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area py-0"
        style="background-image: url('{{ asset('storage/' . $selected_package->featured_image) }}')">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-btn">
                            <div class="btn-box">
                                @if ($selected_package->video)
                                    <a class="theme-btn" data-fancybox="video"
                                        data-src="https://www.youtube.com/watch?v=0GZSfBuhf6Y" data-speed="700">
                                        <i class="la la-video-camera me-2"></i>Video
                                    </a>
                                @endif
                                @if (count(json_decode($selected_package->other_images)) > 0)
                                    <a class="theme-btn" data-fancybox="gallery"
                                        data-src="{{ asset('storage/' . $selected_package->featured_image) }}"
                                        data-caption="Featured image" data-speed="700">
                                        <i class="la la-image me-2"></i>Photos
                                    </a>
                                @endif
                            </div>

                            @if (count(json_decode($selected_package->other_images)) > 0)
                                @foreach (json_decode($selected_package->other_images) as $key => $image)
                                    <a class="d-none" data-fancybox="gallery"
                                        data-src="{{ asset('storage/' . $image) }}"
                                        data-caption="Selected image - {{ $key + 1 }}" data-speed="700"></a>
                                @endforeach
                            @endif
                        </div>
                        <!-- end breadcrumb-btn -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end breadcrumb-wrap -->
    </section>
    <!-- end breadcrumb-area -->
    <section class="tour-detail-area padding-bottom-90px">
        <div class="single-content-navbar-wrap menu section-bg d-none" id="single-content-navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content-nav" id="single-content-nav">
                            <ul>
                                <li>
                                    <a data-scroll="description" href="#description"
                                        class="scroll-link active">Description</a>
                                </li>
                                <li>
                                    <a data-scroll="itinerary" href="#itinerary" class="scroll-link">Itinerary</a>
                                </li>
                                <li>
                                    <a data-scroll="photo" href="#photo" class="scroll-link">Photo</a>
                                </li>
                                <li>
                                    <a data-scroll="faq" href="#faq" class="scroll-link">FAQ</a>
                                </li>
                                <li>
                                    <a data-scroll="reviews" href="#reviews" class="scroll-link">Reviews</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single-content-navbar-wrap -->
        <div class="single-content-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-content-wrap padding-top-60px">
                            <div id="description" class="page-scroll">
                                <div class="single-content-item pb-4">
                                    <h3 class="title font-size-26">
                                        {{ $selected_package->package_name }}
                                    </h3>
                                    <div class="d-flex flex-wrap align-items-center pt-2">
                                        <p class="me-2">{{ $selected_package->location }}</p>
                                        <p>
                                            <span class="badge text-bg-warning text-white font-size-16">4.6</span>
                                            <span>(4,209 Reviews)</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- end single-content-item -->
                                <div class="section-block"></div>
                                <div class="single-content-item py-4">
                                    <div class="row">
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                    <i class="la la-clock-o"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">
                                                        Duration
                                                    </h3>
                                                    <span class="font-size-13">{{ $selected_package->duration }}</span>
                                                </div>
                                            </div>
                                            <!-- end single-tour-feature -->
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                    <i class="la la-users"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">
                                                        Group Size
                                                    </h3>
                                                    <span class="font-size-13">Per person</span>
                                                </div>
                                            </div>
                                            <!-- end single-tour-feature -->
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                    <i class="la la-globe"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">
                                                        Tour Type
                                                    </h3>
                                                    <span class="font-size-13">Adventures Tour</span>
                                                </div>
                                            </div>
                                            <!-- end single-tour-feature -->
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column d-none">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                    <i class="la la-calendar"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">
                                                        Date
                                                    </h3>
                                                    <span class="font-size-13">Jan 19' - Dec 21'</span>
                                                </div>
                                            </div>
                                            <!-- end single-tour-feature -->
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column d-none">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                    <i class="la la-user"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">
                                                        Min Age
                                                    </h3>
                                                    <span class="font-size-13">10+</span>
                                                </div>
                                            </div>
                                            <!-- end single-tour-feature -->
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                    <i class="la la-plane"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">
                                                        Pickup From
                                                    </h3>
                                                    <span class="font-size-13">Airport</span>
                                                </div>
                                            </div>
                                            <!-- end single-tour-feature -->
                                        </div>
                                        <!-- end col-lg-4 -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end single-content-item -->
                                <div class="section-block"></div>
                                <div class="single-content-item padding-top-40px padding-bottom-40px">
                                    <h3 class="title font-size-20">Description</h3>
                                    <p class="py-3">
                                        {{ $selected_package->description }}
                                    </p>
                                    <p class="pb-4 d-none">
                                        Cum et probo menandri. Officiis consulatu pro et, ne sea
                                        sale invidunt, sed ut sint blandit efficiendi. Atomorum
                                        explicari eu qui, est enim quaerendum te. Quo harum viris
                                        id. Per ne quando dolore evertitur, pro ad cibo commune.
                                    </p>
                                    <h3 class="title font-size-15 font-weight-medium pb-3">
                                        Highlights
                                    </h3>
                                    <div class="row">
                                        <div class="col-lg-6 responsive-column">
                                            <ul class="list-items pb-3">
                                                <li>
                                                    <i class="la la-dot-circle text-color me-2"></i>Dolorem
                                                    mediocritatem
                                                </li>
                                                <li>
                                                    <i class="la la-dot-circle text-color me-2"></i>Mea
                                                    appareat
                                                </li>
                                                <li>
                                                    <i class="la la-dot-circle text-color me-2"></i>Prima causae
                                                </li>
                                                <li>
                                                    <i class="la la-dot-circle text-color me-2"></i>Singulis indoctum
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 responsive-column">
                                            <ul class="list-items pb-3">
                                                <li>
                                                    <i class="la la-dot-circle text-color me-2"></i>Timeam inimicus
                                                </li>
                                                <li>
                                                    <i class="la la-dot-circle text-color me-2"></i>Oportere democritum
                                                </li>
                                                <li>
                                                    <i class="la la-dot-circle text-color me-2"></i>Cetero inermis
                                                </li>
                                                <li>
                                                    <i class="la la-dot-circle text-color me-2"></i>Pertinacia eum
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row">
                                        <div class="col-lg-6 responsive-column">
                                            <h3 class="title font-size-15 font-weight-medium pb-3">
                                                Included
                                            </h3>
                                            <ul class="list-items">
                                                <li>
                                                    <i class="la la-check text-success me-2"></i>Airfare
                                                </li>
                                                <li>
                                                    <i class="la la-check text-success me-2"></i>Local
                                                    Transportation
                                                </li>
                                                <li>
                                                    <i class="la la-check text-success me-2"></i>Accommodation
                                                </li>
                                                <li>
                                                    <i class="la la-check text-success me-2"></i>Tour
                                                    Guide
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 responsive-column">
                                            <h3 class="title font-size-15 font-weight-medium pb-3">
                                                Not Included
                                            </h3>
                                            <ul class="list-items">
                                                <li>
                                                    <i class="la la-times text-danger me-2"></i>Entrance
                                                    Fees
                                                </li>
                                                <li>
                                                    <i class="la la-times text-danger me-2"></i>Guide
                                                    Gratuity
                                                </li>
                                                <li>
                                                    <i class="la la-times text-danger me-2"></i>Lunch
                                                </li>
                                                <li>
                                                    <i class="la la-times text-danger me-2"></i>Dinner
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end single-content-item -->
                                <div class="section-block"></div>
                            </div>
                            <!-- end description -->
                            <div id="itinerary" class="page-scroll d-none">
                                <div class="single-content-item padding-top-40px padding-bottom-40px">
                                    <h3 class="title font-size-20">Itinerary</h3>
                                    <div class="accordion accordion-item padding-top-30px" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="faqHeadingOne">
                                                <h2 class="mb-0">
                                                    <button
                                                        class="btn btn-link d-flex align-items-center justify-content-between font-size-16"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#faqCollapseOne" aria-expanded="true"
                                                        aria-controls="faqCollapseOne">
                                                        <span>Day 01 - Linfen – Historical place in
                                                            Beijing</span>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="faqCollapseOne" class="collapse show"
                                                aria-labelledby="faqHeadingOne" data-bs-parent="#accordionExample">
                                                <div class="card-body d-flex align-items-center">
                                                    <div class="flex-shrink-0 mt-2 me-4">
                                                        <img src="{{ asset('assets/images/small-img.jpg') }}"
                                                            alt="destination-img" />
                                                    </div>
                                                    <p>
                                                        Mea appareat omittantur eloquentiam ad, nam ei
                                                        quas oportere democritum. Prima causae admodum id
                                                        est, ei timeam inimicus sed. Sit an meis aliquam,
                                                        cetero inermis vel ut. An sit illum euismod
                                                        facilisis Nullam id dolor id nibh ultricies
                                                        vehicula ut id elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                        <div class="card">
                                            <div class="card-header" id="faqHeadingTwo">
                                                <h2 class="mb-0">
                                                    <button
                                                        class="btn btn-link d-flex align-items-center justify-content-between font-size-16"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#faqCollapseTwo" aria-expanded="true"
                                                        aria-controls="faqCollapseTwo">
                                                        <span>Day 02 - Beijing - Temple of Heaven</span>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="faqCollapseTwo" class="collapse" aria-labelledby="faqHeadingTwo"
                                                data-bs-parent="#accordionExample">
                                                <div class="card-body d-flex align-items-center">
                                                    <div class="flex-shrink-0 mt-2 me-4">
                                                        <img src="{{ asset('assets/images/small-img2.jpg') }}"
                                                            alt="destination-img" />
                                                    </div>
                                                    <p>
                                                        Mea appareat omittantur eloquentiam ad, nam ei
                                                        quas oportere democritum. Prima causae admodum id
                                                        est, ei timeam inimicus sed. Sit an meis aliquam,
                                                        cetero inermis vel ut. An sit illum euismod
                                                        facilisis Nullam id dolor id nibh ultricies
                                                        vehicula ut id elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                        <div class="card">
                                            <div class="card-header" id="faqHeadingThree">
                                                <h2 class="mb-0">
                                                    <button
                                                        class="btn btn-link d-flex align-items-center justify-content-between font-size-16"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#faqCollapseThree" aria-expanded="true"
                                                        aria-controls="faqCollapseThree">
                                                        <span>Day 03 - Jinan to New york</span>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="faqCollapseThree" class="collapse"
                                                aria-labelledby="faqHeadingThree" data-bs-parent="#accordionExample">
                                                <div class="card-body d-flex align-items-center">
                                                    <div class="flex-shrink-0 mt-2 me-4">
                                                        <img src="{{ asset('assets/images/small-img3.jpg') }}"
                                                            alt="destination-img" />
                                                    </div>
                                                    <p>
                                                        Mea appareat omittantur eloquentiam ad, nam ei
                                                        quas oportere democritum. Prima causae admodum id
                                                        est, ei timeam inimicus sed. Sit an meis aliquam,
                                                        cetero inermis vel ut. An sit illum euismod
                                                        facilisis Nullam id dolor id nibh ultricies
                                                        vehicula ut id elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                    </div>
                                </div>
                                <!-- end single-content-item -->
                                <div class="section-block"></div>
                            </div>
                            <!-- end itinerary -->
                            <div id="photo" class="page-scroll" wire:ignore>
                                <div class="single-content-item padding-top-40px padding-bottom-40px">
                                    <h3 class="title font-size-20">Photos</h3>
                                    <div class="gallery-carousel carousel-action padding-top-30px">
                                        @if (count(json_decode($selected_package->other_images)) > 0)
                                            @foreach (json_decode($selected_package->other_images) as $image)
                                                <div class="card-item mb-0">
                                                    <div class="card-img">
                                                        <img src="{{ asset('storage/' . $image) }}"
                                                            alt="Destination-img" />
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        <!-- end card-item -->
                                    </div>
                                    <!-- end gallery-carousel -->
                                </div>
                                <!-- end single-content-item -->
                                <div class="section-block"></div>
                            </div>
                            <!-- end photo -->
                            <div id="faq" class="page-scroll d-none">
                                <div class="single-content-item padding-top-40px padding-bottom-40px">
                                    <h3 class="title font-size-20">FAQ</h3>
                                    <div class="accordion accordion-item padding-top-30px" id="accordionExample2">
                                        <div class="card">
                                            <div class="card-header" id="faqHeadingFour">
                                                <h2 class="mb-0">
                                                    <button
                                                        class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#faqCollapseFour" aria-expanded="true"
                                                        aria-controls="faqCollapseFour">
                                                        <span class="ms-3">I'm a solo traveller, is there a single
                                                            supplement?</span>
                                                        <i class="la la-minus"></i>
                                                        <i class="la la-plus"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="faqCollapseFour" class="collapse show"
                                                aria-labelledby="faqHeadingFour" data-bs-parent="#accordionExample2">
                                                <div class="card-body d-flex">
                                                    <p>
                                                        Mea appareat omittantur eloquentiam ad, nam ei
                                                        quas oportere democritum. Prima causae admodum id
                                                        est, ei timeam inimicus sed. Sit an meis aliquam,
                                                        cetero inermis vel ut. An sit illum euismod
                                                        facilisis Nullam id dolor id nibh ultricies
                                                        vehicula ut id elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                        <div class="card">
                                            <div class="card-header" id="faqHeadingFive">
                                                <h2 class="mb-0">
                                                    <button
                                                        class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#faqCollapseFive" aria-expanded="false"
                                                        aria-controls="faqCollapseFive">
                                                        <span class="ms-3">Should I book pre/post tour
                                                            accommodation?</span>
                                                        <i class="la la-minus"></i>
                                                        <i class="la la-plus"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="faqCollapseFive" class="collapse"
                                                aria-labelledby="faqHeadingFive" data-bs-parent="#accordionExample2">
                                                <div class="card-body d-flex">
                                                    <p>
                                                        Mea appareat omittantur eloquentiam ad, nam ei
                                                        quas oportere democritum. Prima causae admodum id
                                                        est, ei timeam inimicus sed. Sit an meis aliquam,
                                                        cetero inermis vel ut. An sit illum euismod
                                                        facilisis Nullam id dolor id nibh ultricies
                                                        vehicula ut id elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                        <div class="card">
                                            <div class="card-header" id="faqHeadingSix">
                                                <h2 class="mb-0">
                                                    <button
                                                        class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#faqCollapseSix" aria-expanded="false"
                                                        aria-controls="faqCollapseSix">
                                                        <span class="ms-3">What is cancellation policy?</span>
                                                        <i class="la la-minus"></i>
                                                        <i class="la la-plus"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="faqCollapseSix" class="collapse" aria-labelledby="faqHeadingSix"
                                                data-bs-parent="#accordionExample2">
                                                <div class="card-body d-flex">
                                                    <p>
                                                        Mea appareat omittantur eloquentiam ad, nam ei
                                                        quas oportere democritum. Prima causae admodum id
                                                        est, ei timeam inimicus sed. Sit an meis aliquam,
                                                        cetero inermis vel ut. An sit illum euismod
                                                        facilisis Nullam id dolor id nibh ultricies
                                                        vehicula ut id elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                        <div class="card">
                                            <div class="card-header" id="faqHeadingSeven">
                                                <h2 class="mb-0">
                                                    <button
                                                        class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#faqCollapseSeven" aria-expanded="false"
                                                        aria-controls="faqCollapseSeven">
                                                        <span class="ms-3">Which currency is most widely accepted on
                                                            this
                                                            tour?</span>
                                                        <i class="la la-minus"></i>
                                                        <i class="la la-plus"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="faqCollapseSeven" class="collapse"
                                                aria-labelledby="faqHeadingSeven" data-bs-parent="#accordionExample2">
                                                <div class="card-body d-flex">
                                                    <p>
                                                        Mea appareat omittantur eloquentiam ad, nam ei
                                                        quas oportere democritum. Prima causae admodum id
                                                        est, ei timeam inimicus sed. Sit an meis aliquam,
                                                        cetero inermis vel ut. An sit illum euismod
                                                        facilisis Nullam id dolor id nibh ultricies
                                                        vehicula ut id elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                    </div>
                                </div>
                                <!-- end single-content-item -->
                                <div class="section-block"></div>
                            </div>
                            <!-- end faq -->
                            <div id="reviews" class="page-scroll">
                                <div class="single-content-item padding-top-40px padding-bottom-40px">
                                    <h3 class="title font-size-20">Reviews</h3>
                                    <div class="review-container padding-top-30px">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4">
                                                <div class="review-summary">
                                                    <h2>4.5<span>/5</span></h2>
                                                    <p>Excellent</p>
                                                    <span>Based on 4 reviews</span>
                                                </div>
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-8">
                                                <div class="review-bars">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="progress-item">
                                                                <h3 class="progressbar-title">Service</h3>
                                                                <div
                                                                    class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                                    <div class="progressbar-box flex-shrink-0">
                                                                        <div class="progressbar-line"
                                                                            data-percent="70%">
                                                                            <div
                                                                                class="progressbar-line-item bar-bg-1">
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Skill Bar -->
                                                                    </div>
                                                                    <div class="bar-percent">4.6</div>
                                                                </div>
                                                            </div>
                                                            <!-- end progress-item -->
                                                        </div>
                                                        <!-- end col-lg-6 -->
                                                        <div class="col-lg-6">
                                                            <div class="progress-item">
                                                                <h3 class="progressbar-title">Location</h3>
                                                                <div
                                                                    class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                                    <div class="progressbar-box flex-shrink-0">
                                                                        <div class="progressbar-line"
                                                                            data-percent="55%">
                                                                            <div
                                                                                class="progressbar-line-item bar-bg-2">
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Skill Bar -->
                                                                    </div>
                                                                    <div class="bar-percent">4.7</div>
                                                                </div>
                                                            </div>
                                                            <!-- end progress-item -->
                                                        </div>
                                                        <!-- end col-lg-6 -->
                                                        <div class="col-lg-6">
                                                            <div class="progress-item">
                                                                <h3 class="progressbar-title">
                                                                    Value for Money
                                                                </h3>
                                                                <div
                                                                    class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                                    <div class="progressbar-box flex-shrink-0">
                                                                        <div class="progressbar-line"
                                                                            data-percent="40%">
                                                                            <div
                                                                                class="progressbar-line-item bar-bg-3">
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Skill Bar -->
                                                                    </div>
                                                                    <div class="bar-percent">2.6</div>
                                                                </div>
                                                            </div>
                                                            <!-- end progress-item -->
                                                        </div>
                                                        <!-- end col-lg-6 -->
                                                        <div class="col-lg-6">
                                                            <div class="progress-item">
                                                                <h3 class="progressbar-title">Cleanliness</h3>
                                                                <div
                                                                    class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                                    <div class="progressbar-box flex-shrink-0">
                                                                        <div class="progressbar-line"
                                                                            data-percent="60%">
                                                                            <div
                                                                                class="progressbar-line-item bar-bg-4">
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Skill Bar -->
                                                                    </div>
                                                                    <div class="bar-percent">3.6</div>
                                                                </div>
                                                            </div>
                                                            <!-- end progress-item -->
                                                        </div>
                                                        <!-- end col-lg-6 -->
                                                        <div class="col-lg-6">
                                                            <div class="progress-item">
                                                                <h3 class="progressbar-title">Facilities</h3>
                                                                <div
                                                                    class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                                    <div class="progressbar-box flex-shrink-0">
                                                                        <div class="progressbar-line"
                                                                            data-percent="50%">
                                                                            <div
                                                                                class="progressbar-line-item bar-bg-5">
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Skill Bar -->
                                                                    </div>
                                                                    <div class="bar-percent">2.6</div>
                                                                </div>
                                                            </div>
                                                            <!-- end progress-item -->
                                                        </div>
                                                        <!-- end col-lg-6 -->
                                                    </div>
                                                    <!-- end row -->
                                                </div>
                                            </div>
                                            <!-- end col-lg-8 -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end single-content-item -->
                                <div class="section-block"></div>
                            </div>
                            <!-- end reviews -->
                            <div class="review-box d-none">
                                <div class="single-content-item padding-top-40px">
                                    <h3 class="title font-size-20">Showing 3 guest reviews</h3>
                                    <div class="comments-list padding-top-50px">
                                        <div class="comment">
                                            <div class="comment-avatar">
                                                <img class="avatar__img" alt=""
                                                    src="{{ asset('assets/images/team8.jpg') }}" />
                                            </div>
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <h3 class="comment__author">Jenny Doe</h3>
                                                    <div class="meta-data-inner d-flex">
                                                        <span class="ratings d-flex align-items-center me-1">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                        </span>
                                                        <p class="comment__date">April 5, 2019</p>
                                                    </div>
                                                </div>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, dolores mandamus
                                                    moderatius ea ius, sed civibus vivendum imperdiet
                                                    ei, amet tritani sea id. Ut veri diceret fierent
                                                    mei, qui facilisi suavitate euripidis
                                                </p>
                                                <div
                                                    class="comment-reply d-flex align-items-center justify-content-between">
                                                    <a class="theme-btn" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#replayPopupForm">
                                                        <span class="la la-mail-reply me-1"></span>Reply
                                                    </a>
                                                    <div class="reviews-reaction">
                                                        <a href="#" class="comment-like"><i
                                                                class="la la-thumbs-up"></i> 13</a>
                                                        <a href="#" class="comment-dislike"><i
                                                                class="la la-thumbs-down"></i> 2</a>
                                                        <a href="#" class="comment-love"><i
                                                                class="la la-heart-o"></i> 5</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end comments -->
                                        <div class="comment comment-reply-item">
                                            <div class="comment-avatar">
                                                <img class="avatar__img" alt=""
                                                    src="{{ asset('assets/images/team9.jpg') }}" />
                                            </div>
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <h3 class="comment__author">Jenny Doe</h3>
                                                    <div class="meta-data-inner d-flex">
                                                        <span class="ratings d-flex align-items-center me-1">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                        </span>
                                                        <p class="comment__date">April 5, 2019</p>
                                                    </div>
                                                </div>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, dolores mandamus
                                                    moderatius ea ius, sed civibus vivendum imperdiet
                                                    ei, amet tritani sea id. Ut veri diceret fierent
                                                    mei, qui facilisi suavitate euripidis
                                                </p>
                                                <div
                                                    class="comment-reply d-flex align-items-center justify-content-between">
                                                    <a class="theme-btn" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#replayPopupForm">
                                                        <span class="la la-mail-reply me-1"></span>Reply
                                                    </a>
                                                    <div class="reviews-reaction">
                                                        <a href="#" class="comment-like"><i
                                                                class="la la-thumbs-up"></i> 13</a>
                                                        <a href="#" class="comment-dislike"><i
                                                                class="la la-thumbs-down"></i> 2</a>
                                                        <a href="#" class="comment-love"><i
                                                                class="la la-heart-o"></i> 5</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end comments -->
                                        <div class="comment">
                                            <div class="comment-avatar">
                                                <img class="avatar__img" alt=""
                                                    src="{{ asset('assets/images/team10.jpg') }}" />
                                            </div>
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <h3 class="comment__author">Jenny Doe</h3>
                                                    <div class="meta-data-inner d-flex">
                                                        <span class="ratings d-flex align-items-center me-1">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                        </span>
                                                        <p class="comment__date">April 5, 2019</p>
                                                    </div>
                                                </div>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, dolores mandamus
                                                    moderatius ea ius, sed civibus vivendum imperdiet
                                                    ei, amet tritani sea id. Ut veri diceret fierent
                                                    mei, qui facilisi suavitate euripidis
                                                </p>
                                                <div
                                                    class="comment-reply d-flex align-items-center justify-content-between">
                                                    <a class="theme-btn" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#replayPopupForm">
                                                        <span class="la la-mail-reply me-1"></span>Reply
                                                    </a>
                                                    <div class="reviews-reaction">
                                                        <a href="#" class="comment-like"><i
                                                                class="la la-thumbs-up"></i> 13</a>
                                                        <a href="#" class="comment-dislike"><i
                                                                class="la la-thumbs-down"></i> 2</a>
                                                        <a href="#" class="comment-love"><i
                                                                class="la la-heart-o"></i> 5</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end comments -->
                                        <div class="btn-box load-more text-center">
                                            <button class="theme-btn theme-btn-small theme-btn-transparent"
                                                type="button">
                                                Load More Review
                                            </button>
                                        </div>
                                    </div>
                                    <!-- end comments-list -->
                                    <div class="comment-forum padding-top-40px">
                                        <div class="form-box">
                                            <div class="form-title-wrap">
                                                <h3 class="title">Write a Review</h3>
                                            </div>
                                            <!-- form-title-wrap -->
                                            <div class="form-content">
                                                <div class="rate-option p-2">
                                                    <div class="row">
                                                        <div class="col-lg-4 responsive-column">
                                                            <div class="rate-option-item">
                                                                <label>Service</label>
                                                                <div class="rate-stars-option">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="lst1" value="1" />
                                                                    <label for="lst1"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="lst2" value="2" />
                                                                    <label for="lst2"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="lst3" value="3" />
                                                                    <label for="lst3"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="lst4" value="4" />
                                                                    <label for="lst4"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="lst5" value="5" />
                                                                    <label for="lst5"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- col-lg-4 -->
                                                        <div class="col-lg-4 responsive-column">
                                                            <div class="rate-option-item">
                                                                <label>Location</label>
                                                                <div class="rate-stars-option">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="l1" value="1" />
                                                                    <label for="l1"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="l2" value="2" />
                                                                    <label for="l2"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="l3" value="3" />
                                                                    <label for="l3"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="l4" value="4" />
                                                                    <label for="l4"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="l5" value="5" />
                                                                    <label for="l5"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- col-lg-4 -->
                                                        <div class="col-lg-4 responsive-column">
                                                            <div class="rate-option-item">
                                                                <label>Value for Money</label>
                                                                <div class="rate-stars-option">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="vm1" value="1" />
                                                                    <label for="vm1"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="vm2" value="2" />
                                                                    <label for="vm2"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="vm3" value="3" />
                                                                    <label for="vm3"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="vm4" value="4" />
                                                                    <label for="vm4"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="vm5" value="5" />
                                                                    <label for="vm5"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- col-lg-4 -->
                                                        <div class="col-lg-4 responsive-column">
                                                            <div class="rate-option-item">
                                                                <label>Cleanliness</label>
                                                                <div class="rate-stars-option">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="cln1" value="1" />
                                                                    <label for="cln1"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="cln2" value="2" />
                                                                    <label for="cln2"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="cln3" value="3" />
                                                                    <label for="cln3"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="cln4" value="4" />
                                                                    <label for="cln4"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="cln5" value="5" />
                                                                    <label for="cln5"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- col-lg-4 -->
                                                        <div class="col-lg-4 responsive-column">
                                                            <div class="rate-option-item">
                                                                <label>Facilities</label>
                                                                <div class="rate-stars-option">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="f1" value="1" />
                                                                    <label for="f1"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="f2" value="2" />
                                                                    <label for="f2"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="f3" value="3" />
                                                                    <label for="f3"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="f4" value="4" />
                                                                    <label for="f4"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="f5" value="5" />
                                                                    <label for="f5"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- col-lg-4 -->
                                                    </div>
                                                    <!-- end row -->
                                                </div>
                                                <!-- end rate-option -->
                                                <div class="contact-form-action">
                                                    <form method="post">
                                                        <div class="row">
                                                            <div class="col-lg-6 responsive-column">
                                                                <div class="input-box">
                                                                    <label class="label-text">Name</label>
                                                                    <div class="form-group">
                                                                        <span class="la la-user form-icon"></span>
                                                                        <input class="form-control" type="text"
                                                                            name="text" placeholder="Your name" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 responsive-column">
                                                                <div class="input-box">
                                                                    <label class="label-text">Email</label>
                                                                    <div class="form-group">
                                                                        <span
                                                                            class="la la-envelope-o form-icon"></span>
                                                                        <input class="form-control" type="email"
                                                                            name="email"
                                                                            placeholder="Email address" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="input-box">
                                                                    <label class="label-text">Message</label>
                                                                    <div class="form-group">
                                                                        <span class="la la-pencil form-icon"></span>
                                                                        <textarea class="message-control form-control" name="message" placeholder="Write message"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="btn-box">
                                                                    <button type="button" class="theme-btn">
                                                                        Leave a Review
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- end contact-form-action -->
                                            </div>
                                            <!-- end form-content -->
                                        </div>
                                        <!-- end form-box -->
                                    </div>
                                    <!-- end comment-forum -->
                                </div>
                                <!-- end single-content-item -->
                            </div>
                            <!-- end review-box -->
                        </div>
                        <!-- end single-content-wrap -->
                    </div>
                    <!-- end col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar single-content-sidebar mb-0">
                            <div class="sidebar-widget single-content-widget">
                                <div class="sidebar-widget-item">
                                    <div class="sidebar-book-title-wrap mb-3">
                                        <h3 class="d-none">Featured</h3>
                                        <p>
                                            <span class="text-form">From</span><span class="text-value ms-2 me-1">Ksh.
                                                {{ number_format($selected_package->price) }}</span>
                                            <span class="before-price d-none">$412.00</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- end sidebar-widget-item -->
                                <div class="sidebar-widget-item">
                                    <div class="contact-form-action">
                                        <form action="#">
                                            <div class="input-box">
                                                <label class="label-text">Date</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="text"
                                                        name="daterangepicker" id="dateRange" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- end sidebar-widget-item -->
                                <div class="sidebar-widget-item">
                                    <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                        <label class="font-size-16">Number of adults</label>
                                        <div class="qtyBtn d-flex align-items-center">
                                            <div class="qtyDec" wire:click='decrementAdults'><i
                                                    class="la la-minus"></i></div>
                                            <input type="text" name="qtyInput" value="0"
                                                wire:model='adults' />
                                            <div class="qtyInc" wire:click='incrementAdults'><i
                                                    class="la la-plus"></i></div>
                                        </div>
                                    </div>
                                    <!-- end qty-box -->
                                    <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                        <label class="font-size-16">Children</label>
                                        <div class="qtyBtn d-flex align-items-center">
                                            <div class="qtyDec" wire:click='decrementChildren'>
                                                <i class="la la-minus"></i>
                                            </div>
                                            <input type="text" name="qtyInput" value="0"
                                                wire:model='children' />
                                            <div class="qtyInc" wire:click='incrementChildren'>
                                                <i class="la la-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end qty-box -->
                                </div>
                                <!-- end sidebar-widget-item -->
                                <div class="btn-box pt-2">
                                    <button class="theme-btn text-center w-100 mb-2" wire:click='BookNow'>
                                        <i class="la la-shopping-cart me-2 font-size-18"></i>
                                        Book Now
                                    </button>
                                    <a href="#"
                                        class="theme-btn text-center w-100 theme-btn-transparent d-none">
                                        <i class="la la-heart-o me-2"></i>Add to Wishlist</a>
                                    <div class="d-flex align-items-center justify-content-between pt-2">
                                        <a href="#" class="btn theme-btn-hover-gray font-size-15"
                                            data-bs-toggle="modal" data-bs-target="#sharePopupForm">
                                            <i class="la la-share me-1"></i>Share</a>
                                        <p>
                                            <i class="la la-eye me-1 font-size-15 color-text-2"></i>3456
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end sidebar-widget -->
                            <div class="sidebar-widget single-content-widget">
                                <h3 class="title stroke-shape">Enquiry Form</h3>
                                <div class="enquiry-forum">
                                    <div class="form-box">
                                        <div class="form-content">
                                            <div class="contact-form-action">
                                                <form method="post">
                                                    <div class="input-box">
                                                        <label class="label-text">Your Name</label>
                                                        <div class="form-group">
                                                            <span class="la la-user form-icon"></span>
                                                            <input class="form-control" type="text" name="text"
                                                                placeholder="Your name" />
                                                        </div>
                                                    </div>
                                                    <div class="input-box">
                                                        <label class="label-text">Your Email</label>
                                                        <div class="form-group">
                                                            <span class="la la-envelope-o form-icon"></span>
                                                            <input class="form-control" type="email" name="email"
                                                                placeholder="Email address" />
                                                        </div>
                                                    </div>
                                                    <div class="input-box">
                                                        <label class="label-text">Message</label>
                                                        <div class="form-group">
                                                            <span class="la la-pencil form-icon"></span>
                                                            <textarea class="message-control form-control" name="message" placeholder="Write message"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="input-box">
                                                        <div class="form-group">
                                                            <div class="custom-checkbox mb-0">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="agreeChb" />
                                                                <label for="agreeChb">I agree with
                                                                    <a href="#">Terms of Service</a> and
                                                                    <a href="#">Privacy Statement</a>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-box">
                                                        <button type="button" class="theme-btn">
                                                            Submit Enquiry
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- end contact-form-action -->
                                        </div>
                                        <!-- end form-content -->
                                    </div>
                                    <!-- end form-box -->
                                </div>
                                <!-- end enquiry-forum -->
                            </div>
                            <!-- end sidebar-widget -->
                            <div class="sidebar-widget single-content-widget">
                                <h3 class="title stroke-shape">Why Book With Us?</h3>
                                <div class="sidebar-list">
                                    <ul class="list-items">
                                        <li>
                                            <i class="la la-dollar icon-element me-2"></i>No-hassle
                                            best price guarantee
                                        </li>
                                        <li>
                                            <i class="la la-microphone icon-element me-2"></i>Customer care available
                                            24/7
                                        </li>
                                        <li>
                                            <i class="la la-thumbs-up icon-element me-2"></i>Hand-picked Tours &
                                            Activities
                                        </li>
                                        <li>
                                            <i class="la la-file-text icon-element me-2"></i>Free
                                            Travel Insureance
                                        </li>
                                    </ul>
                                </div>
                                <!-- end sidebar-list -->
                            </div>
                            <!-- end sidebar-widget -->
                            <div class="sidebar-widget single-content-widget">
                                <h3 class="title stroke-shape">Get a Question?</h3>
                                <p class="font-size-14 line-height-24">
                                    Do not hesitate to give us a call. We are an expert team and
                                    we are happy to talk to you.
                                </p>
                                <div class="sidebar-list pt-3">
                                    <ul class="list-items">
                                        <li>
                                            <i class="la la-phone icon-element me-2"></i>
                                            <a href="tel:+254 717 838 061">
                                                +254 717 838 061
                                            </a>
                                        </li>
                                        <li>
                                            <i class="la la-envelope icon-element me-2"></i>
                                            <a href="mailto:info@gentriiqsafaris.co.ke">info@gentriiqsafaris.co.ke</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end sidebar-list -->
                            </div>
                            <!-- end sidebar-widget -->
                            <div class="sidebar-widget single-content-widget d-none">
                                <h3 class="title stroke-shape">Organized by</h3>
                                <div class="author-content d-flex">
                                    <div class="author-img">
                                        <a href="#"><img src="{{ asset('assets/images/team8.jpg') }}"
                                                alt="testimonial image" /></a>
                                    </div>
                                    <div class="author-bio">
                                        <h4 class="author__title">
                                            <a href="#">royaltravelagency</a>
                                        </h4>
                                        <span class="author__meta">Member Since 2017</span>
                                        <span class="ratings d-flex align-items-center">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star-o"></i>
                                            <span class="ms-2">305 Reviews</span>
                                        </span>
                                        <div class="btn-box pt-3">
                                            <a href="#"
                                                class="theme-btn theme-btn-small theme-btn-transparent">Ask a
                                                Question</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end sidebar-widget -->
                        </div>
                        <!-- end sidebar -->
                    </div>
                    <!-- end col-lg-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end single-content-box -->
    </section>
    <!-- end tour-detail-area -->

    <div class="section-block"></div>
    <section class="related-tour-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">You might also like</h2>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            @if (isset($related_packages) && count($related_packages) > 0)
                <div class="row padding-top-50px">
                    @foreach ($related_packages as $related)
                        <div class="col-lg-4 responsive-column">
                            <div class="card-item trending-card">
                                <div class="card-img">
                                    <a href="{{ route('package.detail', ['package' => $related->slug]) }}"
                                        class="d-block">
                                        <img src="{{ asset('storage/' . $related->featured_image) }}"
                                            alt="Destination-img" />
                                    </a>
                                    <span class="badge">Featured</span>
                                </div>
                                <div class="card-body px-1">
                                    <h3 class="card-title">
                                        <a href="{{ route('package.detail', ['package' => $related->slug]) }}">
                                            {{ $related->package_name }}
                                        </a>
                                    </h3>
                                    <p class="card-meta">{{ $related->location }}</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span
                                                class="price__num">{{ __('Ksh. ' . number_format($related->price)) }}</span>
                                        </p>
                                        <a href="{{ route('package.detail', ['package' => $related->slug]) }}"
                                            class="btn-text">View
                                            details<i class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-item -->
                        </div>
                    @endforeach
                </div>
            @endif
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end related-tour-area -->

    <section class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-heading">
                        <h2 class="sec__title font-size-30 text-white">
                            Subscribe to see Secret Deals
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
                                    <label class="label-text text-white">Enter email address</label>
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
    <livewire:customers.book-now-modal />
</div>

<script>
    document.addEventListener('livewire:init', () => {
        let daterange = document.getElementById('dateRange');
        daterange.onchange = () => {
            @this.set('booking_date', daterange.value);
        }
    });
</script>
