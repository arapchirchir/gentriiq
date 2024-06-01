<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class Blogs extends Component
{
    #[Title('Our Blog')]
    public function render()
    {
        return view('livewire.pages.blogs');
    }
}
