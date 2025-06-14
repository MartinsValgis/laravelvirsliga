<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\matches;
use App\Models\goals;
use App\Models\cards;
use App\Models\referees;

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

        return view('match', compact('match', 'events', 'referee', 'refereeMatches', 'avgYellowCards', 'avgRedCards'));
    }
}
