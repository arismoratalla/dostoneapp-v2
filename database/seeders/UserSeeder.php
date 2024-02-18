<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Database\Seeders\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Aris Moratalla',
                'email' => 'arismoratalla@gmail.com',
                'role' => 'admin',
            ],
            // [
            //     'name' => 'Ronnel Gundoy',
            //     'email' => 'ronnelgundoy@gmail.com',
            //     'password' => 'DostRegion9',
            //     'role' => 'employee',
            // ],
            // [
            //     'name' => 'Elijah Denica Bernales',
            //     'email' => 'elijahdenicabernales@gmail.com',
            //     'role' => 'officer',
            // ],
            // [
            //     'name' => 'Chief',
            //     'email' => 'chief@gmail.com',
            //     'role' => 'chief',
            // ],
            // [
            //     'name' => 'Director',
            //     'email' => 'director@gmail.com',
            //     'role' => 'director',
            // ],
        ];

        foreach($users as $user) {
            $created_user = User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'email_verified_at' => Carbon::now(),
                'password' => '$2y$12$DoeDs7Zr8/UYA5NYULhUaeVKjfG1.eXGy4KunY4nOD26ufHTYGe2a',
            ]);

            $role = Role::findByName('admin','web');
            $created_user->assignRole($role);
        }
    }
}
