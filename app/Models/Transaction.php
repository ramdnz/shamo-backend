<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'userid',
        'address',
        'total_price',
        'shipping_price',
        'status',
        'payment'
    ];

    // Relationship
    public function user()
    {
        return $this->belongsTo(User::class, 'userid', 'id');
    }

    public function items()
    {
        return $this->hasMany(TransactionItem::class, 'transaction_id', 'id');
    }
}
