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
            $table->integer('user_id');
            $table->integer('partner_id');
            $table->string('gender')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->integer('online_status')->nullable();
            $table->integer('staff_role')->nullable();
            $table->string('profile_image')->nullable();
            $table->longText('profile_description')->nullable();
            $table->date('joining_date')->nullable();
            $table->string('venues')->nullable();
            $table->string('staff_working_days')->nullable();
            $table->integer('staff_advance_setting')->nullable();
            $table->integer('schedule_type')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('end_date_type')->nullable();
            $table->longText('monday_hours')->nullable();
            $table->longText('tuesday_hours')->nullable();
            $table->longText('wednesday_hours')->nullable();
            $table->longText('thursday_hours')->nullable();
            $table->longText('friday_hours')->nullable();
            $table->longText('saturday_hours')->nullable();
            $table->longText('sunday_hours')->nullable();
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
