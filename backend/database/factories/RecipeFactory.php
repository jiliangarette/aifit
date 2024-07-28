<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),
            'image_path' => function () {
                $imagePath = 'images/' . Str::random(10) . '.jpg'; // Simulate a file path
                return $imagePath;
            },
            'description' => $this->faker->sentence(),
            'serving_size' => $this->faker->numberBetween(50, 500),
        ];
    }
}
