<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnLuasDipadamkanHasilPemadaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pemadaman', function (Blueprint $table) {
            $table->double('luas_dipadamkan', 12, 9)->nullable();
            $table->string('hasil_pemadaman', 900)->nullable();
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
