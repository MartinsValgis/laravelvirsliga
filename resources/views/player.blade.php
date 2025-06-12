@extends('layout')

@section('title', $player->name)
<head>
    <link rel="icon" type="image/png" href="{{ asset('storage/' . $player->team->logo_path) }}">
</head>


@section('content')

    <div class="container my-5">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ asset($player->img_path) }}" alt="{{ $player->name }}" class="rounded mb-3 img-fluid" style="height: 300px; object-fit: cover;">
                
                <h2 class="fw-bold">{{ $player->name }} #{{ $player->number }}</h2>
                <a href="{{ route('team.show', ['id' => $player->team->id]) }}" class="text-decoration-none text-dark d-inline-flex align-items-center">
                {{ $player->team->name }}
                <img src="{{ asset('storage/' . $player->team->logo_path) }}" alt="{{ $player->team->name }}" style="height: 50px;" class="ms-2">
                </a>

            </div>

            <div class="col-md-8">
                <h3 class="mb-4">Statistika</h3>

                    <table class="table text-center align-middle border border-3 rounded overflow-hidden mb-0 no-inner-borders">
                            <tr>
                                <th><img src="/other/goal.png" alt="Gūtie vārti" style="height: 40px;"></th>
                                <th><img src="/other/assist.png" alt="Rezultatīvās piespēles" style="height: 40px;"></th>
                                <th><img src="/other/yellowcard.png" alt="Dzeltenās kartītes" style="height: 40px;"></th>
                                <th><img src="/other/redcard.png" alt="Sarkanās kartītes" style="height: 40px;"></th>
                            </tr>
                            <tr>
                                <td>{{ $goals }}</td>
                                <td>{{ $assists }}</td>
                                <td>{{ $yellowCards }}</td>
                                <td>{{ $redCards }}</td>
                            </tr>
                    </table>
            </div>
        </div>
        <div class="row pt-5">
            <h2>Citi {{ $player->team->name }} spēlētāji:</h2>
            <div class="d-flex flex-wrap gap-4 mt-3">
            @foreach($player->team->players->where('id', '!=', $player->id) as $teammate)
            <div class="text-center" style="width: 100px;">
            <a href="{{ route('player.show', $teammate->id) }}" class="text-decoration-none text-dark">
                <img src="{{ asset('storage/' . $teammate->img_path) }}" alt="{{ $teammate->name }}" class="img-fluid mb-2" style="height: 100px; width: 100px; object-fit: cover;">
                <div style="font-size: 0.9em;">{{ $teammate->name }}</div>
            </a>
            </div>
             @endforeach
            </div>
        </div>
    </div>


    
@endsection