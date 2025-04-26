<?php

namespace App\Models;

use App\Enums\EventType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    protected $fillable = [
        'name',
        'description',
        'team_1_name',
        'team_2_name',
        'flag_team_1',
        'flag_team_2',
        'date',
        'available_spots',
        'event_type',
        'location_id',
        'affiche_image'
    ];

    protected $casts = [
        'date' => 'datetime',
        'event_type' => EventType::class,
    ];

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function ticketTypes():hasMany
    {
        return $this->hasMany(TicketType::class);
    }

    public function bundles(): HasMany
    {
        return $this->hasMany(Bundle::class);
    }
}
