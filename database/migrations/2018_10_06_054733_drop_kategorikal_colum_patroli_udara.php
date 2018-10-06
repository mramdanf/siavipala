<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropKategorikalColumPatroliUdara extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patroli_udara', function (Blueprint $table) {
            $table->dropColumn([
                'cuaca_pagi',
                'cuaca_sore',
                'cuaca_siang',
                'curah_hujan'
            ]);
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
