<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;

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
            'image' => function () {
                // Fetch a random image from a placeholder service
                $imageUrl = 'https://picsum.photos/200/300';
                $response = Http::get($imageUrl);
                return $response->successful() ? $response->body() : null;
            },
            'description' => $this->faker->sentence(),
            'serving_size' => $this->faker->numberBetween(50, 500),
        ];
    }
}
