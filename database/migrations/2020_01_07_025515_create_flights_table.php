<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('departure_city')->nullable()->nullable();
            $table->string('arival_city')->nullable();
            $table->string('class')->nullable();
            $table->string('transit')->nullable();
            $table->date('departure_date')->nullable();
            $table->date('arival_date')->nullable();
            $table->string('departure_time')->nullable();
            $table->string('arival_time')->nullable();
            $table->string('duration')->nullable();
            $table->unsignedBigInteger('route_id')->nullable();
            $table->unsignedBigInteger('airline_id')->nullable();
            $table->unsignedBigInteger('flightprice_id')->nullable();

            $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
            $table->foreign('airline_id')->references('id')->on('airlines')->onDelete('cascade');
            $table->foreign('flightprice_id')->references('id')->on('flight_prices')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
