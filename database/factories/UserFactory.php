<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => fake()->name(),
            'image_url' => fake()->randomElement(['public/images/8ab0dNi7z9U4zI0i621kZEgAFNQiQcxyeU2pgUED.jpg'])

        ];
    }
}
