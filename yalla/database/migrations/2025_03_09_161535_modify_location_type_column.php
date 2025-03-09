<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ModifyLocationTypeColumn extends Migration
{
    public function up()
    {
        DB::statement("CREATE TYPE location_type AS ENUM ('Event', 'Accommodation', 'User')");

        Schema::table('locations', function (Blueprint $table) {

            if (Schema::hasColumn('locations', 'LocationType')) {
                $table->dropColumn('LocationType');
            }
        });

        Schema::table('locations', function (Blueprint $table) {
            $table->enum('LocationType', ['Event', 'Accommodation', 'User'])->default('Event'); // Add the column again with enum type
        });
    }

    public function down()
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->dropColumn('LocationType');
        });

        DB::statement('DROP TYPE location_type');
    }
}
