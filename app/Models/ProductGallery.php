<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductGallery extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_id',
        'url',
        'created_by'
    ];

    public function getUrlAttribute($url)
    {
        return config('app.url') . Storage::url($url);
    }

    // Relationship
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
