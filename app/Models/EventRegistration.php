<?php

// app/Models/EventRegistration.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRegistration extends Model
{
    use HasFactory;

    // Make sure these fields are fillable
    protected $fillable = ['full_name', 'mobile', 'comments', 'attending'];
}

