@extends('layout')

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
                    <img src="{{ asset('storage/' . $team->logo_path) }}" alt="Logo" class="img-fluid mb-3" style="max-height: 150px;">
                    <h1 class="card-title">{{ $team->name }}</h1>
                    <p class="text-muted"><strong>Pilsēta:</strong> {{ $team->city }}</p>
                    <p class="text-muted"><strong>Galvenais treneris:</strong> {{ $team->treneris }}</p>
                </div>
            </div>
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Spēlētāji</h3>
                </div>
                <div class="card-body">
                    @forelse($team->players as $player)
                        <a href="/player/{{$player['id']}}" class="text-decoration-none text-dark">
                            <div class="d-flex align-items-center mb-4 border-bottom pb-3">
                            <img src="{{ asset($player->img_path) }}" alt="{{ $player->name }}" class="rounded mx-2" style="height: 120px; width: 120px; object-fit: cover;">
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
                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">Nākamās 3 spēles</h3>
                </div>
                <div class="card-body">
                    @forelse($upcomingMatches as $match)
                        <a href="/match/{{$match['id']}}" class="text-decoration-none text-dark">
                            <div class="text-center mb-4 p-3 rounded border-bottom">
                                
                                <h2 class="h5 fw-bold">
                                    @if($match->homeTeam->id === $team->id)
                                        <img src="{{ asset('other/home.png') }}" alt="Mājas spēle" style="height: 30px;" class="me-3">
                                    @else
                                        <img src="{{ asset('other/away.png') }}" alt="Izbraukuma spēle" style="height: 30px;" class="me-3">
                                    @endif
                                    <img src="{{ asset($match->homeTeam->logo_path) }}" alt="{{ $match->homeTeam->name }}" style="height: 40px;" class="mx-2">
                                    {{ $match->homeTeam->name }} - {{ $match->awayTeam->name }}
                                    <img src="{{ asset($match->awayTeam->logo_path) }}" alt="{{ $match->awayTeam->name }}" style="height: 40px;" class="mx-2">
                                </h2>
                                <p class="mb-2 text-muted">
                                    {{ $match['matchweek'] }}. Kārta, {{ $match['stadium'] }}, {{$match['date']}}
                                </p>
                            </div>
                        </a>
                    @empty
                        <p class="text-muted">Nav plānoto spēļu.</p>
                    @endforelse
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-header bg-secondary text-white">
                    <h3 class="mb-0">Rezultāti</h3>
                </div>
                <div class="card-body">
                    @forelse($pastMatches as $match)
                        <a href="/match/{{$match['id']}}" class="text-decoration-none text-dark">
                            <div class="text-center mb-4 p-3 rounded border-bottom">
                                <h2 class="h5 fw-bold">
                                    @if($match->homeTeam->id === $team->id)
                                        <img src="{{ asset('other/home.png') }}" alt="Mājas spēle" style="height: 30px;" class="me-3">
                                    @else
                                        <img src="{{ asset('other/away.png') }}" alt="Izbraukuma spēle" style="height: 30px;" class="me-3">
                                    @endif
                                    <img src="{{ asset($match->homeTeam->logo_path) }}" alt="{{ $match->homeTeam->name }}" style="height: 40px;" class="mx-2">
                                    {{ $match->homeTeam->name }} {{ $match['homegoals'] }} - {{ $match['awaygoals'] }} {{ $match->awayTeam->name }}
                                    <img src="{{ asset($match->awayTeam->logo_path) }}" alt="{{ $match->awayTeam->name }}" style="height: 40px;" class="mx-2">
                                </h2>
                                <p class="mb-2 text-muted">
                                    {{ $match['matchweek'] }}. Kārta, {{ $match['stadium'] }}, {{$match['date']}}
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