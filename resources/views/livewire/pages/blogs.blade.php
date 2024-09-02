<div>
    <section class="breadcrumb-area bread-bg-9">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Blogs</h2>
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
                @if (isset($blogs) && count($blogs))
                    @foreach ($blogs as $blog)
                        <div class="col-sm-6 col-md-4 col-xl-3 responsive-column">
                            <div class="card-item blog-card">
                                <div class="card-img">
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="blog-img">
                                    <div class="post-format icon-element">
                                        <i class="la la-photo"></i>
                                    </div>
                                    <div class="card-body">
                                        @if (isset($blog->tags) && count(json_decode($blog->tags)) > 0)
                                            <div class="post-categories">
                                                <a href="#" class="badge">{{ json_decode($blog?->tags)[0] }}</a>
                                            </div>
                                        @endif
                                        <h3 class="card-title line-height-26">
                                            <a href="{{ route('blog.detail', $blog->slug) }}">
                                                {{ Str::words($blog->title, 5) }}
                                            </a>
                                        </h3>
                                        <p class="card-meta">
                                            <span class="post__date">
                                                {{ date('jS M Y', strtotime($blog->created_at)) }}</span>
                                            <span class="post-dot d-none"></span>
                                            <span class="post__time d-none">5 Mins read</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <div class="author-content d-flex align-items-center">
                                        <div class="author-img">
                                            <img src="https://ui-avatars.com/api/?name={{ $blog->user->name }}"
                                                alt="testimonial image">
                                        </div>
                                        <div class="author-bio">
                                            <a href="#" class="author__title">{{ $blog->user->name }}</a>
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
                    @endforeach
                @endif
            </div>
            <!-- end row -->
            @if ($totalPosts > 6)
                <div class="row">
                    <div class="col-lg-12">
                        <div class="btn-box mt-3 text-center">
                            <button type="button" class="theme-btn" wire:click='loadMore' wire:loading.attr='disabled'>
                                <i class="la la-refresh me-1"></i>Load More
                            </button>
                            <p class="font-size-13 pt-2">Showing {{ count($blogs) }} - {{ count($blogs) }} of
                                {{ $totalPosts }} Posts</p>
                        </div>
                        <!-- end btn-box -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
            @endif
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
</div>
