<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        \App\Models\goals::create([
        'goalscorer_id' => '1',
        'assist_id' => '10',
        'match_id' => '1',
        'minute' => '1',
        'own_goal' => '0',
    ]);
        \App\Models\goals::create([
        'goalscorer_id' => '2',
        'assist_id' => '11',
        'match_id' => '1',
        'minute' => '14',
        'own_goal' => '0',
    ]);
        \App\Models\goals::create([
        'goalscorer_id' => '3',
        'assist_id' => '12',
        'match_id' => '1',
        'minute' => '58',
        'own_goal' => '0',
    ]);


    }
}
