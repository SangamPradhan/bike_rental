<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends BaseModel
{
    use HasFactory;
    protected $guarded = ['id'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function getLicenseAttachmentUrlAttribute()
    {
        return $this->license_attachment ? asset('storage/license_attachments/' . $this->license_attachment) : null;
    }
}
