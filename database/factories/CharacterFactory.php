<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->randomElement(['Guts','Casca','Griffith']),
            'description'=>fake()->text(1200),
            'before_eclipse'=>fake()->text(1200),
            'after_eclipse'=>fake()->text(1200)
        ];
    }
}
