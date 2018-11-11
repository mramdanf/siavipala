<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKolumnPemilikLahanTipeKebaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pemadaman', function (Blueprint $table) {
            $table->unsignedInteger('tipe_kebakaran_id')->nullable();
            $table->unsignedInteger('pemilik_lahan_id')->nullable();
            $table->foreign('tipe_kebakaran_id')->references('id')->on('tipe_kebakaran');
            $table->foreign('pemilik_lahan_id')->references('id')->on('pemilik_lahan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pemadaman', function (Blueprint $table) {
            //
        });
    }
}
