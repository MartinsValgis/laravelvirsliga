@extends('layout')
@section('title', 'Spēļu kalendārs')
<head>  
    <link rel="icon" type="image/png" href="{{ asset('storage/other/logofavicon.png') }}">
</head>
@section('content')
<div class="container my-5">
    @forelse($groupedMatches as $date => $dayMatches)
        @if (!$loop->first)
        <hr class="mx-auto" style="width: 100%; border-top: 2px solid #000000;">
        @endif
        <h4 class="mb-3">{{ $date }}</h4>

        @foreach($dayMatches as $match)
            <a href="/match/{{ $match->id }}" class="text-decoration-none text-dark">
                <div class="text-center mb-4">
                    <h2 class="h5 fw-bold">
                        <img src="{{ asset($match->homeTeam->logo_path) }}" alt="{{ $match->homeTeam->name }}" style="height: 40px;" class="mx-2">
                        {{ $match->homeTeam->name }} {{ $match->homegoals }} - {{ $match->awaygoals }} {{ $match->awayTeam->name }}
                        <img src="{{ asset($match->awayTeam->logo_path) }}" alt="{{ $match->awayTeam->name }}" style="height: 40px;" class="mx-2">
                    </h2>
                    <p class="mb-2 text-muted">
                        {{ $match->matchweek }}. Kārta, {{ $match->stadium }}, {{ \Carbon\Carbon::parse($match->date)->format('H:i') }}
                    </p>
                    @if (!$loop->last)
                        <hr class="mx-auto" style="width: 30%; border-top: 2px solid #ccc;">
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