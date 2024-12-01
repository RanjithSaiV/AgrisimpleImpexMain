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
            $table->bigInteger('user_id')->nullable();
            $table->double('fuel_id')->nullable();
            $table->double('quantity')->nullable();
            $table->double('order_amount',8,2)->nullable();
            $table->double('points_used')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('order_status')->nullable();
            $table->string('payment_status')->nullable();
            $table->integer(column: 'branch_id')->nullable();


            $table->timestamps();
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
