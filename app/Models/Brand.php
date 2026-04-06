<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'order',
    ];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
