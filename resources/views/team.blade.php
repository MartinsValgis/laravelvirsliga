@extends('layout')

@section('title', $team->name)

@section('content')
    <div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4 shadow-sm">
                <div class="card-body text-center">
                    <img src="{{ asset('storage/' . $team->logo_path) }}" alt="Logo" class="img-fluid mb-3" style="max-height: 150px;">
                    <h1 class="card-title">{{ $team->name }}</h1>
                    <p class="text-muted"><strong>Pilsēta:</strong> {{ $team->city }}</p>
                </div>
            </div>
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Spēlētāji</h3>
                </div>
                <div class="card-body">
                    @foreach($team->players as $player)
                        <div class="d-flex align-items-center mb-4 border-bottom pb-3">
                            <img src="{{ asset($player->img_path) }}" alt="{{ $player->name }}" class="rounded mx-2" style="height: 120px; width: 120px; object-fit: cover;">
                            <div>
                                <h5 class="mb-1">#{{ $player->number }} — {{ $player->name }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">Nākamās spēles</h3>
                </div>
                <div class="card-body">
                    @forelse($upcomingMatches as $match)
                        <a href="/match/{{$match['id']}}" class="text-decoration-none text-dark">
                            <div class="text-center mb-4 p-3 rounded hover-bg-light">
                                <h2 class="h5 fw-bold">
                                    <img src="{{ asset($match->homeTeam->logo_path) }}" alt="{{ $match->homeTeam->name }}" style="height: 40px;" class="mx-2">
                                    {{ $match->homeTeam->name }} {{ $match['homegoals'] }} - {{ $match['awaygoals'] }} {{ $match->awayTeam->name }}
                                    <img src="{{ asset($match->awayTeam->logo_path) }}" alt="{{ $match->awayTeam->name }}" style="height: 40px;" class="mx-2">
                                </h2>
                                <p class="mb-2 text-muted">
                                    {{ $match['stadium'] }}, {{$match['date']}}
                                </p>
                                <hr class="mx-auto" style="width: 700px; border-top: 2px solid #ccc;">
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
                            <div class="text-center mb-4 p-3 rounded hover-bg-light">
                                <h2 class="h5 fw-bold">
                                    <img src="{{ asset($match->homeTeam->logo_path) }}" alt="{{ $match->homeTeam->name }}" style="height: 40px;" class="mx-2">
                                    {{ $match->homeTeam->name }} {{ $match['homegoals'] }} - {{ $match['awaygoals'] }} {{ $match->awayTeam->name }}
                                    <img src="{{ asset($match->awayTeam->logo_path) }}" alt="{{ $match->awayTeam->name }}" style="height: 40px;" class="mx-2">
                                </h2>
                                <p class="mb-2 text-muted">
                                    {{ $match['stadium'] }}, {{$match['date']}}
                                </p>
                                <hr class="mx-auto" style="width: 700px; border-top: 2px solid #ccc;">
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