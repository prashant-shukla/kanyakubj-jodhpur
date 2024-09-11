<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'venue',
        'title',
        'start_date',
        'end_date',
        'description',
        'start_time',
        'end_time',
        'speaker_chief_guest'
    ];
}
