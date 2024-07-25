<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class NutritionController extends Controller
{
    public function calculate(Request $request)
    {
        $recipe = Recipe::findOrFail($request->recipe_id);
        $numServings = $request->num_servings;
        $servingSize = $request->serving_size;

        $totalCalories = 0;
        $totalFat = 0;
        $totalCarbs = 0;
        $totalProtein = 0;

        foreach ($recipe->recipeIngredients as $recipeIngredient) {
            $ingredient = $recipeIngredient->ingredient;
            $amount = $recipeIngredient->amount * ($servingSize / $recipe->serving_size) * $numServings;

            $totalCalories += ($ingredient->calories / 100) * $amount;
            $totalFat += ($ingredient->total_fat / 100) * $amount;
            $totalCarbs += ($ingredient->total_carbohydrates / 100) * $amount;
            $totalProtein += ($ingredient->protein / 100) * $amount;
        }

        return response()->json([
            'calories' => round($totalCalories, 2),
            'fat' => round($totalFat, 2),
            'carbs' => round($totalCarbs, 2),
            'protein' => round($totalProtein, 2)
        ]);
    }
}