<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelSebaranHotspot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sebaran_hotspot', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('hotspot_sipongi_id')->nullable();
            $table->double('latitude', 12, 9)->nullable();
            $table->double('longitude', 12, 9)->nullable();
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
        Schema::dropIfExists('sebaran_hotspot');
    }
}
