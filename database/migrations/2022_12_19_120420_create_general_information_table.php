<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_information', function (Blueprint $table) {
            $table->id();
            $table->text('barcode')->nullable();
            $table->string('item_name')->nullable();
            $table->string('category')->nullable();
            $table->text('description')->nullable();
            $table->integer('product_life_in_days')->nullable();
            $table->string('size')->nullable();
            $table->string('unit_of_measure')->nullable();
            $table->string('measurement_class')->nullable();
            $table->string('seasonality')->nullable();
            $table->float('cost')->nullable();
            $table->float('price')->nullable();
            $table->float('min_price')->nullable();
            $table->float('max_price')->nullable();
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
        Schema::dropIfExists('general_information');
    }
};
