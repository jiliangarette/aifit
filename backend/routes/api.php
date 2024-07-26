<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\NutritionController;


// Route::get('/user', function (Request $request) {
//     return response()->json([
//         'test' => 'this is a test json',
//     ]);
// });


// Route::get('/recipes/{id}', [RecipeController::class, 'show']);
// Route::post('/recipes/calculate', [RecipeController::class, 'calculate']);

Route::get('/user/profile', [UserController::class, 'profile'])->middleware('auth:sanctum');

// Route::middleware('auth:sanctum')->post('/recipes', [RecipeController::class, '']);


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');


Route::get('/recipes', [RecipeController::class, 'index']);
Route::get('/recipes/{recipe}/ingredients', [RecipeController::class, 'ingredients']);
Route::post('/calculate-nutrition', [NutritionController::class, 'calculate']);

