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
        Schema::create('client_1', function (Blueprint $table) {
        $table->id();
        $table->integer('client_id');
        $table->string('image');
        $table->string('gender');
        $table->string('dob');
        $table->string('address');
        $table->string('notes');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_1');
    }
};
