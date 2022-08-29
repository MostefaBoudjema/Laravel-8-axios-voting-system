<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'ip_adresse' => '127.0.0.1',
                'password' => Hash::make('123456789'),
                'role_id' => 1,//admin
                'remember_token' => '',
            ], [
                'id' => 2,
                'name' => 'User2',
                'email' => 'user2@gmail.com',
                'ip_adresse' => '127.0.0.1',
                'password' => Hash::make('123456789'),
                'role_id' => 2,//manager
                'remember_token' => '',
            ], [
                'id' => 3,
                'name' => 'User3',
                'email' => 'User3@gmail.com',
                'ip_adresse' => '127.0.0.1',
                'password' => Hash::make('123456789'),
                'role_id' => 0,//simple user
                'remember_token' => '',
            ],

        ];

        foreach ($items as $item) {
            User::create($item);
        }
    }
}
