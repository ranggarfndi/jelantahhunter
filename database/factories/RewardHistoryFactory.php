<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RewardHistory>
 */
class RewardHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reward_id' => "",
            'user_id' => '',
            'status' => fake()->randomElement(['pending', 'approve', 'rejected']),
        ];
    }
}
