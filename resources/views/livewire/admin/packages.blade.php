<div class="container-fluid">
    @if (isset($packages) && count($packages) > 0)
        <div class="row">
            @foreach ($packages as $package)
                <div class="col-4">
                    <div class="card-item trending-card mb-0">
                        <div class="card-img">
                            <a href="{{ route('package.detail', ['package' => $package->slug]) }}" class="d-block">
                                <img src="{{ asset('storage/' . $package->featured_image) }}" alt="Destination-img">
                            </a>
                            <span class="badge d-none">Bestseller</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="{{ route('package.detail', ['package' => $package->slug]) }}">
                                    {{ $package->package_name }}
                                </a>
                            </h3>
                            <p class="card-meta">{{ $package->location }}</p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__num">From Ksh. {{ number_format($package->price) }}</span>
                                </p>
                                <a href="{{ route('package.detail', ['package' => $package->slug]) }}"
                                    class="btn-text">View details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="d-flex justify-content-between align-items-center">
            <div>No Packages added yet</div>
            <button class="btn rounded-1 shadow-none btn-info" data-bs-toggle="modal" data-bs-target="#addPackage">Add
                Package</button>
        </div>
    @endif

    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="addPackage" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="addPackageId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title text-muted" id="addPackageId">
                        Add Package
                    </h6>
                    <button type="button" class="btn-close btn-outline-primary" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">@livewire('admin.packages.add-package')</div>
            </div>
        </div>
    </div>

    <!-- Optional: Place to the bottom of scripts -->
    <script>
        const myModal = new bootstrap.Modal(
            document.getElementById("addPackage"),
            options,
        );
    </script>

</div>
