<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunityImpact extends Model
{
    use HasFactory;
    protected $table = 'community_impacts';

    // Define the fillable fields
    protected $fillable = [
        'year',
        'image',
        'title',
        'description',
    ];
}
