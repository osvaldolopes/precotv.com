<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProregProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [           
            // 'proreg_id' => fake()->randomNumber(5, true),            
            // 'proreg_description' => 'ALCATRA C/ MAMINHA',
            // 'proreg_price' => fake()->randomFloat(1, 20, 30),
            // //'proreg_promo' => fake()->randomFloat(1, 20, 30),
        ];
    }
}
