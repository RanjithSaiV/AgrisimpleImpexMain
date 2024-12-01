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
        Schema::table('orders', function (Blueprint $table) {
            //
            $table->string(column: 'paymentOrderId')->nullable()->after('user_id');
            $table->string(column: 'invoice_id')->nullable()->after('paymentOrderId');
            $table->string(column: 'payment_id')->nullable()->after('invoice_id');
            $table->string(column: 'reference_id')->nullable()->after('payment_id');
            $table->string(column: 'fleetcard_id')->nullable()->after('reference_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            //


        });
    }
};
