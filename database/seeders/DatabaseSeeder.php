<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Order;
use App\Models\Price;
use App\Models\Reward;
use App\Models\RewardHistory;
use Database\Factories\RewardHistoryFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Price::factory()->create();

        $user = User::factory()
            ->has(
                Order::factory(10)->hasOrderHistories()
            )
            ->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Reward::factory(2)->has(RewardHistory::factory(['user_id' => $user]))->create();
    }
}
