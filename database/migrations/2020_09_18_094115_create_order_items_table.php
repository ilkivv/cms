<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->float('price', 8, 2)->unsigned()->default(0.00);
            $table->float('count', 8, 2)->unsigned()->default(0.00);
            $table->float('total', 8, 2)->unsigned()->default(0.00);
            $table->float('total_with_percent', 8, 2)->unsigned()->default(0.00);
            $table->integer('percent')->default(0);
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
        Schema::dropIfExists('order_items');
    }
}
