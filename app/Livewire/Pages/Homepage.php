<?php

namespace App\Livewire\Pages;

use App\Models\ToursPackages;
use Livewire\Attributes\Title;
use Livewire\Component;

class Homepage extends Component
{
    #[Title('Homepage')]
    public function render()
    {
        $packages = ToursPackages::take(6)->get();
        return view('livewire.pages.homepage', compact('packages'));
    }
}
