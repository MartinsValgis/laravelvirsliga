<?php

use Illuminate\Support\Facades\Route;
use App\models\matches;
use App\models\teams;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\PlayersController;

Route::get('/', function () {
    return view('kalendars',['heading'=>'kalendars','matches'=>matches::all(),'teams'=>teams::all()]
);
});

Route::get('/team/{id}/', [TeamsController::class, 'show'])->name('team.show');
Route::get('/player/{id}', [PlayersController::class, 'show'])->name('player.show');