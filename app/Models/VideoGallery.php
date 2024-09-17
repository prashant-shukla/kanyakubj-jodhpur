<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoGallery extends Model
{
    use HasFactory;
    protected $table = 'video_gallery';
    protected $fillable = ['video_link','event_id'];
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
