<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TicketType extends Model
{
    protected $fillable = ['name', 'price'];

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }
}
