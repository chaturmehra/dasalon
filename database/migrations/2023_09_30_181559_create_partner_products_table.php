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
        Schema::create('partner_products', function (Blueprint $table) {
            $table->id();
            $table->integer('partner_id');
            $table->integer('brand_name');
            $table->integer('product_category');
            $table->integer('product_type');
            $table->string('product_name');
            $table->longText('description');
            $table->integer('measure');
            $table->string('measure_value');
            $table->integer('supply_price');
            $table->integer('selling_price');
            $table->integer('markup_price');
            $table->string('sku');
            $table->integer('supplier');
            $table->string('product_image');
            $table->longText('stock_management');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_products');
    }
};
