<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLokasiPatroliIdPatroliDaratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patroli_darat', function (Blueprint $table) {
            $table->unsignedInteger('lokasi_patroli_id')->nullable();
            $table->foreign('lokasi_patroli_id')->references('id')->on('lokasi_patroli');
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
            $table->dropColumn('lokasi_patroli_id');
        });
    }
}
