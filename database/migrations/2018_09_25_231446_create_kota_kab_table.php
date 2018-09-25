<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKotaKabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kota_kab', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('daops_id');
            $table->foreign('daops_id')->references('id')->on('daops');
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
        Schema::drop('kota_kab');
    }
}
