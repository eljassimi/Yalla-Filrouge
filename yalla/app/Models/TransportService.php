<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TransportService extends Model
{
    protected $fillable = ['price_per_km', 'available_seats'];

    public function transportBookings(): HasMany
    {
        return $this->hasMany(TransportBooking::class);
    }
}
