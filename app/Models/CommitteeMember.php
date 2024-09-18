<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommitteeMember extends Model
{
    use HasFactory;
    protected $table = "committee_members";
    protected $fillable = ['name','image','position','social_media_links','tenure_id'];
}
