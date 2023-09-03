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
        Schema::create('appointment_configs', function (Blueprint $table) {
            $table->id();
            $table->string('time_least_count');
            $table->string('soonest_appointment_booking_time');
            $table->string('latest_appointment_booking_time');
            $table->string('max_booking_allowed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_configs');
    }
};
