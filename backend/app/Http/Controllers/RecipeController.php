<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\RecipeIngredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::with('recipeIngredients.ingredient')
            ->get(['id', 'name', 'image_path', 'description', 'healthAndBenefits', 'serving_size'])
            ->map(function ($recipe) {
                $recipe->image_url = Storage::disk('public')->url($recipe->image_path);
                return $recipe;
            });
    
        return response()->json($recipes);
    }


    public function getIngredients(Recipe $recipe)
    {
        $ingredients = $recipe->ingredients;
        return response()->json($ingredients);
    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'healthAndBenefits' => 'required|string',
            'serving_size' => 'required|integer|min:1',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB Max

            'ingredients' => 'required|array',
            'ingredients.*.id' => 'required|exists:ingredients,id',
            'ingredients.*.amount' => 'required|numeric|min:0',
            'ingredients.*.unit' => 'required|string',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('recipes', 'public');
        } else {
            return response()->json(['error' => 'Image is required'], 400);
        }

        // Create the recipe
        $recipe = Recipe::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'healthAndBenefits' => $validatedData['healthAndBenefits'],
            'serving_size' => $validatedData['serving_size'],
            'image_path' => $imagePath,
        ]);

        // insert recipe ingredients to recipe ingredients table
        foreach ($validatedData['ingredients'] as $ingredientData) {
            RecipeIngredient::create([
                'recipe_id' => $recipe->id,
                'ingredient_id' => $ingredientData['id'],
                'amount' => $ingredientData['amount'],
                'unit' => $ingredientData['unit'],
            ]);
        }

        // Load the ingredients relationship before returning
        $recipe->load('recipeIngredients.ingredient');

        // Return the created recipe as a JSON response
        // return response()->json($recipe, 201);
        return response()->json([
                    'message' => 'successfully created a recipe',
                ]);
    }



}