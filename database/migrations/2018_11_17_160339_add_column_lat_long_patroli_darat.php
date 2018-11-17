<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnLatLongPatroliDarat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patroli_darat', function (Blueprint $table) {
            $table->double('latitude', 12, 9)->nullable();
            $table->double('longitude', 12, 9)->nullable();
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
