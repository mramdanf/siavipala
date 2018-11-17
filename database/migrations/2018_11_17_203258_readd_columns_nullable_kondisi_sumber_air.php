<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReaddColumnsNullableKondisiSumberAir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kondisi_sumber_air', function (Blueprint $table) {
            $table->double('latitude', 12, 9)->nullable();
            $table->double('longitude', 12, 9)->nullable();
            $table->double('panjang', 12, 9)->nullable();
            $table->double('lebar', 12, 9)->nullable();
            $table->double('kedalaman', 12, 9)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kondisi_sumber_air', function (Blueprint $table) {
            //
        });
    }
}
