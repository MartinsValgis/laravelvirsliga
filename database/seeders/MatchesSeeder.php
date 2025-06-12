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
        // 1. karta
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
    //2. karta
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
    //3. karta
        \App\Models\matches::create([
        'home_team_id' => '6',
        'away_team_id' => '1',
        'referee_id' => '4',
        'date' => '2025-03-15 14:00:00',
        'matchweek' => '3',
        'homegoals' => '1',
        'awaygoals' => '1',
        'stadium' => 'FK Jelgava Sporta bāzes mākslīgais laukums',
    ]);\App\Models\matches::create([
        'home_team_id' => '4',
        'away_team_id' => '2',
        'referee_id' => '8',
        'date' => '2025-03-15 16:00:00',
        'matchweek' => '3',
        'homegoals' => '1',
        'awaygoals' => '2',
        'stadium' => 'Stadions "Esplanāde", mākslīgais laukums',
    ]);\App\Models\matches::create([
        'home_team_id' => '8',
        'away_team_id' => '10',
        'referee_id' => '7',
        'date' => '2025-03-16 13:00:00',
        'matchweek' => '3',
        'homegoals' => '3',
        'awaygoals' => '2',
        'stadium' => 'Rīgas Hanzas vidusskolas futbola laukums',
    ]);\App\Models\matches::create([
        'home_team_id' => '3',
        'away_team_id' => '9',
        'referee_id' => '3',
        'date' => '2025-03-16 17:00:00',
        'matchweek' => '3',
        'homegoals' => '1',
        'awaygoals' => '0',
        'stadium' => 'Mežaparks SV',
    ]);\App\Models\matches::create([
        'home_team_id' => '7',
        'away_team_id' => '5',
        'referee_id' => '5',
        'date' => '2025-03-16 19:00:00',
        'matchweek' => '3',
        'homegoals' => '4',
        'awaygoals' => '1',
        'stadium' => 'Stadions "Daugava", rezerves laukums',
    ]);
    //4.karta
        \App\Models\matches::create([
        'home_team_id' => '1',
        'away_team_id' => '4',
        'referee_id' => '9',
        'date' => '2025-03-29 15:00:00',
        'matchweek' => '4',
        'homegoals' => '1',
        'awaygoals' => '2',
        'stadium' => 'Mežaparks SV',
    ]);\App\Models\matches::create([
        'home_team_id' => '2',
        'away_team_id' => '7',
        'referee_id' => '6',
        'date' => '2025-03-29 17:00:00',
        'matchweek' => '4',
        'homegoals' => '4',
        'awaygoals' => '1',
        'stadium' => 'LNK Sporta Parks (mākslīgais)',
    ]);\App\Models\matches::create([
        'home_team_id' => '5',
        'away_team_id' => '8',
        'referee_id' => '10',
        'date' => '2025-03-30 15:00:00',
        'matchweek' => '4',
        'homegoals' => '2',
        'awaygoals' => '4',
        'stadium' => 'Stadions "Daugava", rezerves laukums',
    ]);\App\Models\matches::create([
        'home_team_id' => '3',
        'away_team_id' => '6',
        'referee_id' => '11',
        'date' => '2025-03-30 17:00:00',
        'matchweek' => '4',
        'homegoals' => '2',
        'awaygoals' => '0',
        'stadium' => 'Mežaparks SV',
    ]);\App\Models\matches::create([
        'home_team_id' => '10',
        'away_team_id' => '9',
        'referee_id' => '12',
        'date' => '2025-03-31 17:00:00',
        'matchweek' => '4',
        'homegoals' => '2',
        'awaygoals' => '2',
        'stadium' => 'Tukuma pils. stad. māksl. lauk.',
    ]);           
    //5. karta
        \App\Models\matches::create([
        'home_team_id' => '7',
        'away_team_id' => '1',
        'referee_id' => '1',
        'date' => '2025-04-03 18:00:00',
        'matchweek' => '5',
        'homegoals' => '2',
        'awaygoals' => '5',
        'stadium' => 'Stadions "Daugava", rezerves laukums',
    ]);\App\Models\matches::create([
        'home_team_id' => '8',
        'away_team_id' => '2',
        'referee_id' => '2',
        'date' => '2025-04-04 17:00:00',
        'matchweek' => '5',
        'homegoals' => '1',
        'awaygoals' => '0',
        'stadium' => 'Rīgas Hanzas vidusskolas futbola laukums',
    ]);\App\Models\matches::create([
        'home_team_id' => '4',
        'away_team_id' => '3',
        'referee_id' => '12',
        'date' => '2025-04-04 18:00:00',
        'matchweek' => '5',
        'homegoals' => '2',
        'awaygoals' => '1',
        'stadium' => 'Stadions "Esplanāde", mākslīgais laukums',
    ]);\App\Models\matches::create([
        'home_team_id' => '10',
        'away_team_id' => '5',
        'referee_id' => '9',
        'date' => '2025-04-05 14:00:00',
        'matchweek' => '5',
        'homegoals' => '2',
        'awaygoals' => '0',
        'stadium' => 'Tukuma pils. stad. māksl. lauk.',
    ]);\App\Models\matches::create([
        'home_team_id' => '6',
        'away_team_id' => '9',
        'referee_id' => '3',
        'date' => '2025-04-05 16:00:00',
        'matchweek' => '5',
        'homegoals' => '2',
        'awaygoals' => '1',
        'stadium' => 'FK Jelgava Sporta bāzes mākslīgais laukums',
    ]);




    //Upcoming. - 19.karta
        \App\Models\matches::create([
        'home_team_id' => '4',
        'away_team_id' => '10',
        'date' => '2025-06-21 16:00:00',
        'matchweek' => '19',
        'stadium' => 'Stadions "Esplanāde", mākslīgais laukums',
    ]);\App\Models\matches::create([
        'home_team_id' => '7',
        'away_team_id' => '8',
        'date' => '2025-06-21 18:00:00',
        'matchweek' => '19',
        'stadium' => 'Stadions “Daugava”, Liepāja',
    ]);\App\Models\matches::create([
        'home_team_id' => '6',
        'away_team_id' => '5',
        'date' => '2025-06-22 16:00:00',
        'matchweek' => '19',
        'stadium' => 'Zemgales OC',
    ]);\App\Models\matches::create([
        'home_team_id' => '1',
        'away_team_id' => '9',
        'date' => '2025-06-22 18:00:00',
        'matchweek' => '19',
        'stadium' => 'Skonto stadions',
    ]);\App\Models\matches::create([
        'home_team_id' => '2',
        'away_team_id' => '3',
        'date' => '2025-06-22 20:00:00',
        'matchweek' => '19',
        'stadium' => 'LNK Sporta Parks (dabīgais)',
    ]);
    //Upcoming. - 20.karta
        \App\Models\matches::create([
        'home_team_id' => '10',
        'away_team_id' => '7',
        'date' => '2025-06-25 19:00:00',
        'matchweek' => '20',
        'stadium' => 'Tukuma pilsētas stadions',
    ]);\App\Models\matches::create([
        'home_team_id' => '4',
        'away_team_id' => '5',
        'date' => '2025-06-26 18:00:00',
        'matchweek' => '20',
        'stadium' => 'Stadions "Esplanāde", mākslīgais laukums',
    ]);\App\Models\matches::create([
        'home_team_id' => '6',
        'away_team_id' => '2',
        'date' => '2025-06-26 19:00:00',
        'matchweek' => '20',
        'stadium' => 'Zemgales OC',
    ]);\App\Models\matches::create([
        'home_team_id' => '3',
        'away_team_id' => '1',
        'date' => '2025-06-27 18:00:00',
        'matchweek' => '20',
        'stadium' => 'Skonto stadions',
    ]);\App\Models\matches::create([
        'home_team_id' => '9',
        'away_team_id' => '8',
        'date' => '2025-06-27 20:00:00',
        'matchweek' => '20',
        'stadium' => 'Jāņa Skredeļa stadions',
    ]);
    //Upcoming. - 21.karta
        \App\Models\matches::create([
        'home_team_id' => '4',
        'away_team_id' => '2',
        'date' => '2025-06-30 18:00:00',
        'matchweek' => '21',
        'stadium' => 'Stadions "Esplanāde", mākslīgais laukums',
    ]);\App\Models\matches::create([
        'home_team_id' => '7',
        'away_team_id' => '5',
        'date' => '2025-06-30 20:00:00',
        'matchweek' => '21',
        'stadium' => 'Stadions “Daugava”, Liepāja',
    ]);\App\Models\matches::create([
        'home_team_id' => '9',
        'away_team_id' => '3',
        'date' => '2025-07-01 18:00:00',
        'matchweek' => '21',
        'stadium' => 'Jāņa Skredeļa stadions',
    ]);\App\Models\matches::create([
        'home_team_id' => '1',
        'away_team_id' => '6',
        'date' => '2025-07-01 20:00:00',
        'matchweek' => '21',
        'stadium' => 'Skonto stadions',
    ]);\App\Models\matches::create([
        'home_team_id' => '8',
        'away_team_id' => '10',
        'date' => '2025-07-02 19:00:00',
        'matchweek' => '21',
        'stadium' => 'Jūrmalas pilsētas stadions "Sloka"',
    ]);
    //Upcoming. - 22.karta
        \App\Models\matches::create([
        'home_team_id' => '2',
        'away_team_id' => '7',
        'date' => '2025-07-04 19:00:00',
        'matchweek' => '22',
        'stadium' => 'LNK Sporta Parks (dabīgais)',
    ]);\App\Models\matches::create([
        'home_team_id' => '3',
        'away_team_id' => '6',
        'date' => '2025-07-05 18:00:00',
        'matchweek' => '22',
        'stadium' => 'Skonto stadions',
    ]);\App\Models\matches::create([
        'home_team_id' => '5',
        'away_team_id' => '8',
        'date' => '2025-07-06 16:00:00',
        'matchweek' => '22',
        'stadium' => 'Stadions “Daugava”, Liepāja',
    ]);\App\Models\matches::create([
        'home_team_id' => '9',
        'away_team_id' => '10',
        'date' => '2025-07-06 18:00:00',
        'matchweek' => '22',
        'stadium' => 'Jāņa Skredeļa stadions',
    ]);\App\Models\matches::create([
        'home_team_id' => '1',
        'away_team_id' => '4',
        'date' => '2025-07-06 19:00:00',
        'matchweek' => '22',
        'stadium' => 'Skonto stadions',
    ]);
    //Upcoming. - 23.karta
        \App\Models\matches::create([
        'home_team_id' => '7',
        'away_team_id' => '1',
        'date' => '2025-07-19 16:00:00',
        'matchweek' => '23',
        'stadium' => 'Stadions “Daugava”, Liepāja',
    ]);\App\Models\matches::create([
        'home_team_id' => '8',
        'away_team_id' => '2',
        'date' => '2025-07-19 18:00:00',
        'matchweek' => '23',
        'stadium' => 'Jūrmalas pilsētas stadions "Sloka"',
    ]);\App\Models\matches::create([
        'home_team_id' => '3',
        'away_team_id' => '4',
        'date' => '2025-07-20 15:00:00',
        'matchweek' => '23',
        'stadium' => 'Skonto stadions',
    ]);\App\Models\matches::create([
        'home_team_id' => '6',
        'away_team_id' => '9',
        'date' => '2025-07-20 17:00:00',
        'matchweek' => '23',
        'stadium' => 'Zemgales OC',
    ]);\App\Models\matches::create([
        'home_team_id' => '10',
        'away_team_id' => '5',
        'date' => '2025-07-21 18:00:00',
        'matchweek' => '23',
        'stadium' => 'Tukuma pilsētas stadions',
    ]);




    }
}
