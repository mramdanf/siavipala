<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKondisiHasilUjiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_uji', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('patroli_darat_id');
            $table->foreign('patroli_darat_id')->references('id')->on('patroli_darat');
            $table->string('nama_pengujian', 400);
            $table->string('hasil');
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
        Schema::drop('hasil_uji');
    }
}
