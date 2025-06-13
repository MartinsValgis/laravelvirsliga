@extends('layout')

@section('title', $match->homeTeam->name .' ' . $match->homegoals . ' - ' . $match->awaygoals .' '. $match->awayTeam->name)
<head>  
    <link rel="icon" type="image/png" href="{{ asset('storage/other/logofavicon.png') }}">
</head>
@section('content')
<div class="container my-5">
    <h2 class="text-center">
                        <a href="{{ route('team.show', ['id' => $match->homeTeam->id]) }}" class="text-decoration-none text-dark">
                        <img src="{{ asset($match->homeTeam->logo_path) }}" alt="{{ $match->homeTeam->name }}" style="height: 80px;" class="mx-2">
                        {{ $match->homeTeam->name }}</a> {{ $match->homegoals }} - {{ $match->awaygoals }} <a href="{{ route('team.show', ['id' => $match->awayTeam->id]) }}" class="text-decoration-none  text-dark">{{ $match->awayTeam->name }}
                        <img src="{{ asset($match->awayTeam->logo_path) }}" alt="{{ $match->awayTeam->name }}" style="height: 80px;" class="mx-2"></a>
                    </h2>
    <p class="text-center text-muted">{{ $match->matchweek }}. kārta, {{ $match->stadium }} – {{ \Carbon\Carbon::parse($match->date)->format('d.m, H:i') }}</p>

    <hr>

    <h4>Spēles notikumi:</h4>
    @forelse($events as $event)
            <div class="d-flex justify-content-center align-items-center text-center">
                <div class="col-4 text-end">
                    @if($event->team_id === $match->homeTeam->id)
                        <div class="align-items-center">
                            <a href="{{ route('player.show', $event->player->id) }}" class="text-decoration-none text-dark"><strong>{{ $event->player->name }}</strong></a>
                            @if($event->type === 'goal')
                                <img src="/other/goal.png" alt="Vārti" style="height: 20px;" title="Vārti">
                                @if($event->assist)
                                    <br>
                                <span>(</span>
                                    <img src="/other/assist.png" alt="Rezultatīvā piespēle" style="height: 20px;" title="Rezultatīvā piespēle">
                                    <a href="{{ route('player.show', $event->assist->id) }}" class="text-decoration-none text-dark"><span>{{ $event->assist->name }})</span></a>
                                @endif
                            @elseif($event->type === 'own_goal')
                                <img src="/other/owngoal.png" alt="Savos vārtos" style="height: 20px;" title="Savos vārtos">
                             @elseif($event->type === 'yellow')
                                <span style="font-size: 20px;"><img src="/other/yellowcard.png" alt="dzeltena kartiņa" style="height: 20px;" title="dzeltena kartiņa"></span>
                            @elseif($event->type === 'red')
                                <span style="font-size: 20px;"><img src="/other/redcard.png" alt="sarkana kartiņa" style="height: 20px;" title="sarkana kartiņa"></span>
                            @endif
                        </div>
                    @endif
                </div>

                <div class="col-4 text-center text-muted py-4" style="width: 10%">
                    {{ $event->minute }}'
                </div>

                <div class="col-4 text-start">
                    @if($event->team_id === $match->awayTeam->id)
                        <span>
                            @if($event->type === 'goal') 
                                <img src="/other/goal.png" alt="Vārti" style="height: 20px;" title="Vārti">
                            @elseif($event->type === 'own_goal')
                                <img src="/other/owngoal.png" alt="Savos vārtos" style="height: 20px;" title="Savos vārtos">
                             @elseif($event->type === 'yellow')
                                <span style="font-size: 20px;"><img src="/other/yellowcard.png" alt="dzeltena kartiņa" style="height: 20px;" title="dzeltena kartiņa"></span>
                            @elseif($event->type === 'red')
                                <span style="font-size: 20px;"><img src="/other/redcard.png" alt="sarkana kartiņa" style="height: 20px;" title="sarkana kartiņa"></span>
                            @endif
                            <a href="{{ route('player.show', $event->player->id) }}" class="text-decoration-none text-dark"><strong>{{ $event->player->name }}</strong></a>
                            @if($event->type === 'goal' && isset($event->assist))
                            <br>
                                <span>(</span>
                                    <img src="/other/assist.png" alt="Rezultatīvā piespēle" style="height: 20px;" title="Rezultatīvā piespēle">
                                    <a href="{{ route('player.show', $event->assist->id) }}" class="text-decoration-none text-dark"><span>{{ $event->assist->name }})</span></a>
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