<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Discount;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->text(),
            'es' => [
                'title' => $this->faker->sentence(),
                'description' => $this->faker->text()
            ],
            'quantity' => rand(1,100),
            'price' => rand(1,100),
            'category_id' => Category::all()->random()->id,
        ];
    }
}
