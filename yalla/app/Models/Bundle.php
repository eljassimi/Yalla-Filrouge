<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bundle extends Model
{
    protected $fillable = ['bundle_name', 'price', 'event_id', 'transport_service_id', 'accommodation_id'];


    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function accommodations(): BelongsToMany
    {
        return $this->belongsToMany(Accommodation::class, 'bundle_accommodation');
    }

    public function transportBookings(): BelongsToMany
    {
        return $this->belongsToMany(TransportBooking::class, 'bundle_transport_booking');
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function calculateTotalPrice(): float
    {
        $bundleBasePrice = $this->price;

        $transportPrice = $this->transportBookings->sum('total_price');

        $accommodationPrice = $this->accommodations->sum('price_per_night');

        return $bundleBasePrice + $transportPrice + $accommodationPrice;
    }
}
