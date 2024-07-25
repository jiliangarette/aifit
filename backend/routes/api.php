<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\NutritionController;


// Route::get('/user', function (Request $request) {
//     return response()->json([
//         'test' => 'this is a test json',
//         'number' => 42,
//         'boolean' => true,
//         'null_value' => null,
//         'array' => [1, 2, 'three'],
//     ]);
// });


// Route::get('/recipes/{id}', [RecipeController::class, 'show']);
// Route::post('/recipes/calculate', [RecipeController::class, 'calculate']);



Route::get('/recipes', [RecipeController::class, 'index']);
Route::get('/recipes/{recipe}/ingredients', [RecipeController::class, 'ingredients']);
Route::post('/calculate-nutrition', [NutritionController::class, 'calculate']);