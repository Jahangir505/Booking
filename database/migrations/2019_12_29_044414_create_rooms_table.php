<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('room_type')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->nullable()->default('enabled');
            $table->decimal('price')->nullable()->default(0);
            $table->integer('total_room')->nullable()->default(1);
            $table->integer('available_room')->nullable()->default(1);
            $table->integer('min_stay')->nullable()->default(1);
            $table->integer('max_adults')->nullable()->default(0);
            $table->integer('max_children')->nullable()->default(2);
            $table->integer('no_of_extra_beds')->nullable()->default(0);
            $table->integer('extra_bed_charge')->nullable()->default(0);
            $table->json('facilities')->nullable();

            $table->unsignedBigInteger('hotel_id')->nullable();

            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
