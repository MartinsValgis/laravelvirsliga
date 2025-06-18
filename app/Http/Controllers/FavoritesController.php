<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matches;
use App\Models\Teams;
use App\Models\Favorite_Matches;
use App\Models\Favorite_Teams;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class FavoritesController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $favoriteMatchIds = Favorite_Matches::where('user_id', $user->id)->pluck('match_id');
        $favoriteTeamIds = Favorite_Teams::where('user_id', $user->id)->pluck('team_id');
        $allMatches = Matches::with(['homeTeam', 'awayTeam'])
            ->where(function ($query) use ($favoriteMatchIds, $favoriteTeamIds) {
                $query->whereIn('id', $favoriteMatchIds)
                      ->orWhereIn('home_team_id', $favoriteTeamIds)
                      ->orWhereIn('away_team_id', $favoriteTeamIds);
            })
            ->orderBy('matchweek')
            ->orderBy('date')
            ->get();

        $groupedByWeek = $allMatches->groupBy('matchweek');
        $groupChunks = $groupedByWeek->chunk(5);

        $page = $request->get('page', 1);
        $currentChunk = $groupChunks->slice($page - 1, 1)->flatten();

        $groupedByDate = $currentChunk->groupBy(function ($match) {
            return \Carbon\Carbon::parse($match->date)->format('d.m');
        });

        $paginator = new LengthAwarePaginator(
            $groupedByDate,
            $groupChunks->count(),
            1,
            $page,
            ['path' => route('favorites')]
        );

        return view('favorites', [
            'groupedMatches' => $paginator,
        ]);
    }
    public function toggleMatch(Matches $match)
    {
         /** @var \App\Models\User $user */
        $user = Auth::user();
        
        if ($user->favoriteMatches()->where('match_id', $match->id)->exists()) {
            $user->favoriteMatches()->detach($match->id);
        } else {
            $user->favoriteMatches()->attach($match->id);
        }

        return back();
    }

    public function toggleTeam(Teams $team)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        if ($user->favoriteTeams()->where('team_id', $team->id)->exists()) {
            $user->favoriteTeams()->detach($team->id);
        } else {
            $user->favoriteTeams()->attach($team->id);
        }

        return back();
    }
}
