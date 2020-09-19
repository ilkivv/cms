<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('count_products')->unsigned();
            $table->float('sum', 8, 2)->unsigned()->default(0.00);
            $table->float('delivery', 8, 2)->unsigned()->default(0.00);
            $table->float('total', 8, 2)->unsigned()->default(0.00);
            $table->integer('pay_id')->unsigned();
            $table->integer('payed')->default(0);
            $table->integer('status_id')->unsigned();
            $table->integer('delivery_id')->unsigned();
            $table->text('comment')->nullable();
            $table->time('create_date');
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
        Schema::dropIfExists('orders');
    }
}
