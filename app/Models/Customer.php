<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address'
    ];

    //Get all orders
    public function orders(): HasMany 
    {
        return $this->hasMany(Order::class);
    }

    public function transaction(): MorphMany 
    {
        return $this->morphMany(Transaction::class, 'transactable');
    }
}
