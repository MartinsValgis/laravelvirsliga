<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\matches;

class MatchesController extends Controller
{
    public function index()
{
    $matches = Matches::with(['homeTeam', 'awayTeam'])->get();
    return view('matches.index', compact('matches'));
}
}
