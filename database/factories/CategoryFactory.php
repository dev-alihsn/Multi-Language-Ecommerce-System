<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'es' => [
                'name' => fake('es-ES')->sentence(),
                'slug' => fake('es-ES')->slug()
            ],
            'user_id' => User::all()->random()->id
        ];
    }
}
