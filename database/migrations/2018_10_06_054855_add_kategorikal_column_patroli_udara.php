<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKategorikalColumnPatroliUdara extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patroli_udara', function (Blueprint $table) {
            //
            $table->unsignedInteger('cuaca_siang_id');
            $table->unsignedInteger('cuaca_pagi_id');
            $table->unsignedInteger('cuaca_sore_id');
            $table->unsignedInteger('curah_hujan_id');
            $table->foreign('cuaca_siang_id')->references('id')->on('cuaca');
            $table->foreign('cuaca_pagi_id')->references('id')->on('cuaca');
            $table->foreign('cuaca_sore_id')->references('id')->on('cuaca');
            $table->foreign('curah_hujan_id')->references('id')->on('curah_hujan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patroli_udara', function (Blueprint $table) {
            //
        });
    }
}
