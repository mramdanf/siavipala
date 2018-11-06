<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSosialisasiPenyadartahuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sosialisasi_penyadartahuan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('patroli_darat_id')->nullable();
            $table->foreign('patroli_darat_id')->references('id')->on('patroli_darat');
            $table->double('latitude', 12, 9)->nullable();
            $table->double('longitude', 12, 9)->nullable();
            $table->string('kegiatan', 1000)->nullable();
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
        Schema::dropIfExists('sosialisasi_penyadartahuan');
    }
}
