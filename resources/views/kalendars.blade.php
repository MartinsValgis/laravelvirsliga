@extends('layout')
@section('title', 'Spēļu saraksts')

@section('content')

@if(count($matches)==0)
<p>nav ko parādīt</p>
@endif

<div class="container my-5">
    @foreach($matches as $match)
        <a href="/match/{{$match['id']}}" class="text-decoration-none text-dark">
            <div class="text-center mb-4">
                <h2 class="h4 fw-bold">
                    <img src="{{ $match->homeTeam->logo_path }}" alt="{{ $match->homeTeam->name }}" style="height: 40px;" class="mx-2">
                    {{ $match->homeTeam->name }} {{ $match['homegoals'] }} - {{ $match['awaygoals'] }} {{ $match->awayTeam->name }}
                    <img src="{{ $match->awayTeam->logo_path }}" alt="{{ $match->awayTeam->name }}" style="height: 40px;" class="mx-2">
                </h2>
                <p class="mb-2 text-muted">
                    {{ $match['stadium'] }}, {{ $match['date'] }}
                </p>
                <hr class="mx-auto" style="width: 700px; border-top: 2px solid #ccc;">
            </div>
        </a>
    @endforeach
</div>

@endsection