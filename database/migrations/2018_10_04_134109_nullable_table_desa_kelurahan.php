<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NullableTableDesaKelurahan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('desa_kelurahan', function (Blueprint $table) {
            $table->unsignedInteger('posko_id')->nullable()->change();
            $table->string('nama', 400)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('desa_kelurahan', function (Blueprint $table) {
            //
        });
    }
}
