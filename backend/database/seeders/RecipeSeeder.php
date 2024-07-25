<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\Recipe;
use App\Models\RecipeIngredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Recipe::factory()
        ->count(10)
        ->create()
        ->each(function ($recipe) {
            $ingredients = Ingredient::factory()->count(rand(3, 8))->create();
            foreach ($ingredients as $ingredient) {
                RecipeIngredient::factory()->create([
                    'recipe_id' => $recipe->id,
                    'ingredient_id' => $ingredient->id,
                ]);
            }
        });
}
}
