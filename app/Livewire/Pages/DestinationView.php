<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class DestinationView extends Component
{
    #[Title('Destination')]
    public function render()
    {
        return view('livewire.pages.destination-view');
    }
}
