<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropPotensiKondisiKarhutlaKondisiTanah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kondisi_tanah', function (Blueprint $table) {
            $table->dropColumn('potensi_karhutla_id');
            $table->dropColumn('kondisi_karhutla_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kondisi_tanah', function (Blueprint $table) {
            //
        });
    }
}
