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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->text('barcode')->nullable();
            $table->string('item_name')->nullable();
            // $table->string('seasonality')->nullable();
            // $table->string('inventory_status')->nullable();
            // $table->string('mass')->nullable();
            $table->string('stock_quantity')->nullable();

            $table->text('description')->nullable();
            $table->string('expiration_date')->nullable();
            $table->float('cost')->nullable();
            $table->string('category')->nullable();
            $table->float('price')->nullable();
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
        Schema::dropIfExists('inventory');
    }
};
