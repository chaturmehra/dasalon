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
        Schema::create('partner_type_properties', function (Blueprint $table) {
            $table->id();
            $table->string('property');
            $table->string('remark');
            $table->string('option');
            $table->integer('Salon_status')->default(0);
            $table->integer('Freelancer_status')->default(0);
            $table->integer('Salon_with_home_service_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_type_properties');
    }
};
