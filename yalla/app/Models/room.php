<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
class room extends Model
{
    protected $fillable = ['hotel_id', 'room_type', 'price_per_night','number_of_rooms'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

}
