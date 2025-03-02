<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'price',
        'description',
        'tags',
        'category_id',
        'created_by'
    ];

    // Relationship
    public function galleries(){
        return $this->hasMany(ProductGallery::class, 'product_id', 'id');
    }

    public function category(){
        return $this->belongsTo(ProductCategory::class, 'category_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
