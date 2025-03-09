<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Payment extends Model
{
    protected $fillable = ['amount', 'payment_date', 'status'];

    protected $casts = [
        'payment_date' => 'datetime',
        'status' => Status::class,
    ];

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }
}
