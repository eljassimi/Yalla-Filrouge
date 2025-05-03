<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userSelections extends Model
{
    protected $table = 'user_selections';
    protected $fillable = ["user_id","event_id","hotel_id","room_price","ticket_type_id", "ticket_quantity"
        ,"transport_booking_id",'transport_price',"check_in_date","check_out_date",'confirmed'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ticketType()
    {
        return $this->belongsTo(TicketType::class, 'ticket_type_id');
    }
}


