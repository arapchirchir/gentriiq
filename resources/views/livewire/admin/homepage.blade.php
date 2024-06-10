<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card rounded-1">
                <div class="card-header text-muted">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>Bookings</div>
                        <small><a href="{{ route('bookings') }}">View</a></small>
                    </div>
                </div>
                <div class="card-body">
                    Bookings
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card rounded-1">
                <div class="card-header text-muted">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>Posts</div>
                        <small><a href="{{ route('admin.blog.posts') }}">View</a></small>
                    </div>
                </div>
                <div class="card-body">
                    Posts
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card rounded-1">
                <div class="card-header text-muted">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>Packages</div>
                        <small><a href="{{ route('admin.packages') }}">View</a></small>
                    </div>
                </div>
                <div class="card-body">
                    Packages
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card rounded-1">
                <div class="card-header text-muted">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>Destinations</div>
                        <small><a href="{{ route('admin.destinations') }}">View</a></small>
                    </div>
                </div>
                <div class="card-body">
                    Destinations
                </div>
            </div>
        </div>
    </div>
</div>
