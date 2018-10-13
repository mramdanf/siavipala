<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKategorikalArtifisialParam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patroli_darat', function (Blueprint $table) {
            $table->unsignedInteger('fwi_id')->nullable();
            $table->unsignedInteger('ffmc_kkas_id')->nullable();
            $table->unsignedInteger('dc_kk_id')->nullable();
            $table->foreign('fwi_id')->references('id')->on('artifisial_param');
            $table->foreign('ffmc_kkas_id')->references('id')->on('artifisial_param');
            $table->foreign('dc_kk_id')->references('id')->on('artifisial_param');
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
