<?php

namespace App\Livewire\Admin;

use App\Livewire\Customers\ViewBookingModal;
use App\Models\UserBookings;
use Livewire\Component;

class Bookings extends Component
{
    public function render()
    {
        $bookings = UserBookings::latest()->get();
        return view('livewire.admin.bookings', compact('bookings'));
    }

    public function viewUser($id)
    {
        $booking = UserBookings::findOrFail($id);
        $this->dispatch('openBookingModal', ['booking' => $booking])->to(ViewBookingModal::class);
    }
}
