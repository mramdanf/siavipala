<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesaKelurahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desa_kelurahan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('posko_id');
            $table->foreign('posko_id')->references('id')->on('posko');
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
        Schema::drop('desa_kelurahan');
    }
}
