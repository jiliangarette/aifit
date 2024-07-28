<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image_path', 'description', 'healthAndBenefits','serving_size'];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'recipe_ingredients')
            ->withPivot('unit','amount');
    }

    public function recipeIngredients()
    {
        return $this->hasMany(RecipeIngredient::class);
    }
}
