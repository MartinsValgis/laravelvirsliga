@extends('layout')

@section('title', $match->homeTeam->name .' ' . $match->homegoals . ' - ' . $match->awaygoals .' '.
$match->awayTeam->name)

<head>
    <link rel="icon" type="image/png" href="{{ asset('storage/other/logofavicon.png') }}">
</head>
@section('content')
<div class="container my-5">

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
            <h5>{{ $homePosition }}. vieta</h5>
            <p class="mb-0">Pēdējie 5 rezultāti:</p>
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
            <h5>{{ $awayPosition }}. vieta</h5>
            <p class="mb-0">Pēdējie 5 rezultāti:</p>
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


    <p class="text-center">{{ $match->matchweek }}. kārta, {{ $match->stadium }} – {{
        \Carbon\Carbon::parse($match->date)->format('d.m, H:i') }}</p>
    @if($referee)
    <p class="text-center">
        <strong>Galvenais tiesnesis: {{ $referee->name }}</strong><br>
        Vidēji kartītes: <img src="/other/yellowcard.png" alt="dzeltena kartiņa" class="img20 ps-3"
            title="dzeltena kartiņa"> {{ $avgYellowCards}}
        <img src="/other/redcard.png" alt="sarkana kartiņa" class="img20 ps-3" title="sarkana kartiņa"> {{
        $avgRedCards}}
    </p>
    @endif

    <hr>

    <h4>Spēles notikumi:</h4>
    @forelse($events as $event)
    <div class="d-flex justify-content-center align-items-center text-center">
        <div class="col-4 text-end">
            @if($event->team_id === $match->homeTeam->id)
            <div class="align-items-center">
                <a href="{{ route('player.show', $event->player->id) }}"
                    class="text-decoration-none text-dark"><strong>{{ $event->player->name }}</strong></a>
                @if($event->type === 'goal')
                <img src="/other/goal.png" alt="Vārti" class="img20" title="Vārti">
                @if($event->assist)
                <br>
                <span>(</span>
                <img src="/other/assist.png" alt="Rezultatīvā piespēle" class="img20" title="Rezultatīvā piespēle">
                <a href="{{ route('player.show', $event->assist->id) }}" class="text-decoration-none text-dark"><span>
                        {{$event->assist->name }})</span></a>
                @endif
                @elseif($event->type === 'own_goal')
                <img src="/other/owngoal.png" alt="Savos vārtos" class="img20" title="Savos vārtos">
                @elseif($event->type === 'yellow')
                <img src="/other/yellowcard.png" alt="dzeltena kartiņa" class="img20" title="dzeltena kartiņa">
                @elseif($event->type === 'red')
                <img src="/other/redcard.png" alt="sarkana kartiņa" class="img20" title="sarkana kartiņa">
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
                <img src="/other/goal.png" alt="Vārti" class="img20" title="Vārti">
                @elseif($event->type === 'own_goal')
                <img src="/other/owngoal.png" alt="Savos vārtos" class="img20" title="Savos vārtos">
                @elseif($event->type === 'yellow')
                <img src="/other/yellowcard.png" alt="dzeltena kartiņa" class="img20" title="dzeltena kartiņa">
                @elseif($event->type === 'red')
                <img src="/other/redcard.png" alt="sarkana kartiņa" class="img20" title="sarkana kartiņa">
                @endif
                <a href="{{ route('player.show', $event->player->id) }}"
                    class="text-decoration-none text-dark"><strong>{{ $event->player->name }}</strong></a>
                @if($event->type === 'goal' && isset($event->assist))
                <br>
                <span>(</span>
                <img src="/other/assist.png" alt="Rezultatīvā piespēle" class="img20" title="Rezultatīvā piespēle">
                <a href="{{ route('player.show', $event->assist->id) }}" class="text-decoration-none text-dark"><span>{{
                        $event->assist->name }})</span></a>
                @endif
            </span>
            @endif
        </div>
    </div>
    @empty
    @if(\Carbon\Carbon::parse($match->date)->isFuture())
    <p class="text-muted">Šis mačs vēl nav sācies</p>
    @else
    <p class="text-muted">Nav informācijas par šī mača notikumiem</p>
    @endif
    @endforelse

    @endsection