<<<<<<< HEAD
<<<<<<<< HEAD:database/migrations/2023_09_02_062452_create_service_categories_table.php
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
        Schema::create('service_categories', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('category');
            $table->string('icon');
            $table->integer('is_active')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_categories');
    }
};
========
=======
>>>>>>> d374714ba139fd270db2938a2f3b9f8ffd2c6e85
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
<<<<<<< HEAD
        Schema::create('service_sub_categories', function (Blueprint $table) {
            $table->id('servicesubcategoryid');
            $table->string('categoryid');
            $table->string('servicesubcategory');
=======
        Schema::create('service_categories', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('category');
            $table->string('icon')->nullable();
            $table->integer('is_active')->default('0');
>>>>>>> d374714ba139fd270db2938a2f3b9f8ffd2c6e85
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD
        Schema::dropIfExists('service_sub_categories');
    }
};
>>>>>>>> d374714ba139fd270db2938a2f3b9f8ffd2c6e85:database/migrations/2023_09_04_114417_create_service_sub_categories_table.php
=======
        Schema::dropIfExists('service_categories');
    }
};
>>>>>>> d374714ba139fd270db2938a2f3b9f8ffd2c6e85
