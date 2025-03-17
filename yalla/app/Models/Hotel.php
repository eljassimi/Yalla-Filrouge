<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hotel extends Model
{
    protected $fillable = ['name', 'price_per_night', 'available_rooms'];

    public function bundles(): BelongsToMany
    {
        return $this->belongsToMany(Bundle::class, 'bundle_Hotel');
    }

    public function room(){
        return $this->hasMany(room::class, 'hotel_id');
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

}
