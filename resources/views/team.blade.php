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
                    <div class="d-flex justify-content-center align-items-center gap-2 mt-2">
                        @auth
                        <form class="mb-1" method="POST"
                            action="{{ route('favorites.team.toggle', ['team' => $team->id]) }} ">
                            @csrf
                            <button type="submit" style="background: none; border: none; padding: 0; margin:0;">
                                <img src="{{ auth()->user()->favoriteTeams->contains($team->id) ? asset('/other/star.png') : asset('/other/nostar.png') }}"
                                    alt="favorite" class="img30 mb-0 zvaigzne">
                            </button>
                        </form>
                        @endauth
                        <h1 class="card-title">{{ $team->name }}</h1>
                    </div>
                    <p><strong>{{__('messages.pilseta') }}:</strong> {{ $team->city }}</p>
                    <p><strong>{{__('messages.treneris') }}:</strong> {{ $team->treneris }}</p>
                    <p>{{ $position }}. {{__('messages.vieta') }} – {{ $teamPoints }} {{__('messages.punkti') }}</p>
                </div>
            </div>
            <div class="card shadow-sm">
                <div class="card-header"
                    style="background-color: {{ $team->teamcolor}}; color: {{ $team->teamsecondarycolor}};">
                    <h3 class="mb-0">{{__('messages.speletajicapital') }}</h3>
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
                    <p class="text-muted">{{__('messages.navinfospeletaji') }}</p>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4 shadow-sm">
                <div class="card-header"
                    style="background-color: {{ $team->teamcolor}}; color: {{ $team->teamsecondarycolor}};">
                    <h3 class="mb-0">{{__('messages.nakamas3speles') }}</h3>
                </div>
                <div class="card-body">
                    @forelse($upcomingMatches as $match)
                    <a href="/match/{{$match['id']}}" class="text-decoration-none text-dark">
                        @if (!$loop->last)
                        <div class="text-center mb-4 p-3 rounded border-bottom">
                            @elseif($loop->last)
                            <div class="text-center mb-4 p-3 rounded">
                                @endif
                                <div class="row justify-content-center align-items-center text-center">
                                    <div class="col text-end ps-0">
                                        <h5 class="fw-bold">
                                            @if($match->homeTeam->id === $team->id)
                                            <img src="{{ asset('other/home.png') }}"
                                                alt="{{__('messages.majasspele') }}"
                                                title="{{__('messages.majasspele') }}" class="img30">
                                            @else
                                            <img src="{{ asset('other/away.png') }}"
                                                alt="{{__('messages.izbraukumaspele') }}"
                                                title="{{__('messages.izbraukumaspele') }}" class="img30">
                                            @endif


                                            {{ $match->homeTeam->name }}
                                            <img src="{{ asset($match->homeTeam->logo_path) }}"
                                                alt="{{ $match->homeTeam->name }}" class="img40 mx-2">
                                        </h5>
                                    </div>
                                    <div class="col-auto p-0">
                                        <h5 class="mb-3">-</h5>
                                    </div>
                                    <div class="col text-start pe-0">
                                        <h5 class="fw-bold">
                                            <img src="{{ asset($match->awayTeam->logo_path) }}"
                                                alt="{{ $match->awayTeam->name }}" class="img40 mx-2">
                                            {{ $match->awayTeam->name }}

                                        </h5>
                                    </div>
                                    <p class="mb-2 text-muted">
                                        {{ $match['matchweek'] }}. {{__('messages.karta') }}, {{
                                        $match['stadium'] }}, {{
                                        \Carbon\Carbon::parse($match->date)->format('d.m, H:i') }}
                                    </p>

                                </div>
                            </div>
                    </a>
                    @empty
                    <p class="text-muted">{{__('messages.navspeluplan') }}.</p>
                    @endforelse
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-header"
                    style="background-color: {{ $team->teamcolor}}; color: {{ $team->teamsecondarycolor}};">
                    <h3 class="mb-0">{{__('messages.pedejas5speles') }}</h3>
                </div>
                <div class="card-body">
                    @forelse($pastMatches as $match)
                    <a href="/match/{{$match['id']}}" class="text-decoration-none text-dark">
                        @if (!$loop->last)
                        <div class="text-center mb-4 p-3 rounded border-bottom">
                            @elseif($loop->last)
                            <div class="text-center mb-4 p-3 rounded">
                                @endif
                                <div class="row justify-content-center align-items-center text-center">
                                    <div class="col text-end ps-0">
                                        <h5 class="fw-bold">
                                            @if($match->homeTeam->id === $team->id)
                                            <img src="{{ asset('other/home.png') }}"
                                                alt="{{__('messages.majasspele') }}"
                                                title="{{__('messages.majasspele') }}" class="img30">
                                            @else
                                            <img src="{{ asset('other/away.png') }}"
                                                alt="{{__('messages.izbraukumaspele') }}"
                                                title="{{__('messages.izbraukumaspele') }}" class="img30">
                                            @endif
                                            {{ $match->homeTeam->name }}
                                            <img src="{{ asset($match->homeTeam->logo_path) }}"
                                                alt="{{ $match->homeTeam->name }}" class="img40 mx-2">
                                            {{ $match['homegoals'] }}
                                            <h5>
                                    </div>
                                    <div class="col-auto">
                                        <h5 class="mb-3 fw-bold">-</h5>
                                    </div>
                                    <div class="col text-start pe-0">
                                        <h5 class="fw-bold">
                                            {{ $match['awaygoals'] }} <img
                                                src="{{ asset($match->awayTeam->logo_path) }}"
                                                alt="{{ $match->awayTeam->name }}" class="img40 mx-2">

                                            {{ $match->awayTeam->name }}

                                        </h5>
                                    </div>
                                    <p class="mb-2 text-muted">
                                        {{ $match['matchweek'] }}. {{__('messages.karta') }}, {{ $match['stadium'] }},
                                        {{
                                        \Carbon\Carbon::parse($match->date)->format('d.m, H:i') }}
                                    </p>
                                </div>
                            </div>
                    </a>
                    @empty
                    <p class="text-muted">{{__('messages.navspelesbeigusas') }}.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>


@endsection