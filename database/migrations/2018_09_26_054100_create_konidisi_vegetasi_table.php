<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonidisiVegetasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kondisi_vegetasi', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('patroli_darat_id');
            $table->unsignedInteger('vegetasi_id');
            $table->foreign('patroli_darat_id')->references('id')->on('patroli_darat');
            $table->foreign('vegetasi_id')->references('id')->on('vegetasi');
            $table->double('latitude', 12, 9);
            $table->double('longitude', 12, 9);
            $table->string('konidisi');
            $table->string('potensi_karhutla', 200);
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
        Schema::drop('kondisi_vegetasi');
    }
}
