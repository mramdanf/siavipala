<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NullableTableKotaKab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kota_kab', function (Blueprint $table) {
            $table->unsignedInteger('daops_id')->nullable()->change();
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
        Schema::table('kota_kab', function (Blueprint $table) {
            //
        });
    }
}
