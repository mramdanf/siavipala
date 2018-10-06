<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKategorikalColumnKondisiVegetasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kondisi_vegetasi', function (Blueprint $table) {
            $table->unsignedInteger('kategori_kondisi_vegetasi_id')->nullable();
            $table->unsignedInteger('potensi_karhutla_id')->nullable();
            $table->unsignedInteger('kondisi_karhutla_id')->nullable();
            $table->foreign('kategori_kondisi_vegetasi_id')->references('id')->on('kategori_kondisi_vegetasi');
            $table->foreign('potensi_karhutla_id')->references('id')->on('potensi_karhutla');
            $table->foreign('kondisi_karhutla_id')->references('id')->on('kondisi_karhutla');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kondisi_vegetasi', function (Blueprint $table) {
            //
        });
    }
}
