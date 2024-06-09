<div class="container">
    <div class="py-2">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="section-title">Destinations</h2>
            @livewire('admin.destinations.add-destination')
        </div>
    </div>
    @if (isset($destinations) && count($destinations) > 0)
        <section class="destination-area">
            <div class="row">
                @foreach ($destinations as $destination)
                    <div class="col-lg-4 responsive-column">
                        <div class="card-item destination-card destination--card">
                            <div class="card-img">
                                <img src="{{ asset('storage/' . $destination->leading_image) }}" alt="destination-img" />
                            </div>
                            <div class="card-body d-flex align-items-center justify-content-between px-1 py-1">
                                <div>
                                    <h3 class="card-title">
                                        <a href="{{ route('destination.detail', ['slug' => $destination->slug]) }}">
                                            {{ $destination->destination }}
                                        </a>
                                    </h3>
                                    <p class="card-meta d-none">34 Activities</p>
                                </div>
                                <div>
                                    <a href="{{ route('destination.detail', ['slug' => $destination->slug]) }}"
                                        class="theme-btn theme-btn-small border-0">Explore <i
                                            class="la la-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end card-item -->
                    </div>
                    <!-- end col-lg-4 -->
                @endforeach
            </div>
            <!-- end row -->
            <!-- end container -->
        </section>
        <!-- end destination-area -->
    @else
        <div class="d-flex justify-content-between align-items-center">
            <p>No destination added</p>
        </div>
    @endif
</div>
