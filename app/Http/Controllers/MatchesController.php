<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\matches;
use App\Models\goals;
use App\Models\cards;
use App\Models\teams;
use App\Models\referees;
use Carbon\Carbon;

class MatchesController extends Controller
{
    public function index()
    {
        $matches = Matches::with(['homeTeam', 'awayTeam'])->get();
        return view('matches.index', compact('matches'));
    }
    public function show($id)
    {
        $match = Matches::with(['homeTeam', 'awayTeam'])->findOrFail($id);

        $homeTeam = $match->homeTeam;
        $awayTeam = $match->awayTeam;

        $today = Carbon::now();
        $teams = Teams::all();

        // Turnīra tabulas aprēķins
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

        $homePosition = $sorted->search(fn($entry) => $entry->team_id === $homeTeam->id) + 1;
        $awayPosition = $sorted->search(fn($entry) => $entry->team_id === $awayTeam->id) + 1;

        // Pēdējās 5 spēles katrai komandai
        $getLast5Results = function ($team) use ($today) {
            $matches = Matches::where(function ($q) use ($team) {
                $q->where('home_team_id', $team->id)->orWhere('away_team_id', $team->id);
            })->where('date', '<', $today)
                ->orderBy('date', 'desc')
                ->limit(5)
                ->get();

            return $matches->map(function ($match) use ($team) {
                $isHome = $match->home_team_id === $team->id;
                $goalsFor = $isHome ? $match->homegoals : $match->awaygoals;
                $goalsAgainst = $isHome ? $match->awaygoals : $match->homegoals;

                if ($goalsFor > $goalsAgainst) {
                    return 'W';
                } elseif ($goalsFor === $goalsAgainst) {
                    return 'D';
                } else {
                    return 'L';
                }
            });
        };

        $homeRecentForm = $getLast5Results($homeTeam);
        $awayRecentForm = $getLast5Results($awayTeam);

        // Referee un events loģika saglabājas kā ir
        $referee = Referees::find($match->referee_id);
        $refereeMatches = Matches::where('referee_id', $match->referee_id)->get();
        $refereeMatchIds = $refereeMatches->pluck('id');

        $totalYellowCards = \App\Models\Cards::whereIn('match_id', $refereeMatchIds)
            ->where('card_type', 'y')
            ->count();
        $totalRedCards = \App\Models\Cards::whereIn('match_id', $refereeMatchIds)
            ->where('card_type', 'r')
            ->count();
        $matchCount = $refereeMatches->count();
        $avgYellowCards = $matchCount > 0 ? round($totalYellowCards / $matchCount, 2) : 0;
        $avgRedCards = $matchCount > 0 ? round($totalRedCards / $matchCount, 2) : 0;

        $goals = Goals::with('goalscorer.team')
            ->where('match_id', $id)
            ->get()
            ->map(function ($goal) {
                return (object)[
                    'minute' => $goal->minute,
                    'type' => $goal->own_goal ? 'own_goal' : 'goal',
                    'player' => $goal->goalscorer,
                    'assist' => $goal->assister,
                    'team_id' => $goal->goalscorer->team_id,
                ];
            });

        $cards = Cards::with('player.team')
            ->where('match_id', $id)
            ->get()
            ->map(function ($card) {
                return (object)[
                    'minute' => $card->minute,
                    'type' => $card->card_type === 'y' ? 'yellow' : 'red',
                    'player' => $card->player,
                    'team_id' => $card->player->team_id,
                ];
            });

        $events = $goals->concat($cards)->sortBy('minute')->values();

        return view('match', compact(
            'match',
            'events',
            'referee',
            'refereeMatches',
            'avgYellowCards',
            'avgRedCards',
            'homePosition',
            'awayPosition',
            'homeRecentForm',
            'awayRecentForm'
        ));
    }
}
