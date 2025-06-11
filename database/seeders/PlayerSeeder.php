<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\players::create([
        'team_id' => '2',
        'number' => '5',
        'name' => 'Niks  Sliede',
        'img_path' =>'players/sliede.png',
    ]);
    \App\Models\players::create([
        'team_id' => '2',
        'number' => '22',
        'name' => 'Darko Lemajič',
        'img_path' =>'players/lemajic.png',
    ]);
    \App\Models\players::create([
        'team_id' => '3',
        'number' => '7',
        'name' => 'Matheus Dos Santos Clemente',
        'img_path' =>'players/clemente.png',
    ]);
    \App\Models\players::create([
        'team_id' => '2',
        'number' => '18',
        'name' => 'Dmitrijs Zelenkovs',
        'img_path' =>'players/zelenkovs.png',
    ]);
    \App\Models\players::create([
        'team_id' => '2',
        'number' => '26',
        'name' => 'Stefan Panič',
        'img_path' =>'players/zelenkovs.png',
    ]);
    \App\Models\players::create([
        'team_id' => '3',
        'number' => '99',
        'name' => 'Jeudi Stevenson',
        'img_path' =>'players/stevenson.png',
    ]);
    \App\Models\players::create([
        'team_id' => '3',
        'number' => '4',
        'name' => 'Karl Gameni Wassom',
        'img_path' =>'players/wassom.png',
    ]);
    \App\Models\players::create([
        'team_id' => '2',
        'number' => '25',
        'name' => 'Petr Mares',
        'img_path' =>'players/mares.png',
    ]);
    \App\Models\players::create([
        'team_id' => '2',
        'number' => '77',
        'name' => 'Jeremie Serge Porsan Clemente',
        'img_path' =>'players/porsanclemente.png',
    ]);
    \App\Models\players::create([
        'team_id' => '2',
        'number' => '11',
        'name' => 'Roberts Savaļnieks',
        'img_path' =>'players/savalnieks.png',
    ]);
    \App\Models\players::create([
        'team_id' => '2',
        'number' => '17',
        'name' => 'Alain Cedric Herve Kouadio',
        'img_path' =>'players/kouadio.png',
    ]);
    \App\Models\players::create([
        'team_id' => '3',
        'number' => '9',
        'name' => 'Enzo Monteiro ',
        'img_path' =>'players/monteiro.png',
    ]);


    }
}
