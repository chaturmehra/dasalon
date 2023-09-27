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
        Schema::create('partner_packages', function (Blueprint $table) {
            $table->id('pp_id');
            $table->integer('partner_id');
            $table->string('package_name');
            $table->string('service_ids');
            $table->string('venues')->nullable();
            $table->string('gender');
            $table->string('duration');
            $table->integer('total_price');
            $table->string('total_duration');
            $table->integer('walk_in_price');
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
        Schema::dropIfExists('partner_packages');
    }
};
