<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model
{
    use HasFactory;
    protected $table = 'photo_gallery';
    protected $fillable = ['image','event_id'];
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
