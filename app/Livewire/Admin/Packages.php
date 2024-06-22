<?php

namespace App\Livewire\Admin;

use App\Models\ToursPackages;
use Livewire\Attributes\Title;
use Livewire\Component;

class Packages extends Component
{
    #[Title('Packages')]
    protected $listeners = ['packageAdded' => '$refresh'];

    public function render()
    {
        $packages = ToursPackages::all();

        return view('livewire.admin.packages', compact('packages'));
    }
}
