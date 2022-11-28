<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'User',
                'email'=> 'user@test.com',
                'password' => bcrypt('12345678'),
                'role'=> 0
            ],
            [
                'name'=>'admin',
                'email'=> 'admin@test.com',
                'password' => bcrypt('12345678'),
                'role'=> 1
            ],
        ];
        foreach ($user as $user)
        {
            User::create($user);
        }
    }
}
