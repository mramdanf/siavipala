<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnKadarAirbahanbakar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patroli_darat', function (Blueprint $table) {
            $table->unsignedInteger('kadar_air_bahan_bakar_id')->nullable();
            $table->foreign('kadar_air_bahan_bakar_id')->references('id')->on('kadar_air_bahan_bakar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patroli_darat', function (Blueprint $table) {
            //
        });
    }
}
