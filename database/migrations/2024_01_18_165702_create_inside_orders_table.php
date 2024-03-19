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
        Schema::create('inside_orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_name');
            $table->string('order_type');
            $table->decimal('order_amount', 8,2);
            $table->decimal('order_paidedamount', 8,2);
            $table->decimal('order_totaldeptamount', 8,2);
            $table->enum('order_status', ['paid','unpaid', 'partial']);
            $table->string('order_enddate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inside_orders');
    }
};
