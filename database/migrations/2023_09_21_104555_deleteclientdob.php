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
<<<<<<<< HEAD:database/migrations/2023_09_19_052555_add_created_by_to_services_table.php
        Schema::table('services', function (Blueprint $table) {
            $table->integer('created_by')->default(0)->after('is_active');
========
         Schema::table('clients', function (Blueprint $table) {
             $table->dropColumn('dob');
>>>>>>>> e9659ffbfd287cd2c2e7735cb24e2436186200af:database/migrations/2023_09_21_104555_deleteclientdob.php
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:database/migrations/2023_09_19_052555_add_created_by_to_services_table.php
        Schema::table('services', function (Blueprint $table) {
            //
        });
========
        //
>>>>>>>> e9659ffbfd287cd2c2e7735cb24e2436186200af:database/migrations/2023_09_21_104555_deleteclientdob.php
    }
};
