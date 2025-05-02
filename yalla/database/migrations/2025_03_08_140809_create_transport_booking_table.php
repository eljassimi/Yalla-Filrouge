<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('transport_bookings', function (Blueprint $table) {
            $table->id();
            $table->float('distance_km');
            $table->float('total_price');
            $table->dateTime('booking_date');
            $table->foreignId('transport_service_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transport_bookings');
    }
};
