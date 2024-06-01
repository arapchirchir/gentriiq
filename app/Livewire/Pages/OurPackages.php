<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class OurPackages extends Component
{
    #[Title('Our Packages')]
    public function render()
    {
        return view('livewire.pages.our-packages');
    }
}
