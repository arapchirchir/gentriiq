<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class ContactUs extends Component
{
    #[Title('Contact Us')]
    public function render()
    {
        return view('livewire.pages.contact-us');
    }
}
