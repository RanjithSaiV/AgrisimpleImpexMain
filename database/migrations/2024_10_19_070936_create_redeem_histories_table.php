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
        Schema::create('redeem_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id')->nullable();
            $table->string('user')->nullable();
            $table->string('invoice_id')->nullable();
            $table->string('branch')->nullable();
            $table->string('fuel')->nullable();
            $table->double('quantiy',8,2)->nullable();
            $table->string('redeem_points')->nullable();
            $table->string('order_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('redeem_histories');
    }
};
