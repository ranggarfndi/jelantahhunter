<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Order;
use App\Models\Price;
use App\Models\Reward;
use App\Models\RewardHistory;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Price::factory()->create();

        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@example.com'
        ]);
        $staff = User::factory()->create([
            'name' => 'Staff',
            'email' => 'staff@example.com'
        ]);
        $user = User::factory()
            ->has(
                Order::factory(10)->hasOrderHistories()
            )
            ->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Reward::factory(2)->has(RewardHistory::factory(['user_id' => $user]))->create();

        Artisan::call('shield:generate', ['--all' => true]);
        Artisan::call('shield:super-admin', ['--user' => 1]);
        $staffRole = Role::create([
            'guard_name' => 'web',
            'name' => 'staff'
        ]);

        $staffRole->givePermissionTo(Permission::where('name', 'like', '%order')->pluck('name'));
        $staff->assignRole('staff');

    }
}
