<?php

namespace App\Livewire\Pages;

use App\Models\ToursPackages;
use Livewire\Attributes\Title;
use Livewire\Component;

class OurPackages extends Component
{
    #[Title('Our Packages')]
    public $count = 6;
    public function render()
    {
        $packages = ToursPackages::latest()->paginate($this->count);
        return view('livewire.pages.our-packages', compact('packages'));
    }

    public function loadMore()
    {
        $this->count += 6;
    }
}
