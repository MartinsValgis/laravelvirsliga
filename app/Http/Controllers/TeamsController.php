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

       
        $table = $teams->map(function ($t) use ($today) {
            $homeMatches = $t->homeMatches()->where('date', '<=', $today)->get();
            $awayMatches = $t->awayMatches()->where('date', '<=', $today)->get();

            $matches = $homeMatches->merge($awayMatches);

            $wins = 0;
            $draws = 0;
            $losses = 0;
            $goalsFor = 0;
            $goalsAgainst = 0;

            foreach ($matches as $match) {
                $isHome = $match->home_team_id === $t->id;
                $homeGoals = $match->homegoals;
                $awayGoals = $match->awaygoals;

                $goalsFor += $isHome ? $homeGoals : $awayGoals;
                $goalsAgainst += $isHome ? $awayGoals : $homeGoals;

                if ($homeGoals === $awayGoals) {
                    $draws++;
                } elseif (($isHome && $homeGoals > $awayGoals) || (!$isHome && $awayGoals > $homeGoals)) {
                    $wins++;
                } else {
                    $losses++;
                }
            }

            $points = ($wins * 3) + $draws;
            $goalDiff = $goalsFor - $goalsAgainst;

            return (object)[
                'team_id' => $t->id,
                'points' => $points,
                'goal_difference' => $goalDiff,
            ];
        });

        $sorted = $table->sortByDesc('goal_difference')->sortByDesc('points')->values();

        $position = $sorted->search(fn($entry) => $entry->team_id === $team->id) + 1;
        $teamPoints = $sorted->firstWhere('team_id', $team->id)->points ?? 0;

        return view('team', compact(
            'team',
            'teams',
            'pastMatches',
            'upcomingMatches',
            'position',
            'teamPoints'
        ));
    }
}
