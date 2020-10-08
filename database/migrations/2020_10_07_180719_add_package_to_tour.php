<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPackageToTour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages_tours', function (Blueprint $table) {
            $table->bigInteger('package_id')->unsigned();
            $table->bigInteger('tour_id')->unsigned();
            $table->unique(['package_id', 'tour_id']);
            $table->foreign('package_id')->references('id')->on('packages');
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
        Schema::dropIfExists('packages_tours');
    }
}
