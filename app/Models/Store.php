<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Store extends Model
{
    protected $fillable =[
        'name',
        'address',
        'phone'
    ];

    //store has many products (hasManyThrough) on the stock
    public function products(): HasManyThrough 
    {
        return $this->hasManyThrough(Product::class, Stock::class);
    }
}
