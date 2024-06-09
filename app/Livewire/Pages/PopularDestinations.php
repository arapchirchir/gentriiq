<?php

namespace App\Livewire\Pages;

use App\Models\TourDestinations;
use Livewire\Attributes\Title;
use Livewire\Component;

class PopularDestinations extends Component
{
    #[Title('Popular Destinations')]
    public $pagination = 8;

    public function render()
    {
        $destinations = TourDestinations::latest()->paginate($this->pagination);
        return view('livewire.pages.popular-destinations', compact('destinations'));
    }

    function updatePagination()
    {
        $this->pagination += 8;
    }
}
