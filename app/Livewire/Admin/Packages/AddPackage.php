<?php

namespace App\Livewire\Admin\Packages;

use App\Models\ToursPackages;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddPackage extends Component
{
    use WithFileUploads;

    public $package_name;

    public $slug;

    public $duration;

    public $price;

    public $discount = 0;

    public $location;

    public $featured_image;

    public $description;

    public $other_images = [];

    public function render()
    {
        return view('livewire.admin.packages.add-package');
    }

    public function StorePackage()
    {
        $this->validate([
            'package_name' => 'required|string',
            'duration' => 'required|string',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
            'location' => 'required',
            'featured_image' => 'required|image',
            'description' => 'required',
            'other_images.*' => 'required|image',
        ]);

        if (! empty($this->other_images) && count($this->other_images) > 5) {
            $this->other_images = array_slice($this->other_images, 0, 5);
        }

        $this->featured_image = $this->featured_image->storeAs('packages', $this->featured_image->hashName(), 'public');

        $other_images = [];
        foreach ($this->other_images as $image) {
            $imageName = $image->hashName();
            $other_images[] = $image->storeAs('packages', $imageName, 'public');
        }

        $package = new ToursPackages();
        $package->package_name = $this->package_name;
        $package->slug = Str::slug($this->package_name);
        $package->duration = $this->duration;
        $package->price = $this->price;
        $package->discount = $this->discount;
        $package->location = $this->location;
        $package->featured_image = $this->featured_image;
        $package->description = $this->description;
        $package->other_images = json_encode($other_images);
        $package->save();

        $this->reset();
        $this->dispatch('userAlert', 'Package added successfully!');
    }

    public function updatedFeaturedImage()
    {
        $this->validate([
            'featured_image' => 'required|image',
        ]);

        $manager = new ImageManager(Driver::class);
        $image = $manager->read($this->featured_image->getRealPath());
        $image->resize(1077, 606, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        $image->save($this->featured_image->getRealPath());
        // $this->dispatch('userAlert', 'Featured image uploaded successfully!');
    }

    public function updatedOtherImages()
    {
        $this->validate([
            'other_images.*' => 'required|image',
        ]);

        foreach ($this->other_images as $key => $original_image) {
            $manager = new ImageManager(Driver::class);
            $image = $manager->read($original_image->getRealPath());
            $image->resize(1077, 606, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $image->save($original_image->getRealPath());
            // $this->dispatch('userAlert', 'Other image uploaded successfully!');
        }
    }
}
