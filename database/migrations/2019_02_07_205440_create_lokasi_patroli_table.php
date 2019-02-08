<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLokasiPatroliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi_patroli', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kegiatan_patroli_id')->nullable();
            $table->unsignedInteger('desa_kelurahan_id')->nullable();
            $table->double('latitude', 12, 9)->nullable();
            $table->double('longitude', 12, 9)->nullable();
            $table->double('suhu', 12, 9)->nullable();
            $table->double('kelembaban')->nullable();
            $table->double('kecepatan_angin', 12, 9)->nullable();
            $table->string('curah_hujan', 100)->nullable();
            $table->string('cuaca_siang', 200)->nullable();
            $table->string('cuaca_sore', 100)->nullable();
            $table->string('cuaca_pagi', 100)->nullable();
            $table->string('dc_kk', 100)->nullable();
            $table->string('ffmc_kkas', 100)->nullable();
            $table->string('fwi', 100)->nullable();
            $table->foreign('desa_kelurahan_id')->references('id')->on('desa_kelurahan');
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
        Schema::dropIfExists('lokasi_patroli');
    }
}
