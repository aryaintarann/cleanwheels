<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'customer_name',
        'customer_phone',
        'customer_address',
        'residence_type',
        'car_type',
        'service_type',
        'booking_date',
        'booking_time',
        'price',
        'status',
    ];

    protected $casts = [
        'booking_date' => 'date',
        'price' => 'decimal:2',
    ];
}
