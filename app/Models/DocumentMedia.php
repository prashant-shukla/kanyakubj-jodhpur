<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_category_id', 
        'file_path', 
        'file_type', 
        'title',
    ];

    public function documentCategory()
    {
        return $this->belongsTo(DocumentCategory::class);
    }
}

