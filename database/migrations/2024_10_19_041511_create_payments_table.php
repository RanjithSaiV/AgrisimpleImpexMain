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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('payment_id')->nullable();
            $table->string('razorpayOrderId')->nullable();
            $table->integer('user_id');
            $table->enum('user_type',['customer','employer','Amin'])->nullable();
            $table->double('amount',18,2)->nullable()->default(0);
            
            $table->string('payment_method')->nullable();
            $table->string('payment_for')->nullable();
            $table->integer('order_id')->nullable();
            $table->longText('comment')->nullable();
            $table->enum('status',['success','failed','refund','pending'])->nullable()->default('pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
