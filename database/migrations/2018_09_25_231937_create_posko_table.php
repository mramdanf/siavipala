<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoskoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posko', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kecamatan_id');
            $table->foreign('kecamatan_id')->references('id')->on('kecamatan');
            $table->string('nama', 400);
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
        Schema::drop('posko');
    }
}
