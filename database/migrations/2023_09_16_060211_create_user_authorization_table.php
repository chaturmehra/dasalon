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
        Schema::create('user_authorization', function (Blueprint $table) {
            $table->id();
            $table->string('page')->nullable();
            $table->string('subpage')->nullable();
            $table->integer('role_id');
            $table->integer('property_value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_authorization');
    }
};
