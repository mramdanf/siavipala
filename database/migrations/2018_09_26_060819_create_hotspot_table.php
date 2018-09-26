<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotspotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotspot', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('satelit_id');
            $table->unsignedInteger('kegiatan_patroli_id');
            $table->foreign('satelit_id')->references('id')->on('satelit');
            $table->foreign('kegiatan_patroli_id')->references('id')->on('kegiatan_patroli');
            $table->string('deskripsi');
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
        Schema::drop('hotspot');
    }
}
