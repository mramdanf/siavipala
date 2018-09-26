<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKondisiSumberAirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kondisi_sumber_air', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('patroli_darat_id');
            $table->unsignedInteger('sumber_air_id');
            $table->double('latitude', 12, 9);
            $table->double('longitude', 12, 9);
            $table->double('panjang', 12, 9);
            $table->double('lebar', 12, 9);
            $table->double('kedalaman', 12, 9);
            $table->foreign('patroli_darat_id')->references('id')->on('patroli_darat');
            $table->foreign('sumber_air_id')->references('id')->on('sumber_air');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kondisi_sumber_air');
    }
}
