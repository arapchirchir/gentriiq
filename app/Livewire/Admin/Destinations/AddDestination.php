<?php

namespace App\Livewire\Admin\Destinations;

use App\Models\TourDestinations;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AddDestination extends Component
{
    use WithFileUploads;

    public $destination;
    public $leading_image;
    public $other_images = [];
    public $description;

    protected $listeners = ['openBookingModal' => 'addDestinationModal'];

    protected $rules = [
        'destination' => 'required|string',
        'leading_image' => 'required|image',
        'other_images' => 'required',
        'description' => 'required|string',
    ];

    public function render()
    {
        return view('livewire.admin.destinations.add-destination');
    }

    public function addDestinationModal()
    {
        dd('open modal');
    }

    public function storeDestination()
    {
        $this->validate();
        try {
            DB::beginTransaction();
            $other_images = [];
            foreach ($this->other_images as $key => $image) {
                $image_name = $image->hashName();
                $other_images = $image->storeAs('destinations', $image_name, 'public');
            }

            $destination = new TourDestinations();
            $destination->destination = $this->destination;
            $destination->leading_image = $this->leading_image->storeAs('destinations', $this->leading_image->hashName(), 'public');
            $destination->other_images = json_encode($other_images);
            $destination->description = $this->description;
            $destination->slug = Str::slug($this->destination);
            $destination->save();

            DB::commit();

            return redirect()->route('admin.destinations');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
