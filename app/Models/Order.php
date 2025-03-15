<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    protected $fillable = [
        'customer_id',
        'product_id',
    ];

    public function customer(): BelongsTo 
    {
        return $this->belongsTo(Customer::class);
    }

    public function product(): HasMany 
    {
        return $this->hasMany(Product::class);
    }
}
