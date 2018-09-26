<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonidisiTanahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kondisi_tanah', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('patroli_darat_id');
            $table->unsignedInteger('tanah_id');
            $table->double('latitude', 12, 9);
            $table->double('longitude', 12, 9);
            $table->double('luas', 12, 9);
            $table->double('kedalaman_gambut', 12, 9);
            $table->foreign('patroli_darat_id')->references('id')->on('patroli_darat');
            $table->foreign('tanah_id')->references('id')->on('tanah');
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
        Schema::drop('kondisi_tanah');
    }
}
