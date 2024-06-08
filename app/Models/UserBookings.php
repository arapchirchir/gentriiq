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
}
