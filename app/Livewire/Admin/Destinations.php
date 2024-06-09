<?php

namespace App\Livewire\Admin;

use App\Livewire\Admin\Destinations\AddDestination;
use App\Models\TourDestinations;
use Livewire\Component;

class Destinations extends Component
{
    public function render()
    {
        $destinations = TourDestinations::latest()->get();
        return view('livewire.admin.destinations', compact('destinations'));
    }

    function openDestinationModal()
    {
        $this->dispatch('openBookingModal')->to(AddDestination::class);
    }
}
