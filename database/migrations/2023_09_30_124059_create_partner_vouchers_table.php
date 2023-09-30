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
        Schema::create('partner_vouchers', function (Blueprint $table) {
            $table->id('pv_id');
            $table->integer('partner_id');
            $table->string('voucher_name');
            $table->string('service_ids');
            $table->string('venues')->nullable();
            $table->string('gender');
            $table->string('duration');
            $table->integer('number_session');
            $table->string('validity');
            $table->integer('total_service_value');
            $table->integer('voucher_price');
            $table->longText('description')->nullable();
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_vouchers');
    }
};
