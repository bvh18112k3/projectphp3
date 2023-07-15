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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_name');
            $table->string('order_address');
            $table->char('order_phone', 10);
            $table->string('order_PTTT');
            $table->integer('order_status');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('CASCADE')->OnUpdate('CASCADE');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
