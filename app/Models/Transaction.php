<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Transaction extends Model
{
    protected $fillable = [
        'transactable_id',
        'transactable_type',
    ];

    public function transactable(): MorphTo 
    {
        return $this->morphTo();
    }

}
