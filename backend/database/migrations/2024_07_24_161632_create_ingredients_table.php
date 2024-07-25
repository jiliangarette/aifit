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
    Schema::create('ingredients', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('unit');
        $table->float('calories');
        $table->float('total_fat');
        $table->float('total_carbohydrates');
        $table->float('protein');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredients');
    }
};
