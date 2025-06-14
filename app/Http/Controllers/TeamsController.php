<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;
use App\Models\matches;
use Carbon\Carbon;

class TeamsController extends Controller
{

    public function show($id)
    {

        $team = Teams::with('players')->findOrFail($id);
        $teams = Teams::all();
        $today = Carbon::now();

        $pastMatches = Matches::where(function ($query) use ($id) {
            $query->where('home_team_id', $id)
                ->orWhere('away_team_id', $id);
        })->where('date', '<', $today)
            ->orderBy('date', 'desc')
            ->limit(5)
            ->get();

        $upcomingMatches = Matches::with(['homeTeam', 'awayTeam'])
            ->where(function ($query) use ($id) {
                $query->where('home_team_id', $id)
                    ->orWhere('away_team_id', $id);
            })
            ->where('date', '>=', now())
            ->orderBy('date')
            ->limit(3)
            ->get();

        return view('team', compact('team', 'teams', 'pastMatches', 'upcomingMatches'));
    }
}
