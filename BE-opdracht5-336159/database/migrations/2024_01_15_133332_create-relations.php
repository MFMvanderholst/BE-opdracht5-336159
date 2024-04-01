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
        

        Schema::table('stockrooms', function (Blueprint $table) {
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products');
        });

        Schema::table('product_per_allergens', function (Blueprint $table) {
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products');
            $table->foreign('allergen_id')
                  ->references('id')
                  ->on('allergens');
        });

        Schema::table('product_per_suppliers', function (Blueprint $table) {
            $table->foreign('supplier_id')
                  ->references('id')
                  ->on('suppliers');
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products');
        });

        Schema::table('suppliers', function (Blueprint $table) {
            $table->foreign('contact_id')
                  ->references('id')
                  ->on('contacts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stockrooms');
        Schema::dropIfExists('product_per_allergens');
        Schema::dropIfExists('product_per_suppliers');
        Schema::dropIfExists('suppliers');
    }
};
