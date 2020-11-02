<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSailingDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sailing_dates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('departure_date')->nullable();
            $table->date('arival_date')->nullable();
            $table->integer('number_of_nights')->nullable();
            $table->string('destination')->nullable();
            $table->string('departure_port')->nullable();
            $table->string('arival_port')->nullable();
            $table->unsignedBigInteger('cruise_id')->nullable();

            $table->foreign('cruise_id')->references('id')->on('cruises')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sailing_dates');
    }
}
