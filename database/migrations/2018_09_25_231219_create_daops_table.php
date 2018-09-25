<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daops', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('provinsi_id');
            $table->foreign('provinsi_id')->references('id')->on('provinsi');
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
        Schema::drop('daops');
    }
}
