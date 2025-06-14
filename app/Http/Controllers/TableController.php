<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;
use App\Models\Matches;
use Carbon\Carbon;

class TableController extends Controller
{
    public function index()
    {
        $teams = Teams::all();
        $now = Carbon::now();

        $table = $teams->map(function ($team) use ($now) {
            $homeMatches = $team->homeMatches()->where('date', '<=', $now)->get();
            $awayMatches = $team->awayMatches()->where('date', '<=', $now)->get();

            $matches = $homeMatches->merge($awayMatches);

            $wins = 0;
            $draws = 0;
            $losses = 0;
            $goalsFor = 0;
            $goalsAgainst = 0;

            foreach ($matches as $match) {
                $isHome = $match->home_team_id === $team->id;
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

            $played = $wins + $draws + $losses;
            $goalDiff = $goalsFor - $goalsAgainst;
            $points = ($wins * 3) + $draws;

            return (object)[
                'team' => $team,
                'played' => $played,
                'wins' => $wins,
                'draws' => $draws,
                'losses' => $losses,
                'goals_for' => $goalsFor,
                'goals_against' => $goalsAgainst,
                'goal_difference' => $goalDiff,
                'points' => $points,
            ];
        });


        $sorted = $table->sortByDesc('goal_difference')->sortByDesc('points')->values();

        return view('table', ['table' => $sorted]);
    }
}
