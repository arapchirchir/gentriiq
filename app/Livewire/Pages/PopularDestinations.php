<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class PopularDestinations extends Component
{
    #[Title('Popular Destinations')]
    public function render()
    {
        return view('livewire.pages.popular-destinations');
    }
}
