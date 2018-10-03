<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NullableTabelKegiatanPatroli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kegiatan_patroli', function (Blueprint $table) {
            $table->unsignedInteger('kategori_patroli_id')->nullable()->change();
            $table->date('tanggal_patroli')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kegiatan_patroli', function (Blueprint $table) {
            //
        });
    }
}
