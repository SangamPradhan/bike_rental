<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'title',
        'engine_cc',
        'kmpl',
        'fuel_tank_capacity',
        'rate_per_day',
        'rate_per_day_outside_valley',
        'order',
        'type',
        'is_promoted',
        'is_active',
        'description',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
