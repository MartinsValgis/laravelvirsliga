<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class cardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\cards::create([
        'player_id' => '3',
        'match_id' => '1',
        'minute' => '22',
        'card_type' => 'y',
    ]);
        \App\Models\cards::create([
        'player_id' => '4',
        'match_id' => '1',
        'minute' => '36',
        'card_type' => 'y',
    ]);
        \App\Models\cards::create([
        'player_id' => '5',
        'match_id' => '1',
        'minute' => '41',
        'card_type' => 'y',
    ]);
        \App\Models\cards::create([
        'player_id' => '6',
        'match_id' => '1',
        'minute' => '42',
        'card_type' => 'y',
    ]);
        \App\Models\cards::create([
        'player_id' => '7',
        'match_id' => '1',
        'minute' => '70',
        'card_type' => 'r',
    ]);
        \App\Models\cards::create([
        'player_id' => '8',
        'match_id' => '1',
        'minute' => '72',
        'card_type' => 'y',
    ]);
        \App\Models\cards::create([
        'player_id' => '9',
        'match_id' => '1',
        'minute' => '87',
        'card_type' => 'y',
    ]);


    }
}
