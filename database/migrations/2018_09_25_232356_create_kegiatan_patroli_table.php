<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatanPatroliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan_patroli', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kategori_patroli_id');
            $table->foreign('kategori_patroli_id')->references('id')->on('kategori_patroli');
            $table->date('tanggal_patroli');
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
        Schema::drop('kegiatan_patroli');
    }
}
