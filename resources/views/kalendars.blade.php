@extends('layout')
@section('title', __('messages.kalendars') )

<head>
    <link rel="icon" type="image/png" href="{{ asset('storage/other/logofavicon.png') }}">
</head>
@section('content')
<div class="container my-5">
    <h2 class="text-center">{{__('messages.kalendars') }}</h2>
    @forelse($groupedMatches as $date => $dayMatches)
    @if (!$loop->first)
    <hr class="matchhr">
    @endif
    <h4 class="mb-3">{{ $date }}</h4>

    @foreach($dayMatches as $match)
    <a href="/match/{{ $match->id }}" class="text-decoration-none text-dark">
        <div>
            @auth
            <form class="mb-1" method="POST" action="{{ route('favorites.match.toggle', $match->id) }}">
                @csrf
                <button type="submit" style="background: none; border: none; padding: 0; margin:0;">
                    <img src="{{ auth()->user()->favoriteMatches->contains($match->id) ? asset('/other/star.png') : asset('/other/nostar.png') }}"
                        alt="favorite" class="img30 mb-0 zvaigzne">
                </button>
            </form>
            @endauth
            <div class="text-center mb-4">
                <div class="row justify-content-center align-items-center text-center">
                    <div class="col text-end">
                        <h5 class="d-inline-flex align-items-center">
                            @auth
                            <form class="mb-1 me-1" method="POST"
                                action="{{ route('favorites.team.toggle', ['team' => $match->homeTeam->id]) }}"
                                style="display: inline-block;">
                                @csrf
                                <button type="submit" style="background: none; border: none; padding: 0; margin:0;">
                                    <img src="{{ auth()->user()->favoriteTeams->contains($match->homeTeam->id) ? asset('/other/star.png') : asset('/other/nostar.png') }}"
                                        alt="favorite" class="img30 mb-0 zvaigzne">
                                </button>
                            </form>
                            @endauth
                            {{ $match->homeTeam->name }}
                            <img src="{{ asset($match->homeTeam->logo_path) }}" alt="{{ $match->homeTeam->name }}"
                                class="mx-2 img40">
                            {{ $match->homegoals }}
                        </h5>
                    </div>
                    <div class="col-auto p-0">
                        <h5 class="mb-3">-</h5>
                    </div>
                    <div class="col text-start">
                        <h5 class="d-inline-flex align-items-center">
                            {{ $match->awaygoals }}
                            <img src="{{ asset($match->awayTeam->logo_path) }}" alt="{{ $match->awayTeam->name }}"
                                class="mx-2 img40">
                            {{ $match->awayTeam->name }}
                            @auth
                            <form class="mb-1 ms-1" method="POST"
                                action="{{ route('favorites.team.toggle', ['team' => $match->awayTeam->id]) }}"
                                style="display: inline-block;">
                                @csrf
                                <button type="submit" style="background: none; border: none; padding: 0; margin:0;">
                                    <img src="{{ auth()->user()->favoriteTeams->contains($match->awayTeam->id) ? asset('/other/star.png') : asset('/other/nostar.png') }}"
                                        alt="favorite" class="img30 mb-0 zvaigzne">
                                </button>
                            </form>
                            @endauth
                        </h5>
                    </div>
                </div>

                <p class="mb-2">
                    {{ $match->matchweek }}. {{__('messages.karta') }}, {{ $match->stadium }}, {{
                    \Carbon\Carbon::parse($match->date)->format('H:i') }}
                </p>
                @if (!$loop->last)
                <hr class="mx-auto minihr">
                @endif
            </div>

    </a>
    @endforeach
    @empty
    <p class="text-muted">{{__('messages.navspelu') }}</p>
    @endforelse

    <div class="d-flex flex-column mt-4">
        {{ $groupedMatches->links() }}
    </div>


</div>
@endsection