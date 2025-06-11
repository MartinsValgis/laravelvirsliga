<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\matches::create([
        'home_team_id' => '3',
        'away_team_id' => '2',
        'referee_id' => '1',
        'date' => '2025-03-05 18:00:00',
        'matchweek' => '1',
        'homegoals' => '1',
        'awaygoals' => '2',
        'stadium' => 'Mežaparks SV',
    ]);
        \App\Models\matches::create([
        'home_team_id' => '1',
        'away_team_id' => '9',
        'referee_id' => '2',
        'date' => '2025-03-06 18:00:00',
        'matchweek' => '1',
        'homegoals' => '2',
        'awaygoals' => '0',
        'stadium' => 'Mežaparks SV',
    ]);
        \App\Models\matches::create([
        'home_team_id' => '5',
        'away_team_id' => '6',
        'referee_id' => '3',
        'date' => '2025-03-06 18:00:00',
        'matchweek' => '1',
        'homegoals' => '1',
        'awaygoals' => '1',
        'stadium' => 'Stadions "Daugava", rezerves laukums',
    ]);
        \App\Models\matches::create([
        'home_team_id' => '4',
        'away_team_id' => '10',
        'referee_id' => '4',
        'date' => '2025-03-07 17:30:00',
        'matchweek' => '1',
        'homegoals' => '3',
        'awaygoals' => '0',
        'stadium' => 'Stadions "Esplanāde", mākslīgais laukums',
    ]);
        \App\Models\matches::create([
        'home_team_id' => '7',
        'away_team_id' => '8',
        'referee_id' => '5',
        'date' => '2025-03-07 18:30:00',
        'matchweek' => '1',
        'homegoals' => '4',
        'awaygoals' => '0',
        'stadium' => 'Stadions "Daugava", rezerves laukums',
    ]);
        \App\Models\matches::create([
        'home_team_id' => '1',
        'away_team_id' => '3',
        'referee_id' => '6',
        'date' => '2025-03-10 19:00:00',
        'matchweek' => '2',
        'homegoals' => '2',
        'awaygoals' => '2',
        'stadium' => 'Mežaparks SV',
    ]);
        \App\Models\matches::create([
        'home_team_id' => '5',
        'away_team_id' => '4',
        'referee_id' => '5',
        'date' => '2025-03-11 18:00:00',
        'matchweek' => '2',
        'homegoals' => '3',
        'awaygoals' => '2',
        'stadium' => 'Stadions "Daugava", rezerves laukums',
    ]);
        \App\Models\matches::create([
        'home_team_id' => '2',
        'away_team_id' => '6',
        'referee_id' => '7',
        'date' => '2025-03-11 19:00:00',
        'matchweek' => '2',
        'homegoals' => '1',
        'awaygoals' => '0',
        'stadium' => 'LNK Sporta Parks (mākslīgais)',
    ]);
        \App\Models\matches::create([
        'home_team_id' => '7',
        'away_team_id' => '10',
        'referee_id' => '8',
        'date' => '2025-03-12 18:00:00',
        'matchweek' => '2',
        'homegoals' => '0',
        'awaygoals' => '0',
        'stadium' => 'Stadions "Daugava", rezerves laukums',
    ]);
        \App\Models\matches::create([
        'home_team_id' => '9',
        'away_team_id' => '8',
        'referee_id' => '4',
        'date' => '2025-03-12 19:00:00',
        'matchweek' => '2',
        'homegoals' => '4',
        'awaygoals' => '0',
        'stadium' => 'LNK Sporta Parks (mākslīgais)',
    ]);


    
        \App\Models\matches::create([
        'home_team_id' => '9',
        'away_team_id' => '8',
        'referee_id' => '4',
        'date' => '2025-03-15 14:00:00',
        'matchweek' => '3',
        'homegoals' => '1',
        'awaygoals' => '1',
        'stadium' => 'FK Jelgava Sporta bāzes mākslīgais laukums',
    ]);\App\Models\matches::create([
        'home_team_id' => '9',
        'away_team_id' => '8',
        'referee_id' => '4',
        'date' => '2025-03-15 16:00:00',
        'matchweek' => '3',
        'homegoals' => '1',
        'awaygoals' => '2',
        'stadium' => 'Stadions "Esplanāde", mākslīgais laukums',
    ]);\App\Models\matches::create([
        'home_team_id' => '9',
        'away_team_id' => '8',
        'referee_id' => '4',
        'date' => '2025-03-16 13:00:00',
        'matchweek' => '3',
        'homegoals' => '3',
        'awaygoals' => '2',
        'stadium' => 'Rīgas Hanzas vidusskolas futbola laukums',
    ]);\App\Models\matches::create([
        'home_team_id' => '9',
        'away_team_id' => '8',
        'referee_id' => '4',
        'date' => '2025-03-16 17:00:00',
        'matchweek' => '3',
        'homegoals' => '1',
        'awaygoals' => '0',
        'stadium' => 'Mežaparks SV',
    ]);\App\Models\matches::create([
        'home_team_id' => '9',
        'away_team_id' => '8',
        'referee_id' => '4',
        'date' => '2025-03-16 19:00:00',
        'matchweek' => '3',
        'homegoals' => '4',
        'awaygoals' => '1',
        'stadium' => 'Stadions "Daugava", rezerves laukums',
    ]);




    }
}
