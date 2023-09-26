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
        Schema::create('partner_book_a_look', function (Blueprint $table) {
            $table->id('pbal_id');
            $table->integer('partner_id');
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('service_id');
            $table->string('venues')->nullable();
            $table->string('gender');
            $table->string('duration');
            $table->string('look_image')->nullable();
            $table->integer('walk_in_price')->nullable();
            $table->integer('online_price');
            $table->integer('off_peak_price');
            $table->longText('description')->nullable();
            $table->longText('staff_pricing')->nullable();
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_book_a_look');
    }
};
