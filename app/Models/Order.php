<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'user_id',
        'transaction_id',
        'qty',
        'price',
        'address',
        'city',
        'state',
        'zipcode'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
