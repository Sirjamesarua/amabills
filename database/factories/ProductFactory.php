<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 0, 10000),
            'quantity' => $this->faker->randomFloat(2, 0, 100),
            'amount_sold' => $this->faker->randomFloat(2, 0, 10),
            'user_id' => 1
        ];
    }
}
