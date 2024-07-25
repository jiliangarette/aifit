<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'serving_size'];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'recipe_ingredients')
                    ->withPivot('amount');
    }

    public function recipeIngredients()
    {
        return $this->hasMany(RecipeIngredient::class);
    }
}
