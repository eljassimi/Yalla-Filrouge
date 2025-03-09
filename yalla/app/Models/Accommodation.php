<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Accommodation extends Model
{
    protected $fillable = ['name', 'price_per_night', 'available_rooms'];

    public function bundles(): BelongsToMany
    {
        return $this->belongsToMany(Bundle::class, 'bundle_accommodation');
    }
}
