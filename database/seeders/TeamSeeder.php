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
        'treneris' => 'Adrian Gula',
        'teamcolor'=>'#1e4a6a',
        'teamsecondarycolor'=>'#ffffff',
        'logo_path' => 'teams/rigafc.png',
    ]);
    \App\Models\Teams::create([
        'name' => 'RFS',
        'city' => 'Rīga',
        'treneris' => 'Viktors Morozs',
        'teamcolor'=>'#0072cf',
        'teamsecondarycolor'=>'#ffffff',
        'logo_path' => 'teams/rfs.png',
    ]);
    \App\Models\Teams::create([
        'name' => 'FK Auda',
        'city' => 'Ķekava',
        'treneris' => 'Jurģis Kalns',
        'teamcolor'=>'#00933d',
        'teamsecondarycolor'=>'#000000',
        'logo_path' => 'teams/auda.png',
    ]);
    \App\Models\Teams::create([
        'name' => 'BFC Daugavpils',
        'city' => 'Daugavpils',
        'treneris' => 'Kirils Kurbatovs',
        'teamcolor'=>'#222a48',
        'teamsecondarycolor'=>'#f0b41e',
        'logo_path' => 'teams/daugavpils.png',
    ]);
    \App\Models\Teams::create([
        'name' => 'Grobiņas SC',
        'city' => 'Grobiņa',
        'treneris' => 'Viktors Dobrevcovs',
        'teamcolor'=>'#03449d',
        'teamsecondarycolor'=>'#000000',
        'logo_path' => 'teams/grobina.png',
    ]);
    \App\Models\Teams::create([
        'name' => 'FS Jelgava',
        'city' => 'Jelgava',
        'treneris' => 'Aleksandrs Basovs',
        'teamcolor'=>'#231f20',
        'teamsecondarycolor'=>'#ffffff',
        'logo_path' => 'teams/jelgava.png',
    ]);
    \App\Models\Teams::create([
        'name' => 'FK Liepaja',
        'city' => 'Liepāja',
        'treneris' => 'Gert Andreas Alm',
        'teamcolor'=>'#008b54',
        'teamsecondarycolor'=>'#ffffff',
        'logo_path' => 'teams/liepaja.png',
    ]);
    \App\Models\Teams::create([
        'name' => 'FK Metta',
        'city' => 'Rīga',
        'treneris' => 'Andris Riherts',
        'teamcolor'=>'#068826',
        'teamsecondarycolor'=>'#ffffff',
        'logo_path' => 'teams/metta.png',
    ]);
    \App\Models\Teams::create([
        'name' => 'SK Supernova',
        'city' => 'Rīga',
        'treneris' => 'Ervīns Pērkons',
        'teamcolor'=>'#faea01',
        'teamsecondarycolor'=>'#2e3164',
        'logo_path' => 'teams/supernova.png',
    ]);
    \App\Models\Teams::create([
        'name' => 'FK Tukums 2000',
        'city' => 'Tukums',
        'treneris' => 'Kristaps Dišlers',
        'teamcolor'=>'#237038',
        'teamsecondarycolor'=>'#e4e4e4',
        'logo_path' => 'teams/tukums.png',
    ]);

}
}
