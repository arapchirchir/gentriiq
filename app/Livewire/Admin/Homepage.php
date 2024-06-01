<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Title;
use Livewire\Component;

class Homepage extends Component
{
    #[Title('Admin Dashboard')]
    public function render()
    {
        return view('livewire.admin.homepage');
    }
}
