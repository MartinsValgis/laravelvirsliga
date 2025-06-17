@extends('layout')
@section('teamcolor', $team->teamcolor)
@section('teamsecondarycolor', $team->teamsecondarycolor)
@section('title', $team->name)

<head>
    <link rel="icon" type="image/png" href="{{ asset('storage/' . $team->logo_path) }}">
</head>

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4 shadow-sm">
                <div class="card-body text-center">
                    <img src="{{ asset('storage/' . $team->logo_path) }}" alt="Logo" class="img-fluid img150">
                    <h1 class="card-title">{{ $team->name }}</h1>
                    <p><strong>Pilsēta:</strong> {{ $team->city }}</p>
                    <p><strong>Galvenais treneris:</strong> {{ $team->treneris }}</p>
                    <p>{{ $position }}. vieta – {{ $teamPoints }} punkti</p>
                </div>
            </div>
            <div class="card shadow-sm">
                <div class="card-header"
                    style="background-color: {{ $team->teamcolor}}; color: {{ $team->teamsecondarycolor}};">
                    <h3 class="mb-0">Spēlētāji</h3>
                </div>
                <div class="card-body">
                    @forelse($team->players as $player)
                    <a href="/player/{{$player['id']}}" class="text-decoration-none text-dark">
                        @if (!$loop->last)
                        <div class="d-flex align-items-center mb-4 border-bottom pb-3">
                            @elseif($loop->last)
                            <div class="d-flex align-items-center mb-4 pb-3">
                                @endif
                                <img src="{{ asset($player->img_path) }}" alt="{{ $player->name }}" class="img100">
                                <div>
                                    <h5 class="mb-1">#{{ $player->number }} - {{ $player->name }}</h5>
                                </div>
                            </div>
                    </a>
                    @empty
                    <p class="text-muted">Nav informācijas par spēlētājiem</p>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4 shadow-sm">
                <div class="card-header"
                    style="background-color: {{ $team->teamcolor}}; color: {{ $team->teamsecondarycolor}};">
                    <h3 class="mb-0">Nākamās 3 spēles</h3>
                </div>
                <div class="card-body">
                    @forelse($upcomingMatches as $match)
                    <a href="/match/{{$match['id']}}" class="text-decoration-none text-dark">
                        @if (!$loop->last)
                        <div class="text-center mb-4 p-3 rounded border-bottom">
                            @elseif($loop->last)
                            <div class="text-center mb-4 p-3 rounded">
                                @endif
                                <h2 class="h5 fw-bold">
                                    @if($match->homeTeam->id === $team->id)
                                    <img src="{{ asset('other/home.png') }}" alt="Mājas spēle" class="img30">
                                    @else
                                    <img src="{{ asset('other/away.png') }}" alt="Izbraukuma spēle" class="img30">
                                    @endif


                                    {{ $match->homeTeam->name }}
                                    <img src="{{ asset($match->homeTeam->logo_path) }}"
                                        alt="{{ $match->homeTeam->name }}" class="img40 mx-2">
                                    -
                                    <img src="{{ asset($match->awayTeam->logo_path) }}"
                                        alt="{{ $match->awayTeam->name }}" class="img40 mx-2">
                                    {{ $match->awayTeam->name }}

                                </h2>
                                <p class="mb-2 text-muted">
                                    {{ $match['matchweek'] }}. Kārta, {{ $match['stadium'] }}, {{
                                    \Carbon\Carbon::parse($match->date)->format('d.m, H:i') }}
                                </p>
                                @if($loop->first)
                                <div class="countdown" data-end-time="{{ $match->date }}"></div>
                                @endif
                            </div>
                    </a>
                    @empty
                    <p class="text-muted">Nav plānoto spēļu.</p>
                    @endforelse
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-header"
                    style="background-color: {{ $team->teamcolor}}; color: {{ $team->teamsecondarycolor}};">
                    <h3 class="mb-0">Pēdējās 5 spēles</h3>
                </div>
                <div class="card-body">
                    @forelse($pastMatches as $match)
                    <a href="/match/{{$match['id']}}" class="text-decoration-none text-dark">
                        @if (!$loop->last)
                        <div class="text-center mb-4 p-3 rounded border-bottom">
                            @elseif($loop->last)
                            <div class="text-center mb-4 p-3 rounded">
                                @endif
                                <h2 class="h5 fw-bold">
                                    @if($match->homeTeam->id === $team->id)
                                    <img src="{{ asset('other/home.png') }}" alt="Mājas spēle" class="img30">
                                    @else
                                    <img src="{{ asset('other/away.png') }}" alt="Izbraukuma spēle" class="img30">
                                    @endif
                                    {{ $match->homeTeam->name }}
                                    <img src="{{ asset($match->homeTeam->logo_path) }}"
                                        alt="{{ $match->homeTeam->name }}" class="img40 mx-2">
                                    {{ $match['homegoals'] }}-{{ $match['awaygoals'] }} <img
                                        src="{{ asset($match->awayTeam->logo_path) }}"
                                        alt="{{ $match->awayTeam->name }}" class="img40 mx-2">

                                    {{ $match->awayTeam->name }}

                                </h2>
                                <p class="mb-2 text-muted">
                                    {{ $match['matchweek'] }}. Kārta, {{ $match['stadium'] }}, {{
                                    \Carbon\Carbon::parse($match->date)->format('d.m, H:i') }}
                                </p>
                            </div>
                    </a>
                    @empty
                    <p class="text-muted">Nav beigušos spēļu.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>


@endsection