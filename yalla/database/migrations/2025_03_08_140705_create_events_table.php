<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->dateTime('date');
            $table->integer('available_spots');
            $table->text('description')->nullable();
            $table->string('event_type'); // 'match' or 'fan_zone'
            $table->foreignId('location_id')->constrained();
            $table->string('flag_team_1')->nullable();
            $table->string('flag_team_2')->nullable();
            $table->string('affiche_image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
};
