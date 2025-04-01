<?php

namespace App\Models;

use App\Enums\LocationType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    protected $fillable = ['city', 'address', 'coordinates','LocationType'];

    protected $casts = ['LocationType' => LocationType::class];

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }

    public function hotels(): HasMany
    {
        return $this->hasMany(Hotel::class);
    }
    public function users(): HasMany{
        return $this->hasMany(User::class);
    }
}
