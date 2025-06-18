@extends('layout')

@section('title', $match->homeTeam->name .' ' . $match->homegoals . ' - ' . $match->awaygoals .' '.
$match->awayTeam->name)

<head>
    <link rel="icon" type="image/png" href="{{ asset('storage/other/logofavicon.png') }}">
</head>
@section('content')
<div class="container my-5">
    
    @auth
    <form class="mb-1" method="POST" action="{{ route('favorites.match.toggle', $match->id) }}">
        @csrf
        <button type="submit" style="background: none; border: none; padding: 0; margin:0;">
            <img src="{{ auth()->user()->favoriteMatches->contains($match->id) ? asset('/other/star.png') : asset('/other/nostar.png') }}"
                alt="favorite" class="img30 mb-0 zvaigzne">
        </button>
    </form>
    @endauth
    
    <div class="row justify-content-center align-items-center text-center">

        <div class="col text-end">
            <h2>
                <a href="{{ route('team.show', ['id' => $match->homeTeam->id]) }}"
                    class="text-decoration-none text-dark">
                    {{ $match->homeTeam->name }}
                    <img src="{{ asset($match->homeTeam->logo_path) }}" alt="{{ $match->homeTeam->name }}"
                        class="mx-2 img80">
                </a>
                {{ $match->homegoals }}
            </h2>
        </div>
        <div class="col-auto">
            <h2 class="mb-3">-</h2>
        </div>
        <div class="col text-start">
            <h2>
                {{ $match->awaygoals }}
                <a href="{{ route('team.show', ['id' => $match->awayTeam->id]) }}"
                    class="text-decoration-none text-dark">
                    <img src="{{ asset($match->awayTeam->logo_path) }}" alt="{{ $match->awayTeam->name }}"
                        class="mx-2 img80">
                    {{ $match->awayTeam->name }}
                </a>
            </h2>
        </div>

    </div>


    @if(($match->date)>now())
    <div class="row mb-3">

        <div class="col-md-6 text-end pe-5">
            <h5>{{ $homePosition }}. {{__('messages.vieta') }}</h5>
            <p class="mb-0">{{__('messages.ped5') }}:</p>
            <div class="d-flex gap-2 justify-content-end">
                @foreach($homeRecentForm as $symbol)
                <div @class([ 'ucl'=> $symbol == 'W',
                    'parsp' => $symbol == 'D',
                    'releg' => $symbol == 'L',
                    'kubs',
                    'text-center'
                    ])>
                    {{ $symbol }}
                </div>
                @endforeach
            </div>
        </div>

        <div class="col-md-6 text-start ps-5">
            <h5>{{ $awayPosition }}. {{__('messages.vieta') }}</h5>
            <p class="mb-0">{{__('messages.ped5') }}:</p>
            <div class="d-flex gap-2 justify-content-start">
                @foreach($awayRecentForm as $symbol)
                <div @class([ 'ucl'=> $symbol == 'W',
                    'parsp' => $symbol == 'D',
                    'releg' => $symbol == 'L',
                    'kubs',
                    'text-center',
                    ])>
                    {{ $symbol }}
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif


    <p class="text-center">{{ $match->matchweek }}. {{__('messages.karta') }}, {{ $match->stadium }} – {{
        \Carbon\Carbon::parse($match->date)->format('d.m, H:i') }}</p>
    {{-- Laikapstaklis --}}
    @if($referee)
    <p class="text-center">
        <strong>{{__('messages.tiesnesis') }}: {{ $referee->name }}</strong><br>
        {{__('messages.kartites') }}: <img src="/other/yellowcard.png" alt="{{__('messages.dzeltenaskartinas') }}"
            class="img20 ps-3" title="{{__('messages.dzeltenaskartinas') }}"> {{ $avgYellowCards}}
        <img src="/other/redcard.png" alt="{{__('messages.sarkanaskartinas') }}" class="img20 ps-3"
            title="{{__('messages.sarkanaskartinas') }}"> {{
        $avgRedCards}}
    </p>
    @endif

    <hr>

    <h4>{{__('messages.notikumi') }}:</h4>
    @forelse($events as $event)
    <div class="d-flex justify-content-center align-items-center text-center">
        <div class="col-4 text-end">
            @if($event->team_id === $match->homeTeam->id)
            <div class="align-items-center">
                <a href="{{ route('player.show', $event->player->id) }}"
                    class="text-decoration-none text-dark"><strong>{{ $event->player->name }}</strong></a>
                @if($event->type === 'goal')
                <img src="/other/goal.png" alt="{{__('messages.varti') }}" class="img20"
                    title="{{__('messages.varti') }}">
                @if($event->assist)
                <br>
                <span>(</span>
                <img src="/other/assist.png" alt="{{__('messages.piespele') }}" class="img20"
                    title="{{__('messages.piespele') }}">
                <a href="{{ route('player.show', $event->assist->id) }}" class="text-decoration-none text-dark"><span>
                        {{$event->assist->name }})</span></a>
                @endif
                @elseif($event->type === 'own_goal')
                <img src="/other/owngoal.png" alt="{{__('messages.owngoal') }}" class="img20"
                    title="{{__('messages.owngoal') }}">
                @elseif($event->type === 'yellow')
                <img src="/other/yellowcard.png" alt="{{__('messages.dzeltenakartina') }}" class="img20"
                    title="{{__('messages.dzeltenakartina') }}">
                @elseif($event->type === 'red')
                <img src="/other/redcard.png" alt="{{__('messages.sarkanakartina') }}" class="img20"
                    title="{{__('messages.sarkanakartina') }}">
                @endif
            </div>
            @endif
        </div>

        <div class="col-4 text-center text-muted py-4" id="minute">
            {{ $event->minute }}'
        </div>

        <div class="col-4 text-start">
            @if($event->team_id === $match->awayTeam->id)
            <span>
                @if($event->type === 'goal')
                <img src="/other/goal.png" alt="{{__('messages.varti') }}" class="img20"
                    title="{{__('messages.varti') }}">
                @elseif($event->type === 'own_goal')
                <img src="/other/owngoal.png" alt="{{__('messages.owngoal') }}" class="img20"
                    title="{{__('messages.owngoal') }}">
                @elseif($event->type === 'yellow')
                <img src="/other/yellowcard.png" alt="{{__('messages.dzeltenakartina') }}" class="img20"
                    title="{{__('messages.dzeltenakartina') }}">
                @elseif($event->type === 'red')
                <img src="/other/redcard.png" alt="{{__('messages.sarkanakartina') }}" class="img20"
                    title="{{__('messages.sarkanakartina') }}">
                @endif
                <a href="{{ route('player.show', $event->player->id) }}"
                    class="text-decoration-none text-dark"><strong>{{ $event->player->name }}</strong></a>
                @if($event->type === 'goal' && isset($event->assist))
                <br>
                <span>(</span>
                <img src="/other/assist.png" alt="{{__('messages.piespele') }}" class="img20"
                    title="{{__('messages.piespele') }}">
                <a href="{{ route('player.show', $event->assist->id) }}" class="text-decoration-none text-dark"><span>{{
                        $event->assist->name }})</span></a>
                @endif
            </span>
            @endif
        </div>
    </div>
    @empty
    @if(\Carbon\Carbon::parse($match->date)->isFuture())
    <p class="text-muted">{{__('messages.navsacies') }}</p>
    @else
    <p class="text-muted">{{__('messages.navinfo') }}</p>
    @endif
    @endforelse

    @endsection