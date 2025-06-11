<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefereeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\referees::create([
        'name' => 'Aleksandrs Golubevs'
    ]);
    \App\Models\referees::create([
        'name' => 'Sergejs Vasjkovs'
    ]);
    \App\Models\referees::create([
        'name' => 'Edgars Maļcevs'
    ]);
    \App\Models\referees::create([
        'name' => 'Vasilijs Mordatenko'
    ]);
    \App\Models\referees::create([
        'name' => 'Vitālijs Spasjonņikovs'
    ]);
    \App\Models\referees::create([
        'name' => 'Andris Treimanis'
    ]);
    \App\Models\referees::create([
        'name' => 'Kristaps Ratnieks'
    ]);
    \App\Models\referees::create([
        'name' => 'Deniss Ignatjevs'
    ]);
    \App\Models\referees::create([
        'name' => 'Jevgenijs Keziks'
    ]);
    \App\Models\referees::create([
        'name' => 'Aleksejs Griščenko'
    ]);
    \App\Models\referees::create([
        'name' => 'Andrejs Gluhovs'
    ]);
    \App\Models\referees::create([
        'name' => 'Aleksandrs Anufrijevs'
    ]);
}
}
