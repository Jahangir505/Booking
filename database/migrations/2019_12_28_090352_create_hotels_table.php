<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('location')->nullable();
            $table->integer('stars')->nullable()->default(1);
            $table->json('facilities')->nullable();
            $table->text('description')->nullable();
            $table->string('address')->nullable();
            $table->string('hotel_type')->nullable();
            $table->tinyInteger('featured')->default(0);
            $table->string('status')->default('enabled');
            $table->string('address_on_map')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->float('commission', 8, 2)->nullable();
            $table->float('vat_tax', 8, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
