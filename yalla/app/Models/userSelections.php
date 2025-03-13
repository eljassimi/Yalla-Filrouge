<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userSelections extends Model
{
    protected $table = 'user_selections';
    protected $fillable = ["user_id","event_id","ticket_type_id", "ticket_quantity",
        "accommodation_id","transport_booking_id","check_in_date","check_out_date",'confirmed'];
}
