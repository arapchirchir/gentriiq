<div class="container">
    @if (isset($bookings) && count($bookings) > 0)
        <div class="table-responsive">
            <table class="table table-striped-columns table-hover table-bordered table-info align-middle" id="myTable">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Client name</th>
                        <th>Client email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($bookings as $booking)
                        <tr wire:key='{{ $booking->id }}'>
                            <td scope="row">{{ $booking->id }}</td>
                            <td>{{ $booking->user_name }}</td>
                            <td>{{ $booking->user_email }}</td>
                            <td>
                                <button class="btn btn-info rounded-1"
                                    wire:click='viewUser("{{ $booking->id }}")'>View</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>
    @else
        No bookings found.
    @endif
</div>
