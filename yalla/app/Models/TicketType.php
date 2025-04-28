<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TicketType extends Model
{
    protected $fillable = ['name', 'price','seats','event_id'];

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }
    public function Event(): belongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
