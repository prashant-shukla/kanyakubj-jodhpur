<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommitteeMember extends Model
{
    use HasFactory;
    protected $table = "committee_members";

    protected $fillable = ['name','image','position','social_media_links','tenure_id','order_number',];
    
    public function tenure()
{
    return $this->belongsTo(Tenure::class); // Adjust this based on your actual relationship and model name
}
}
