<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg d-none" id="launchModal" data-bs-toggle="modal"
        data-bs-target="#openBookingModal">
        Launch modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="openBookingModal" data-bs-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        <div>
                            <p>Complete booking</p>
                            <p>{{ $user_booking }}</p>
                        </div>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <h5>You have selected {{ $package['package_name'] ?? '' }}</h5>
                        <p>Package price: {{ $package['price'] ?? '' }}</p>
                        <div class="d-flex justify-content-start align-items-start flex-column mb-3">
                            <ul class="list-unstyled">
                                <ol>Children: {{ $children }} </ol>
                                <ol>Adults: {{ $adults }} </ol>
                                <ol>{{ $booking_date }}</ol>
                                <ol>Checkin: {{ date('jS M Y', strtotime($checkin_date)) }}</ol>
                                <ol>Checkout: {{ date('jS M Y', strtotime($checkout_date)) }}</ol>
                            </ul>
                        </div>
                        <h6>Fill the required fields in the following form</h6>
                        <form wire:submit.prevent='CompleteBooking' method="post">
                            @csrf
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-2">
                                            <label for="first_name" class="label-text">Your first name</label>
                                            <input type="text"
                                                class="form-control @error('first_name') is-invalid @enderror shadow-none rounded-1"
                                                id="name" wire:model="first_name" placeholder="Your first name"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        {{-- Last name --}}
                                        <div class="form-group">
                                            <label for="second_name" class="label-text">Your second name</label>
                                            <input type="text"
                                                class="form-control @error('second_name') is-invalid @enderror shadow-none rounded-1"
                                                id="second_name" wire:model="second_name" placeholder="Your second name"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        {{-- Email --}}
                                        <div class="form-group">
                                            <label for="email" class="label-text">Your email</label>
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror shadow-none rounded-1"
                                                id="email" wire:model="email" placeholder="Your email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        {{-- Phone number --}}
                                        <div class="form-group">
                                            <label for="phone" class="label-text">Your phone number</label>
                                            <input type="text"
                                                class="form-control @error('phone') is-invalid @enderror shadow-none rounded-1"
                                                id="phone" wire:model="phone" placeholder="Your phone number"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        {{-- Trip preferences --}}
                                        <div class="form-group">
                                            <label for="trip_preferences" class="label-text">Your trip
                                                preferences</label>
                                            <textarea class="form-control @error('trip_preferences') is-invalid @enderror shadow-none rounded-1"
                                                id="trip_preferences" wire:model="trip_preferences" placeholder="Your trip preferences" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-end">
                                <button class="btn rounded-1 btn-success" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('livewire:init', event => {
            Livewire.on('launchModal', () => {
                $('#launchModal').click();
            });
        });
    </script>
</div>
