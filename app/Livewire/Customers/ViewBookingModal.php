<?php

namespace App\Livewire\Customers;

use Livewire\Component;

class ViewBookingModal extends Component
{
    public $booking;
    protected $listeners = ['openBookingModal' => 'open'];

    public function open($booking)
    {
        $this->booking = $booking;
        dd($booking);
        $this->dispatch('viewBookingModal');
    }

    public function render()
    {
        return view('livewire.customers.view-booking-modal');
    }
}
