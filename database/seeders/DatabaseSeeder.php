<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Modules\HumanResource\Database\Seeders\AnnualLeaveAllocationsSeeder;
use Modules\HumanResource\Database\Seeders\LeaveBalanceSeeder;
use Modules\HumanResource\Database\Seeders\LeavesSeeder;
use Modules\HumanResource\Database\Seeders\LeaveTypesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // RolesSeeder::class,
            // UserSeeder::class,
            // UsersTableSeederOld::class,

            // LeaveTypesSeeder::class,
            // LeavesSeeder::class,
            // AnnualLeaveAllocationsSeeder::class,
            // LeaveBalanceSeeder::class,
            // DivisionsSeeder::class,
            // PositionsSeeder::class,
            // UnitsSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        /** Run the following after Seeding Roles */
        // php artisan cache:forget spatie.permission.cache
        // php artisan cache:clear
        // comment RoleSeeder class
        // Run UserSeeder class
    }
}
