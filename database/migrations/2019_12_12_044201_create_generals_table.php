<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('copyright')->nullable();
            $table->string('default_lang')->nullable();
            $table->string('default_currency')->nullable();
            $table->string('business_logo')->nullable();
            $table->string('business_name')->nullable();
            $table->string('favicon')->nullable();
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('offline_message')->nullable();
            $table->integer('booking_expiry')->nullable()->default(1);
            $table->enum('offline', [1,0])->nullable()->default(0);
            $table->enum('multi_lang', [1,0])->nullable()->default(0);
            $table->enum('multi_currency', [1,0])->nullable()->default(0);
            $table->enum('restricated', [1,0])->nullable()->default(0);
            $table->enum('user_regi', [1,0])->nullable()->default(1);
            $table->enum('user_approval', [1,0])->nullable()->default(1);
            $table->enum('review_approval', [1,0])->nullable()->default(0);
            $table->enum('supplier_regi', [1,0])->nullable()->default(1);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generals');
    }
}
