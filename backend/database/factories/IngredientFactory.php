<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingredient>
 */
class IngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'name' => $this->faker->word(),
        'unit' => $this->faker->randomElement(['g', 'kg', 'oz']),
        'calories' => $this->faker->randomFloat(2, 0, 500),
        'total_fat' => $this->faker->randomFloat(2, 0, 50),
        'total_carbohydrates' => $this->faker->randomFloat(2, 0, 50),
        'protein' => $this->faker->randomFloat(2, 0, 50),
    ];
}
}
