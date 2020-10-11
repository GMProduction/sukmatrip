<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PaketsTours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakets_tours', function (Blueprint $table) {
            $table->bigInteger('paket_id')->unsigned();
            $table->bigInteger('tour_id')->unsigned();
            $table->unique(['paket_id', 'tour_id']);
            $table->foreign('paket_id')->references('id')->on('pakets');
            $table->foreign('tour_id')->references('id')->on('tours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pakets_tours');
    }
}
