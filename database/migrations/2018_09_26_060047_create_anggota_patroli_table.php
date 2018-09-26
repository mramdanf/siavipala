<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotaPatroliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_patroli', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('anggota_id');
            $table->unsignedInteger('kegiatan_patroli_id');
            $table->foreign('anggota_id')->references('id')->on('anggota');
            $table->foreign('kegiatan_patroli_id')->references('id')->on('kegiatan_patroli');
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
        Schema::drop('anggota_patroli');
    }
}
