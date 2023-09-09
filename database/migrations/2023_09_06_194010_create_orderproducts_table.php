<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orderproducts', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->string('product_name');
            $table->bigInteger('product_id')->unsigned();;
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('order_id')->references('id')->on('orders')
            ->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderproducts');
    }
};
