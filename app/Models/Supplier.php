<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Supplier extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address'
    ];

    
    //A supplier can have multiple products.
    public function products(): HasMany 
    {
        return $this->hasMany(Product::class);
    }

    public function transactions(): MorphMany 
    {
        return $this->morphMany(Transaction::class, 'transactable');
    }
}
