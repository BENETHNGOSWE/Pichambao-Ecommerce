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
        Schema::create('company_madenis', function (Blueprint $table) {
            $table->id();
            $table->string('debtor_name');
            $table->string('debtor_phonenumber');
            $table->string('debtor_address');
            $table->string('material_taken');
            $table->string('payment_date');
            $table->decimal('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_madenis');
    }
};
