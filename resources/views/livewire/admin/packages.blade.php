<div class="container-fluid">
    @if (isset($packages) && count($packages) > 0)
        <div class="row">
            <div class="col-12 mb-3">
                <div class="d-flex justify-content-end align-items-end">
                    <button class="btn rounded-1 shadow-none btn-info" data-bs-toggle="modal"
                        data-bs-target="#addPackage">Add
                        Package</button>
                </div>
            </div>
            @foreach ($packages as $package)
                <div class="col-md-4 col-lg-3">
                    <div class="card-item trending-card mb-0">
                        <div class="card-img">
                            <a href="{{ route('package.detail', ['package' => $package->slug]) }}" class="d-block">
                                <img src="{{ asset('storage/' . $package->featured_image) }}" alt="Destination-img">
                            </a>
                            <span class="badge d-none">Featured</span>
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
                                    <span class="price__num">From
                                        {{ $package->price !== null && $package->price !== '' ? number_format((float) $package->price) : '0' }}
                                        USD</span>
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
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title fw-bolder mx-auto" id="addPackageId">
                        Add Package
                    </h6>
                    <button type="button" class="btn-close btn-outline-primary" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">@livewire('admin.packages.add-package')</div>
            </div>
        </div>
    </div>
</div>
