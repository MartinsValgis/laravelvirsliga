<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Players;
use App\Models\Goals;
use App\Models\Cards;

class PlayersController extends Controller
{
    public function show($id)
    {
        $player = Players::with('team')->findOrFail($id);
        $goals = Goals::where('goalscorer_id', $id)->count();
        $assists = Goals::where('assist_id', $id)->count();

        $yellowCards = Cards::where('player_id', $id)->where('card_type', 'y')->count();
        $redCards = Cards::where('player_id', $id)->where('card_type', 'r')->count();

        return view('player', compact('player', 'goals', 'assists', 'yellowCards', 'redCards'));
    }
}
