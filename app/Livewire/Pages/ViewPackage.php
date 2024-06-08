<?php

namespace App\Livewire\Pages;

use App\Livewire\Customers\BookNowModal;
use App\Models\ToursPackages;
use Livewire\Attributes\Title;
use Livewire\Component;

class ViewPackage extends Component
{
    #[Title('View Package')]

    public $selected_package;
    public $adults = 1;
    public $children = 0;
    public $booking_date;

    function mount($package)
    {
        $selected_package = ToursPackages::where('slug', $package)->first();
        $this->selected_package = $selected_package;
    }
    public function render()
    {
        $related_packages = ToursPackages::where('id', '!=', $this->selected_package->id)->take(6)->get();
        return view('livewire.pages.view-package', compact('related_packages'));
    }

    function incrementAdults()
    {
        $this->adults++;
    }

    function decrementAdults()
    {
        if ($this->adults > 1) {
            $this->adults--;
        }
    }

    function incrementChildren()
    {
        $this->children++;
    }

    function decrementChildren()
    {
        if ($this->children > 0) {
            $this->children--;
        }
    }

    public function BookNow()
    {
        $this->validate([
            'booking_date' => 'required',
        ]);

        $this->dispatch('openModal', [
            'package' => $this->selected_package,
            'adults' => $this->adults,
            'children' => $this->children,
            'booking_date' => $this->booking_date,
        ])->to(BookNowModal::class);
    }
}
