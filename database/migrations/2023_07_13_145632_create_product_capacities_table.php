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
        Schema::create('product_capacities', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->float('price');
            $table->foreignId('product_id')->references('id')->on('products')->onDelete('CASCADE')->OnUpdate('CASCADE');;
            $table->foreignId('capacity_id')->references('id')->on('capacities')->onDelete('CASCADE')->OnUpdate('CASCADE');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_capacities');
    }
};
