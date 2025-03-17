<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bundle extends Model
{
    protected $fillable = ['bundle_name', 'price', 'event_id', 'transport_service_id', 'Hotel_id'];


    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function Hotel(): BelongsToMany
    {
        return $this->belongsToMany(Hotel::class, 'bundle_Hotel');
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

        $HotelPrice = $this->Hotel->sum('price_per_night');

        return $bundleBasePrice + $transportPrice + $HotelPrice;
    }
}
