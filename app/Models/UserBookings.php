<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBookings extends Model
{
    use HasFactory;

    protected $casts = [
        'checkin_date' => 'datetime',
        'checkout_date' => 'datetime',
    ];
      /**
     * Compute the total price based on the number of adults, children, package price per head, and fixed discount per package.
     *
     * @return float
     */
    public function calculateTotalPrice(){

       $package=ToursPackages::find($this->tours_packages_id);
       if($package){
        $packagePrice = $package->price;
        $discount = $package->discount;
        $price=$packagePrice-$discount;
        $totalPrice=($this->total_adults+$this->total_children)*$price;
        return $totalPrice;

       }
       return 0;




    }
}
