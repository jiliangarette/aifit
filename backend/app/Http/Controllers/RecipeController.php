<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        return Recipe::all(['id', 'name']);
    }

    public function ingredients(Recipe $recipe)
    {
        return $recipe->ingredients;
    }
}