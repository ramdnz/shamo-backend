<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'userid',
        'transaction_id',
        'product_id',
        'quantity'
    ];

    // Relationship
    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'userid', 'id');
    }
}
