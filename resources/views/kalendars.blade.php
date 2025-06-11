@extends('layout')
@section('title', 'Spēļu saraksts')

@section('content')
    <h1 class="mb-4">Spēļu saraksts</h1>

@if(count($matches)==0)
<p>nav ko parādīt</p>
@endif

    <ul>
@foreach($matches as $match)
<li><a href="/match/{{$match['id']}}" class="text-decoration-none">

    <h2>
        <img src="{{$match->homeTeam->logo_path}}" alt="{{ $match->homeTeam->name }}" class="" style="height: 40px;">
        {{ $match->homeTeam->name }} {{$match['homegoals']}} - {{$match['awaygoals']}} {{ $match->awayTeam->name }}
        <img src="{{$match->awayTeam->logo_path}}" alt="{{ $match->awayTeam->name }}" class="" style="height: 40px;">
    </h2>
    <p>
        {{$match['stadium']}} , {{$match['date']}}
    </p>
    <hr>
</a></li>
@endforeach
</ul>
@endsection