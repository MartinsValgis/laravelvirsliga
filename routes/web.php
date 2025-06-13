<?php

use Illuminate\Support\Facades\Route;
use App\models\matches;
use App\models\teams;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\KalendarsController;
use App\Http\Controllers\MatchesController;

Route::get('/', [KalendarsController::class, 'index'])->name('home');
Route::get('/team/{id}/', [TeamsController::class, 'show'])->name('team.show');
Route::get('/player/{id}', [PlayersController::class, 'show'])->name('player.show');
Route::get('/match/{id}', [MatchesController::class, 'show']);