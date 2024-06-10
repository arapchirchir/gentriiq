<?php

namespace App\Livewire\Pages;

use App\Models\TourDestinations;
use Livewire\Attributes\Title;
use Livewire\Component;

class DestinationView extends Component
{
    #[Title('Destination')]
    public function render()
    {
        $destination = null;
        $selected_destination = TourDestinations::where('slug', request()->slug)->first();
        if ($selected_destination) {
            $destination = $selected_destination;
        }
        $related_destinations = TourDestinations::where('slug', '!=', request()->slug)->inRandomOrder()->limit(3)->get();
        return view('livewire.pages.destination-view', compact('destination', 'related_destinations'));
    }
}
