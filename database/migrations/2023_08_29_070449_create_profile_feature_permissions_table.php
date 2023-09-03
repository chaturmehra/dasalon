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
        Schema::create('profile_feature_permissions', function (Blueprint $table) {
            $table->id('profilefeaturepermission_id');
            $table->integer('role_id');
            $table->integer('profilefeature_id');
            $table->string('property_value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_feature_permissions');
    }
};
