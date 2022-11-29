<?php

namespace Database\Factories;

use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    protected $model = product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word(),
            'price' => fake()->numberBetween(0, 100),
            'quantity' => fake()->numberBetween(0, 50),
            'description' => fake()->realTextBetween(50, 150, 2),
            'image' => fake()->imageUrl(360, 360, 'animals', true, 'dogs', true),
        ];
    }
}
