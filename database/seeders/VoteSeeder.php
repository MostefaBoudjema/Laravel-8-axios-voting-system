<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vote;
use App\Models\Ripcheck;
use Illuminate\Database\Seeder;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 3; $i < 60; $i++) {
            $vote = new Vote();
            
            $vote->user_id = "1";
            $vote->ripcheck_id = $i;
            $vote->sign = "-1";
            $vote->save();
        }
        for ($i = 1; $i < 3; $i++) {
            $vote = new Vote();
            
            $vote->user_id = "1";
            $vote->ripcheck_id = $i;
            $vote->sign = "1";
            $vote->save();
        }
    }
}

// factory(User::class, 5)->create();
// $users = User::factory()->count(5)->make();
// User::factory()->count(5)->make();
// factory(Ripcheck::class, 20)->create();
// Ripcheck::factory()->count(20)->make();