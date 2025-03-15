<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name', 
        'description', 
        'price',
        'image'
    ];

    //product belongs to customer 
    public function customer(): BelongsTo 
    {
        return $this->belongsRo(Customer::class);
    }

    //product belongs to category 
    public function category(): BelongsTo 
    {
        return $this->belongsTo(Category::class);
    }

    //Product belongs to stock
    public function stock(): BelongsTo {
        return $this->belongsTo(Stock::class);
    }

    public function order(): HasMany 
    {
        return $this->hasMany(Order::class);
    }
}
