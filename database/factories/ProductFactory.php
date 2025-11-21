<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

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
    public function definition(): array
    {
        return [
            'prod_id' => fake()->randomNumber(5, true),
            'departament_id' => '1',
            'prod_description' => 'PÃO FRANCES KG SUPER NETO',
            'prod_price' => fake()->randomFloat(1, 20, 30),
            'prod_promo' => fake()->randomFloat(1, 20, 30),
        ];
    }
}
