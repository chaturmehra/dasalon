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
        Schema::create('system_manager_permissions', function (Blueprint $table) {
            $table->id('sysmanagerperm_id');
            $table->string('page');
            $table->string('subpage');
            $table->integer('user_id');
            $table->string('property_value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_manager_permissions');
    }
};
