<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'gallery';
    protected $fillable = ['images','event_id'];
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
    protected $casts = [
        'images' => 'array', // Cast images column to array
    ];
}
