<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hotel extends Model
{
    protected $fillable = ['name','description','location_id','main_image','gallery_images','amenities','rooms', 'available_rooms'];

    public function bundles(): BelongsToMany
    {
        return $this->belongsToMany(Bundle::class, 'bundle_Hotel');
    }

    public function room():HasMany
    {
        return $this->hasMany(room::class, 'hotel_id');
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function roomTypes(): HasMany
    {
        return $this->hasMany(RoomType::class, Room::class);
    }

}
