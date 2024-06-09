<div>
    <section class="breadcrumb-area bread-bg-9">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">{{ $post?->title }}</h2>
                            </div>
                        </div>
                        <!-- end breadcrumb-content -->
                    </div>
                    <!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-end">
                            <ul class="list-items">
                                <li><a href="{{ route('homepage') }}">Home</a></li>
                                <li><a href="{{ route('our.blog') }}">Blogs</a></li>
                                <li>{{ $post->title }}</li>
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
                <div class="col-lg-8">
                    <div class="card-item blog-card blog-card-layout-2 blog-single-card mb-5">
                        <div class="card-img before-none">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="blog-img">
                        </div>
                        <div class="card-body px-0 pb-0">
                            @if ($post->tags)
                                <div class="post-categories">
                                    @foreach (json_decode($post->tags) as $post_tag)
                                        <a href="#{{ $post_tag }}" class="badge">{{ $post_tag }}</a>
                                    @endforeach
                                </div>
                            @endif
                            <h3 class="card-title font-size-28">
                                {{ $post->title }}
                            </h3>
                            <p class="card-meta pb-3">
                                <span class="post__author">By <a href="#"
                                        class="text-gray">{{ $post->user->name }}</a></span>
                                <span class="post-dot"></span>
                                <span class="post__date"> {{ date('jS M, Y', strtotime($post->created_at)) }}</span>
                                <span class="post-dot"></span>
                                <span class="post__time"><a href="#" class="text-gray">
                                        {{ $post->comment_count }} Comments
                                    </a></span>
                                <span class="post-dot"></span>
                                <span class="post__time"><a href="#" class="text-gray">202 Likes</a></span>
                            </p>
                            <div class="section-block"></div>
                            <p class="card-text py-3">
                                {!! $post->content !!}
                            </p>
                            <div class="section-block"></div>
                            <div class="post-tag-wrap d-flex align-items-center justify-content-between py-4">
                                @if ($post->tags)
                                    <ul class="tag-list">
                                        @foreach (json_decode($post->tags) as $tag)
                                            <li><a href="#">{{ $tag }}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                                <div class="post-share">
                                    <ul>
                                        <li>
                                            <i class="la la-share icon-element"></i>
                                            <ul class="post-share-dropdown d-flex align-items-center">
                                                <li>
                                                    <a href="#" onclick="event.preventDefault();">
                                                        <i class="lab la-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" onclick="event.preventDefault();">
                                                        <i class="lab la-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" onclick="event.preventDefault();">
                                                        <i class="lab la-instagram"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="section-block"></div>
                            <div class="post-navigation d-flex justify-content-between py-4">
                                <a href="#" class="btn theme-btn-hover-gray line-height-35"><i
                                        class="la la-arrow-left me-2"></i>The best hotels in
                                    Europe: 2020</a>
                                <a href="#" class="btn theme-btn-hover-gray line-height-35">The 10 best flight
                                    journeys in the world<i class="la la-arrow-right ms-2"></i></a>
                            </div>
                            <div class="section-block"></div>
                            <div class="post-author-wrap">
                                <div class="author-content pt-5">
                                    <div class="d-flex">
                                        <div class="author-img author-img-md me-4">
                                            <a href="#"><img
                                                    src="https://ui-avatars.com/api/?name={{ $post->user->name }}"
                                                    alt="{{ $post->user->name }}"></a>
                                        </div>
                                        <div class="author-bio">
                                            <h4 class="author__title"><a href="#">{{ $post->user->name }}</a>
                                            </h4>
                                            <span class="author__meta">About the Author</span>
                                            <p class="author__text pt-1 d-none">
                                                Donec vehicula nunc in turpis rutrum porta. Nullam
                                                lacinia ante non turpis aliquam mattis. Pellentesque
                                                luctus leo eget metus egestas egestas.
                                            </p>
                                            <ul class="social-profile pt-3">
                                                <li>
                                                    <a href="#" onclick="event.preventDefault();">
                                                        <i class="lab la-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" onclick="event.preventDefault();">
                                                        <i class="lab la-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" onclick="event.preventDefault();">
                                                        <i class="lab la-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" onclick="event.preventDefault();">
                                                        <i class="lab la-linkedin-in"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                    <div class="section-block"></div>
                    <div class="related-posts pt-5 pb-4">
                        <h3 class="title">Related Posts</h3>
                        <div class="row pt-4">
                            @if (isset($related_posts) && count($related_posts))
                                @foreach ($related_posts as $item)
                                    <div class="col-lg-6 responsive-column">
                                        <div class="card-item blog-card">
                                            <div class="card-img">
                                                <img src="{{ asset('storage/' . $item->image) }}" alt="blog-img">
                                                <div class="post-format icon-element">
                                                    <i class="la la-photo"></i>
                                                </div>
                                                <div class="card-body">
                                                    <div class="post-categories d-none">
                                                        <a href="#" class="badge">Travel</a>
                                                        <a href="#" class="badge">lifestyle</a>
                                                    </div>
                                                    <h3 class="card-title line-height-26">
                                                        <a href="{{ route('blog.detail', $item->slug) }}">
                                                            {{ $item->title }}
                                                        </a>
                                                    </h3>
                                                    <p class="card-meta">
                                                        <span class="post__date">
                                                            {{ date('jS M Y', strtotime($item->created_at)) }}</span>
                                                        <span class="post-dot"></span>
                                                        <span class="post__time">5 Mins read</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card-item -->
                                    </div>
                                    <!-- end col-lg-6 -->
                                @endforeach
                            @endif
                        </div>
                        <!-- end row -->
                    </div>
                    <div class="section-block"></div>
                    <div class="comments-list pt-5 d-none">
                        <h3 class="title">Showing 3 Comments</h3>
                        <div class="comment pt-5">
                            <div class="comment-avatar">
                                <img class="avatar__img" alt="" src="images/team8.jpg">
                            </div>
                            <div class="comment-body">
                                <div class="meta-data">
                                    <h3 class="comment__author">Jenny Doe</h3>
                                    <div class="meta-data-inner">
                                        <p class="comment__date">April 5, 2019</p>
                                    </div>
                                </div>
                                <p class="comment-content">
                                    Lorem ipsum dolor sit amet, dolores mandamus moderatius ea
                                    ius, sed civibus vivendum imperdiet ei, amet tritani sea id.
                                    Ut veri diceret fierent mei, qui facilisi suavitate
                                    euripidis
                                </p>
                                <div class="comment-reply">
                                    <a class="theme-btn" href="#" data-bs-toggle="modal"
                                        data-bs-target="#replayPopupForm">
                                        <span class="la la-mail-reply me-1"></span>Reply
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end comments -->
                        <div class="comment comment-reply-item">
                            <div class="comment-avatar">
                                <img class="avatar__img" alt="" src="images/team9.jpg">
                            </div>
                            <div class="comment-body">
                                <div class="meta-data">
                                    <h3 class="comment__author">Jenny Doe</h3>
                                    <div class="meta-data-inner">
                                        <p class="comment__date">April 5, 2019</p>
                                    </div>
                                </div>
                                <p class="comment-content">
                                    Lorem ipsum dolor sit amet, dolores mandamus moderatius ea
                                    ius, sed civibus vivendum imperdiet ei, amet tritani sea id.
                                    Ut veri diceret fierent mei, qui facilisi suavitate
                                    euripidis
                                </p>
                                <div class="comment-reply">
                                    <a class="theme-btn" href="#" data-bs-toggle="modal"
                                        data-bs-target="#replayPopupForm">
                                        <span class="la la-mail-reply me-1"></span>Reply
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end comments -->
                        <div class="comment">
                            <div class="comment-avatar">
                                <img class="avatar__img" alt="" src="images/team10.jpg">
                            </div>
                            <div class="comment-body">
                                <div class="meta-data">
                                    <h3 class="comment__author">Jenny Doe</h3>
                                    <div class="meta-data-inner">
                                        <p class="comment__date">April 5, 2019</p>
                                    </div>
                                </div>
                                <p class="comment-content">
                                    Lorem ipsum dolor sit amet, dolores mandamus moderatius ea
                                    ius, sed civibus vivendum imperdiet ei, amet tritani sea id.
                                    Ut veri diceret fierent mei, qui facilisi suavitate
                                    euripidis
                                </p>
                                <div class="comment-reply">
                                    <a class="theme-btn" href="#" data-bs-toggle="modal"
                                        data-bs-target="#replayPopupForm">
                                        <span class="la la-mail-reply me-1"></span>Reply
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end comments -->
                        <div class="btn-box load-more text-center">
                            <button class="theme-btn theme-btn-small theme-btn-transparent" type="button">
                                Load More Comment
                            </button>
                        </div>
                    </div>
                    <!-- end comments-list -->
                    <div class="comment-forum pt-5">
                        <div class="form-box">
                            <div class="form-title-wrap">
                                <h3 class="title">Add a Comment</h3>
                            </div>
                            <!-- form-title-wrap -->
                            <div class="form-content">
                                <div class="contact-form-action">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-lg-6 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">Name</label>
                                                    <div class="form-group">
                                                        <span class="la la-user form-icon"></span>
                                                        <input class="form-control" type="text" name="text"
                                                            placeholder="Your name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">Email</label>
                                                    <div class="form-group">
                                                        <span class="la la-envelope-o form-icon"></span>
                                                        <input class="form-control" type="email" name="email"
                                                            placeholder="Email address">
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
                                                <div class="form-group">
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="chbyes">
                                                        <label for="chbyes">Save my name, email, and website in this
                                                            browser for the next time I comment.</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="btn-box">
                                                    <button type="button" class="theme-btn">
                                                        Leave a Comment
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
                <!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar mb-0">
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">Search Post</h3>
                            <div class="contact-form-action">
                                <form action="#">
                                    <div class="input-box">
                                        <div class="form-group mb-0">
                                            <input class="form-control ps-3" type="text"
                                                placeholder="Type your keywords...">
                                            <button class="search-btn" type="submit">
                                                <i class="la la-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget d-none">
                            <h3 class="title stroke-shape">Categories</h3>
                            <div class="sidebar-category">
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="cat1">
                                    <label for="cat1">All <span class="font-size-13 ms-1">(55)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="cat2">
                                    <label for="cat2">Active Adventure Tours
                                        <span class="font-size-13 ms-1">(8)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="cat3">
                                    <label for="cat3">Ecotourism
                                        <span class="font-size-13 ms-1">(5)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="cat4">
                                    <label for="cat4">Escorted Tours
                                        <span class="font-size-13 ms-1">(2)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="cat5">
                                    <label for="cat5">Group Tours
                                        <span class="font-size-13 ms-1">(11)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="cat6">
                                    <label for="cat6">Ligula <span class="font-size-13 ms-1">(3)</span></label>
                                </div>
                                <div class="collapse" id="categoryMenu">
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="cat7">
                                        <label for="cat7">Family Tours
                                            <span class="font-size-13 ms-1">(4)</span></label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="cat8">
                                        <label for="cat8">City Trips
                                            <span class="font-size-13 ms-1">(5)</span></label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="cat9">
                                        <label for="cat9">National Parks Tours
                                            <span class="font-size-13 ms-1">(3)</span></label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="cat10">
                                        <label for="cat10">Vacations
                                            <span class="font-size-13 ms-1">(3)</span></label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="cat11">
                                        <label for="cat11">Early booking
                                            <span class="font-size-13 ms-1">(7)</span></label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="cat12">
                                        <label for="cat12">Last minute
                                            <span class="font-size-13 ms-1">(2)</span></label>
                                    </div>
                                </div>
                                <!-- end collapse -->
                                <a class="btn-text" data-bs-toggle="collapse" href="#categoryMenu" role="button"
                                    aria-expanded="false" aria-controls="categoryMenu">
                                    <span class="show-more">Show More <i class="la la-angle-down"></i></span>
                                    <span class="show-less">Show Less <i class="la la-angle-up"></i></span>
                                </a>
                            </div>
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget d-none">
                            <div class="section-tab section-tab-2 pb-3">
                                <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="recent-tab" data-bs-toggle="tab"
                                            href="#recent" role="tab" aria-controls="recent"
                                            aria-selected="true">
                                            Recent
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="popular-tab" data-bs-toggle="tab" href="#popular"
                                            role="tab" aria-controls="popular" aria-selected="false"
                                            tabindex="-1">
                                            Popular
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="new-tab" data-bs-toggle="tab" href="#new"
                                            role="tab" aria-controls="new" aria-selected="false" tabindex="-1">
                                            New
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane active show" id="recent" role="tabpanel"
                                    aria-labelledby="recent-tab">
                                    <div class="card-item card-item-list recent-post-card">
                                        <div class="card-img">
                                            <a href="blog-single.html" class="d-block">
                                                <img src="images/small-img4.jpg" alt="blog-img">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="blog-single.html">Pack wisely before traveling</a>
                                            </h3>
                                            <p class="card-meta">
                                                <span class="post__date"> 1 March, 2020</span>
                                                <span class="post-dot"></span>
                                                <span class="post__time">3 Mins read</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end card-item -->
                                    <div class="card-item card-item-list recent-post-card">
                                        <div class="card-img">
                                            <a href="blog-single.html" class="d-block">
                                                <img src="images/small-img5.jpg" alt="blog-img">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="blog-single.html">Change your place and get the fresh air</a>
                                            </h3>
                                            <p class="card-meta">
                                                <span class="post__date"> 1 March, 2020</span>
                                                <span class="post-dot"></span>
                                                <span class="post__time">3 Mins read</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end card-item -->
                                    <div class="card-item card-item-list recent-post-card mb-0">
                                        <div class="card-img">
                                            <a href="blog-single.html" class="d-block">
                                                <img src="images/small-img6.jpg" alt="blog-img">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="blog-single.html">Introducing this amazing city</a>
                                            </h3>
                                            <p class="card-meta">
                                                <span class="post__date"> 1 March, 2020</span>
                                                <span class="post-dot"></span>
                                                <span class="post__time">3 Mins read</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end card-item -->
                                </div>
                                <!-- end tab-pane -->
                                <div class="tab-pane fade" id="popular" role="tabpanel"
                                    aria-labelledby="popular-tab">
                                    <div class="card-item card-item-list recent-post-card">
                                        <div class="card-img">
                                            <a href="blog-single.html" class="d-block">
                                                <img src="images/small-img7.jpg" alt="blog-img">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="blog-single.html">The Castle on the Cliff: Majestic, Magic</a>
                                            </h3>
                                            <p class="card-meta">
                                                <span class="post__date"> 1 March, 2020</span>
                                                <span class="post-dot"></span>
                                                <span class="post__time">3 Mins read</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end card-item -->
                                    <div class="card-item card-item-list recent-post-card">
                                        <div class="card-img">
                                            <a href="blog-single.html" class="d-block">
                                                <img src="images/small-img8.jpg" alt="blog-img">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="blog-single.html">Change your place and get the fresh air</a>
                                            </h3>
                                            <p class="card-meta">
                                                <span class="post__date"> 1 March, 2020</span>
                                                <span class="post-dot"></span>
                                                <span class="post__time">3 Mins read</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end card-item -->
                                    <div class="card-item card-item-list recent-post-card mb-0">
                                        <div class="card-img">
                                            <a href="blog-single.html" class="d-block">
                                                <img src="images/small-img9.jpg" alt="blog-img">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="blog-single.html">All Aboard the Rocky Mountaineer</a>
                                            </h3>
                                            <p class="card-meta">
                                                <span class="post__date"> 1 March, 2020</span>
                                                <span class="post-dot"></span>
                                                <span class="post__time">3 Mins read</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end card-item -->
                                </div>
                                <!-- end tab-pane -->
                                <div class="tab-pane" id="new" role="tabpanel" aria-labelledby="new-tab">
                                    <div class="card-item card-item-list recent-post-card">
                                        <div class="card-img">
                                            <a href="blog-single.html" class="d-block">
                                                <img src="images/small-img7.jpg" alt="blog-img">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="blog-single.html">The Castle on the Cliff: Majestic, Magic</a>
                                            </h3>
                                            <p class="card-meta">
                                                <span class="post__date"> 1 March, 2020</span>
                                                <span class="post-dot"></span>
                                                <span class="post__time">3 Mins read</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end card-item -->
                                    <div class="card-item card-item-list recent-post-card">
                                        <div class="card-img">
                                            <a href="blog-single.html" class="d-block">
                                                <img src="images/small-img8.jpg" alt="blog-img">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="blog-single.html">Change your place and get the fresh air</a>
                                            </h3>
                                            <p class="card-meta">
                                                <span class="post__date"> 1 March, 2020</span>
                                                <span class="post-dot"></span>
                                                <span class="post__time">3 Mins read</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end card-item -->
                                    <div class="card-item card-item-list recent-post-card mb-0">
                                        <div class="card-img">
                                            <a href="blog-single.html" class="d-block">
                                                <img src="images/small-img9.jpg" alt="blog-img">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="blog-single.html">All Aboard the Rocky Mountaineer</a>
                                            </h3>
                                            <p class="card-meta">
                                                <span class="post__date"> 1 March, 2020</span>
                                                <span class="post-dot"></span>
                                                <span class="post__time">3 Mins read</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end card-item -->
                                </div>
                                <!-- end tab-pane -->
                            </div>
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget d-none">
                            <h3 class="title stroke-shape">Archives</h3>
                            <div class="sidebar-list">
                                <ul class="list-items">
                                    <li>
                                        <i class="la la-dot-circle me-2 text-color"></i><a href="#">June
                                            2015</a>
                                    </li>
                                    <li>
                                        <i class="la la-dot-circle me-2 text-color"></i><a href="#">May 2016</a>
                                    </li>
                                    <li>
                                        <i class="la la-dot-circle me-2 text-color"></i><a href="#">April
                                            2017</a>
                                    </li>
                                    <li>
                                        <i class="la la-dot-circle me-2 text-color"></i><a href="#">February
                                            2019</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">Tag Cloud</h3>
                            <ul class="tag-list">
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Tour</a></li>
                                <li><a href="#">Nature</a></li>
                                <li><a href="#">Island</a></li>
                                <li><a href="#">Parks</a></li>
                                <li><a href="#">Cruise</a></li>
                                <li><a href="#">Mountains</a></li>
                                <li><a href="#">Bar</a></li>
                                <li><a href="#">Beaches</a></li>
                                <li><a href="#">Nightlife</a></li>
                            </ul>
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">About us</h3>
                            <div class="sidebar-about">
                                <div class="sidebar-about-img">
                                    <img src="{{ asset('logo.png') }}" alt="">
                                    <p
                                        class="text-white bg-info d-flex justify-content-center align-items-center text-center rounded-3 d-none">
                                        {{ config('app.name') }}
                                    </p>
                                </div>
                                <p class="pt-3">
                                    {{-- A description about gentriiq Tours and safris --}}

                                </p>
                            </div>
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">Follow &amp; Connect</h3>
                            <ul class="social-profile">
                                <li>
                                    <a href="#"><i class="lab la-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-linkedin-in"></i></a>
                                </li>
                            </ul>
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
    </section>
</div>
