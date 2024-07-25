<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeNutrition extends Model
{
    use HasFactory;

    protected $fillable = [
        'recipe_id',
        'serving_size',
        'calories',
        'fat',
        'protein',
        'carbohydrates'
    ];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
