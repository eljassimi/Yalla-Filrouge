<?php

namespace App\Models;

use App\Enums\EventType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    protected $fillable = ['name', 'date', 'available_spots', 'description', 'event_type', 'location_id'];

    protected $casts = [
        'date' => 'datetime',
        'event_type' => EventType::class,
    ];

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function bundles(): HasMany
    {
        return $this->hasMany(Bundle::class);
    }
}
