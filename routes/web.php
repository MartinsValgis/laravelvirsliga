<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\KalendarsController;
use App\Http\Controllers\MatchesController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FavoritesController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/favorites', [FavoritesController::class, 'index'])->name('favorites');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/favorites/match/{match}', [FavoritesController::class, 'toggleMatch'])->name('favorites.match.toggle');
    Route::post('/favorites/team/{team}', [FavoritesController::class, 'toggleTeam'])->name('favorites.team.toggle');

});

require __DIR__.'/auth.php';
