<?php

namespace Modules\HumanResource\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Modules\HumanResource\Models\LeaveType;
use Modules\HumanResource\Models\LeaveBalance;

class LeaveBalanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get the first user
        $user = User::first();

        // Get all leave types
        $leaveTypes = LeaveType::all();

        // Define the initial leave balance for the first user
        $initialBalance = 15; // Adjust this value as needed

        // Create leave balance records for the first user
        foreach ($leaveTypes as $leaveType) {
            LeaveBalance::create([
                'user_id' => $user->id,
                'leave_type_id' => $leaveType->id,
                'balance' => $initialBalance,
            ]);
        }
    }
}
