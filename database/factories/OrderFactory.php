<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'total' => $this->faker->name(),
            'customerName' => $this->faker->name(),
            'customerEmail' => $this->faker->unique()->safeEmail(),
            'orderId' => '#ORD'.Str::random(10),
        ];
    }
}
