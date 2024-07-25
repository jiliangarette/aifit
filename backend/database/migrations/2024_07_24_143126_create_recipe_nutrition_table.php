<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('recipe_nutrition', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recipe_id')->constrained()->onDelete('cascade');
            $table->integer('serving_size'); // in grams
            $table->integer('calories');
            $table->integer('fat'); // in grams
            $table->integer('protein'); // in grams
            $table->integer('carbohydrates'); // in grams
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipe_nutrition');
    }
};
