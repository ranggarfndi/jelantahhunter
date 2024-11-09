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
    public function definition(): array
    {
        return [
            'quantity' => rand(1, 100),
            'status' => fake()->randomElement(['pending', 'waiting_for_checking', 'waiting_for_calculating_price', 'rejected', 'canceled', 'done']),
            'phone_number' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'address_note' => "Gadak",
            'longtitude' => '',
            'latitude' => '',
        ];
    }
}
