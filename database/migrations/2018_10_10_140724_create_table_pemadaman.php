<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePemadaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemadaman', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('patroli_darat_id')->nullable();
            $table->double('latitude', 12, 9)->nullable();
            $table->double('longitude', 12, 9)->nullable();
            $table->double('luas_terbakar', 12, 9)->nullable();
            $table->string('tipe_kebakaran', 300)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemadaman');
    }
}
