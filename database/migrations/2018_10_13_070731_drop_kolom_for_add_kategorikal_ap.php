<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropKolomForAddKategorikalAp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patroli_darat', function (Blueprint $table) {
            $table->dropColumn(['dc_kk', 'ffmc_kkas', 'fwi']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patroli_darat', function (Blueprint $table) {
            //
        });
    }
}
