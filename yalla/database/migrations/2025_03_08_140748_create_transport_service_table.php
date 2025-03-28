<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('transport_services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->float('price_per_km');
            $table->integer('available_seats');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transport_services');
    }
};
