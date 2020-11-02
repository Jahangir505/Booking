<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('take_of_time')->nullable();
            $table->date('take_of_date')->nullable();
            $table->decimal('price_per_adult')->nullable();
            $table->decimal('price_per_child')->nullable();
            $table->decimal('price_per_infant')->nullable();
            $table->integer('available_seat')->nullable();
            $table->unsignedBigInteger('route_id')->nullable();

            $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flight_prices');
    }
}
