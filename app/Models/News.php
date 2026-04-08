<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class News extends BaseModel
{
    use HasFactory, HasSlug;

    protected $guarded = ['id', 'user_id'];
    protected $appends = ['image_url', 'thumb_url'];
    protected $fillable = ['title', 'description', 'order', 'tag'];


    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }


    function getImageUrlAttribute()
    {
        return $this->getImage();

    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    function getThumbUrlAttribute()
    {
        return $this->getThumbnail();
    }
}
