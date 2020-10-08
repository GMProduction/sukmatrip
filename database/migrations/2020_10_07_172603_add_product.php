<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['Hotel', 'Villa'])->default('Hotel');
            $table->integer('price')->default(0);
            $table->bigInteger('destionation_id')->unsigned()->nullable(true);
            $table->bigInteger('duration_id')->unsigned()->nullable(true);
            $table->foreign('destionation_id')->references('id')->on('destinasis');
            $table->foreign('duration_id')->references('id')->on('durations');
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
        Schema::dropIfExists('lodging');
    }
}
