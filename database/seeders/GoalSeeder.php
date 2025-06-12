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
    ]);\App\Models\goals::create([
        'goalscorer_id' => '13',
        'assist_id' => null,
        'match_id' => '3',
        'minute' => '4',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '20',
        'assist_id' => null,
        'match_id' => '3',
        'minute' => '81',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '23',
        'assist_id' => '29',
        'match_id' => '2',
        'minute' => '13',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '23',
        'assist_id' => null,
        'match_id' => '2',
        'minute' => '50',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '31',
        'assist_id' => null,
        'match_id' => '4',
        'minute' => '27',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '35',
        'assist_id' => '38',
        'match_id' => '4',
        'minute' => '64',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '36',
        'assist_id' => '35',
        'match_id' => '4',
        'minute' => '85',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '39',
        'assist_id' => null,
        'match_id' => '5',
        'minute' => '17',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '40',
        'assist_id' => null,
        'match_id' => '5',
        'minute' => '30',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '42',
        'assist_id' => null,
        'match_id' => '5',
        'minute' => '38',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '43',
        'assist_id' => null,
        'match_id' => '5',
        'minute' => '64',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '48',
        'assist_id' => null,
        'match_id' => '6',
        'minute' => '50',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '29',
        'assist_id' => '51',
        'match_id' => '6',
        'minute' => '52',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '23',
        'assist_id' => '51',
        'match_id' => '6',
        'minute' => '63',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '3',
        'assist_id' => '49',
        'match_id' => '6',
        'minute' => '81',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '52',
        'assist_id' => '33',
        'match_id' => '7',
        'minute' => '41',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '55',
        'assist_id' => null,
        'match_id' => '7',
        'minute' => '56',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '14',
        'assist_id' => '57',
        'match_id' => '7',
        'minute' => '64',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '53',
        'assist_id' => null,
        'match_id' => '7',
        'minute' => '84',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '14',
        'assist_id' => '17',
        'match_id' => '7',
        'minute' => '88',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '2',
        'assist_id' => '59',
        'match_id' => '8',
        'minute' => '93',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '61',
        'assist_id' => null,
        'match_id' => '10',
        'minute' => '36',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '27',
        'assist_id' => '64',
        'match_id' => '10',
        'minute' => '49',
        'own_goal' => '0',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '41',
        'assist_id' => null,
        'match_id' => '10',
        'minute' => '74',
        'own_goal' => '1',
    ]);\App\Models\goals::create([
        'goalscorer_id' => '62',
        'assist_id' => null,
        'match_id' => '10',
        'minute' => '92',
        'own_goal' => '0',
    ]);



    }
}
