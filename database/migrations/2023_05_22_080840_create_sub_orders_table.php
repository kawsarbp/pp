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
        Schema::create('sub_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_number')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->string('order_id')->nullable();

            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();

            $table->string('product_name')->nullable();
            $table->string('product_price')->nullable();
            $table->string('product_discount')->nullable();
            $table->string('product_total_price')->nullable();

            $table->unsignedBigInteger('product_qty')->nullable();
            $table->string('product_photo')->nullable();

            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('order_number')->references('id')->on('orders')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_orders');
    }
};
