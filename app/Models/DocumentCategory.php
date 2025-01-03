<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class DocumentCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'thumb', 'slug'];

  
    public function documents()
    {
        return $this->hasMany(DocumentMedia::class);
    }

    protected static function booted()
    {
        static::saving(function ($model) {
            if ($model->isDirty('name')) {
                $slug = Str::slug($model->name);
                // Ensure the slug is unique
                $originalSlug = $slug;
                $count = 1;
                while (self::where('slug', $slug)->exists()) {
                    $slug = "{$originalSlug}-" . $count++;
                }
                $model->slug = $slug;
            }
        });
    }
}
