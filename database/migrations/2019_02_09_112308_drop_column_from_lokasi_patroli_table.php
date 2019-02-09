<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnFromLokasiPatroliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lokasi_patroli', function (Blueprint $table) {
            $table->dropColumn('curah_hujan');
            $table->dropColumn('cuaca_siang');
            $table->dropColumn('cuaca_pagi');
            $table->dropColumn('cuaca_sore');
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
        Schema::table('lokasi_patroli', function (Blueprint $table) {
            //
        });
    }
}
