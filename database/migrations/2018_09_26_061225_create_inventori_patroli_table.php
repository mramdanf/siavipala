<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriPatroliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventori_patroli', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kegiatan_patroli_id');
            $table->unsignedInteger('inventori_id');
            $table->foreign('kegiatan_patroli_id')->references('id')->on('kegiatan_patroli');
            $table->foreign('inventori_id')->references('id')->on('inventori');
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
        Schema::drop('inventori_patroli');
    }
}
