<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class ViewPackage extends Component
{
    #[Title('View Package')]
    public function render()
    {
        return view('livewire.pages.view-package');
    }
}
