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
        Schema::create('company_materials', function (Blueprint $table) {
            $table->id();
            $table->string('material_name');
            $table->enum('material_size',['A1','A2','A3','A4','A5','A6']);
            $table->integer('material_quatity');
            $table->decimal('material_price', 8,2);
            $table->string('material_buyingdate');
            $table->decimal('total_price',8,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_materials');
    }
};
