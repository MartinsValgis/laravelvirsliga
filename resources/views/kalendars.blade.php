@extends('layout')
@section('title', 'Spēļu kalendārs')

<head>
    <link rel="icon" type="image/png" href="{{ asset('storage/other/logofavicon.png') }}">
</head>
@section('content')
<div class="container my-5">
    @forelse($groupedMatches as $date => $dayMatches)
    @if (!$loop->first)
    <hr class="matchhr">
    @endif
    <h4 class="mb-3">{{ $date }}</h4>

    @foreach($dayMatches as $match)
    <a href="/match/{{ $match->id }}" class="text-decoration-none text-dark">
        <div class="text-center mb-4">
            <h2 class="h5 fw-bold">
                <img src="{{ asset($match->homeTeam->logo_path) }}" alt="{{ $match->homeTeam->name }}"
                    class="mx-2 img40">
                {{ $match->homeTeam->name }} {{ $match->homegoals }} - {{ $match->awaygoals }} {{ $match->awayTeam->name
                }}
                <img src="{{ asset($match->awayTeam->logo_path) }}" alt="{{ $match->awayTeam->name }}"
                    class="mx-2 img40">
            </h2>
            <p class="mb-2 text-muted">
                {{ $match->matchweek }}. Kārta, {{ $match->stadium }}, {{
                \Carbon\Carbon::parse($match->date)->format('H:i') }}
            </p>
            @if (!$loop->last)
            <hr class="mx-auto minihr">
            @endif
        </div>
    </a>
    @endforeach
    @empty
    <p class="text-muted">Nav spēļu.</p>
    @endforelse

    <div class="d-flex flex-column mt-4">
        {{ $groupedMatches->links() }}
    </div>


</div>
@endsection