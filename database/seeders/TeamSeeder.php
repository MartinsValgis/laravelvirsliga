<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Teams::create([
        'name' => 'Riga FC',
        'city' => 'Rīga',
        'logo_path' => 'teams/rigafc.png',
    ]);
    \App\Models\Teams::create([
        'name' => 'RFS',
        'city' => 'Rīga',
        'logo_path' => 'teams/rigafc.png',
    ]);
    \App\Models\Teams::create([
        'name' => 'FK Auda',
        'city' => 'Ķekava',
        'logo_path' => 'teams/auda.png',
    ]);
    \App\Models\Teams::create([
        'name' => 'BFC Daugavpils',
        'city' => 'Daugavpils',
        'logo_path' => 'teams/daugavpils.png',
    ]);
    \App\Models\Teams::create([
        'name' => 'Grobiņas SC',
        'city' => 'Grobiņa',
        'logo_path' => 'teams/grobina.png',
    ]);
    \App\Models\Teams::create([
        'name' => 'FS Jelgava',
        'city' => 'Jelgava',
        'logo_path' => 'teams/jelgava.png',
    ]);
    \App\Models\Teams::create([
        'name' => 'FK Liepaja',
        'city' => 'Liepāja',
        'logo_path' => 'teams/liepaja.png',
    ]);
    \App\Models\Teams::create([
        'name' => 'FK Metta',
        'city' => 'Rīga',
        'logo_path' => 'teams/metta.png',
    ]);
    \App\Models\Teams::create([
        'name' => 'SK Supernova',
        'city' => 'Rīga',
        'logo_path' => 'teams/supernova.png',
    ]);
    \App\Models\Teams::create([
        'name' => 'FK Tukums 2000',
        'city' => 'Tukums',
        'logo_path' => 'teams/tukums.png',
    ]);

}
}
