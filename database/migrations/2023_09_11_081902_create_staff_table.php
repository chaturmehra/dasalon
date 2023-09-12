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
        Schema::create('staff', function (Blueprint $table) {
            $table->id('staff_id');
            $table->integer('partner_id');
            $table->string('gender')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->integer('online_status')->nullable();
            $table->integer('staff_role')->nullable();
            $table->longText('profile_description')->nullable();
            $table->string('joining_date')->nullable();
            $table->integer('venues')->nullable();
            $table->string('staff_working_days')->nullable();
            $table->integer('staff_advance_setting')->nullable();
            $table->string('schedule_type')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->json('monday_hours')->nullable();
            $table->json('tuesday_hours')->nullable();
            $table->json('wednesday_hours')->nullable();
            $table->json('thursday_hours')->nullable();
            $table->json('friday_hours')->nullable();
            $table->json('saturday_hours')->nullable();
            $table->json('sunday_hours')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
