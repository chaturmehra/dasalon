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
        Schema::create('partner_memberships', function (Blueprint $table) {
            $table->id('pm_id');
            $table->integer('partner_id');
            $table->string('membership_name');
            $table->string('venues')->nullable();
            $table->string('validity');
            $table->string('membership_color');
            $table->integer('total_value');
            $table->integer('membership_price');
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
        Schema::dropIfExists('partner_memberships');
    }
};
