<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAktivitasHarianPatroliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aktivitas_harian_patroli', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('aktivitas_harian_id');
            $table->unsignedInteger('kegiatan_patroli_id');
            $table->foreign('aktivitas_harian_id')->references('id')->on('aktivitas_harian');
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
        Schema::drop('aktivitas_harian_patroli');
    }
}
