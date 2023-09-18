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
        Schema::create('recommended_packages', function (Blueprint $table) {
            $table->id('rp_id');
            $table->string('packagename');
            $table->string('gender');
            $table->string('categoryid');
            $table->string('subcategoryid');
            $table->string('serviceid');
            $table->string('partnerid');
            $table->string('businesstypeid');
            $table->string('uniqueid');
            $table->string('discount');
            $table->integer('is_active')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recommended_packages');
    }
};
