<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\KalendarsController;
use App\Http\Controllers\MatchesController;
use App\Http\Controllers\TableController;

Route::get('/', [KalendarsController::class, 'index'])->name('home');
Route::get('/team/{id}/', [TeamsController::class, 'show'])->name('team.show');
Route::get('/player/{id}', [PlayersController::class, 'show'])->name('player.show');
Route::get('/match/{id}', [MatchesController::class, 'show']);
Route::get('/table', [TableController::class, 'index']);
Route::get('/locale/{lang}', function ($lang) {
    $availableLocales = ['lv', 'en', 'de'];

    if (in_array($lang, $availableLocales)) {
        session(['locale' => $lang]);
    }

    return redirect()->back();
})->name('setLocale');