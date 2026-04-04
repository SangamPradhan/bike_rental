<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends BaseModel
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['name', 'message', 'order'];

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

