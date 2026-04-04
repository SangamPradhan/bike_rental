<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Services extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category',
        'price',
        'price_two',
        'price_three',
        'time_one',
        'time_two',
        'time_three',
        'order',
    ];

    protected $guarded = ['id'];

    protected $appends = ['image_url', 'thumb_url'];

    function getImageUrlAttribute()
    {
        return $this->getImage();
    }

    function getThumbUrlAttribute()
    {
        return $this->getThumbnail();
    }
}
