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
        Schema::create('reward_histories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('paymentOrderId')->nullable();
            $table->bigInteger('invoice_id')->nullable();
            $table->bigInteger('payment_id')->nullable();
            $table->bigInteger('reference_id')->nullable();
            $table->double('fuel_id')->nullable();
            $table->double('quantity',8,2)->nullable();
            $table->double('order_amount',8,2)->nullable();
            $table->double('points_earned')->nullable();
            $table->string('payment_type')->nullable();
            $table->integer(column: 'branch_id')->nullable();
            $table->timestamps();




        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reward_histories');
    }
};
