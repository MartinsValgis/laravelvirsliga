<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matches;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class KalendarsController extends Controller
{
    public function index(Request $request)
    {
        $allMatches = Matches::with(['homeTeam', 'awayTeam'])
            ->orderBy('matchweek')
            ->orderBy('date')
            ->get();

        $groupedByWeek = $allMatches->groupBy('matchweek');
        $groupChunks = $groupedByWeek->chunk(2);
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
            ['path' => route('home')]
        );

        return view('kalendars', [
            'groupedMatches' => $paginator,
        ]);
    }
}
