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
        Schema::create('tours_packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->string('slug');
            $table->string('duration');
            $table->string('price');
            $table->string('discount');
            $table->string('location');
            $table->string('featured_image');
            $table->longText('description');
            $table->json('other_images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours_packages');
    }
};
