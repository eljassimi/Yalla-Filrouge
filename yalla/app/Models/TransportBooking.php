<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TransportBooking extends Model
{
    protected $fillable = ['distance_km', 'total_price', 'booking_date', 'transport_service_id'];

    protected $casts = [
        'booking_date' => 'datetime',
    ];

    public function transportService(): BelongsTo
    {
        return $this->belongsTo(TransportService::class);
    }

    public function bundles(): BelongsToMany
    {
        return $this->belongsToMany(Bundle::class, 'bundle_transport_booking');
    }
}
