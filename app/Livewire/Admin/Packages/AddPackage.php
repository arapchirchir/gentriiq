<?php

namespace App\Livewire\Admin\Packages;

use App\Models\ToursPackages;
use Livewire\Component;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Livewire\Attributes\Title;
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

    function StorePackage()
    {
        $this->validate([
            'package_name' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'location' => 'required',
            'featured_image' => 'required',
            'description' => 'required',
            'other_images.*' => 'required|image',
        ]);
        //check if other images is not empty and that the count is less than 5
        // if more than 5, take only 5 images and store them into storage public folder
        if (!empty($this->other_images) && count($this->other_images) > 5) {
            $this->other_images = array_slice($this->other_images, 0, 5);
        }
        // store the featured image
        $this->featured_image = $this->featured_image->storeAs('packages', $this->featured_image->hashName(), 'public');
        // store the other images
        $other_images = [];
        foreach ($this->other_images as $image) {
            $imageName = $image->hashName();
            $other_images[] = $image->storeAs('packages', $imageName, 'public');
        }
        // create the package
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

        return redirect()->route('admin.packages');
    }

    function updatedFeaturedImage()
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
    }

    function updatedOtherImages()
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
        }
    }
}
