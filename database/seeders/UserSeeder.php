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
        foreach($users as $_user)
        {
            $_user['password'] = bcrypt($password = $_user['password']);
            $_user = collect($_user);

            $user = User::updateOrCreate([
                'email' => $_user['email'],
            ], $_user->except(['roles'])->all());

            if($_user->has(['roles']))
            {
                $user->syncRoles($_user->only(['roles'])->all());
            }

            echo "E-mail: ". $_user['email'] ." | Pass: {$password}\n";
        }
        echo "\nUsers Seeded!\n";

        \App\Models\User::factory(2)->create();
    }
}
