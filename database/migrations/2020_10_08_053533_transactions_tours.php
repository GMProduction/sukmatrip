<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransactionsTours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions_tours', function (Blueprint $table) {
            $table->bigInteger('transaction_id')->unsigned();
            $table->bigInteger('tour_id')->unsigned();
            $table->unique(['transaction_id', 'tour_id']);
            $table->foreign('transaction_id')->references('id')->on('transactions');
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
        Schema::dropIfExists('transactions_tours');
    }
}
