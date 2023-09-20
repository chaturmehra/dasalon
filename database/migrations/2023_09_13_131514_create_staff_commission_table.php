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
        Schema::create('staff_commission', function (Blueprint $table) {
            $table->id('sc_id');
            $table->integer('staff_id');
            $table->integer('service')->nullable();
            $table->integer('book_look')->nullable();
            $table->integer('package')->nullable();
            $table->integer('voucher')->nullable();
            $table->integer('membership')->nullable();
            $table->integer('product')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff_commission');
    }
};
