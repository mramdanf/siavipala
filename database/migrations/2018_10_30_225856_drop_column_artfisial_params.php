<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnArtfisialParams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patroli_udara', function (Blueprint $table) {
            $table->dropColumn('dc_kk');
            $table->dropColumn('ffmc_kkas');
            $table->dropColumn('fwi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patroli_udara', function (Blueprint $table) {
            //
        });
    }
}
