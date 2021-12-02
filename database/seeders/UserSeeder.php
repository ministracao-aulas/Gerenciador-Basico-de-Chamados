<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => 'power@123',
                'roles' => ['admin'],
            ],
        ];

        echo "Seeding Users...\n\n";
        foreach($users as $user)
        {
            $user['password'] = bcrypt($password = $user['password']);

            User::updateOrCreate([
                'email' => $user['email'],
            ], \Arr::except($user, ['roles']));

            echo "E-mail: ". $user['email'] ." | Pass: {$password}\n";
        }
        echo "\nUsers Seeded!\n";

        \App\Models\User::factory(2)->create();
    }
}
