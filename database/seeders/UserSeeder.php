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
            ['id' => 1,
            'name' => 'Mostfa',
            'email' => 'myreal17@gmail.com',
            'ip_adresse' => '127.0.0.1',
            'password' => Hash::make('123456789'),
            // 'password' => '$2y$10$DRq97ZzGmETu5lin4jRjCu6RFYc8RWDXdvjPS6UttDqExrnpUaNPa',//123456789
            'role_id' => 1,
            'remember_token' => '',
        ],

        ];

        foreach ($items as $item) {
            User::create($item);
        }
    }
}
