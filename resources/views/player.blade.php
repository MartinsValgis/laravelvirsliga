@extends('layout')
@section('teamcolor', $player->team->teamcolor)
@section('teamsecondarycolor', $player->team->teamsecondarycolor)
@section('title', $player->name)

<head>
    <link rel="icon" type="image/png" href="{{ asset('storage/' . $player->team->logo_path) }}">
</head>


@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="{{ asset($player->img_path) }}" alt="{{ $player->name }}" class="rounded mb-3 img-fluid img300">

            <h2 class="fw-bold">{{ $player->name }} #{{ $player->number }}</h2>
            <a href="{{ route('team.show', ['id' => $player->team->id]) }}"
                class="text-decoration-none text-dark d-inline-flex align-items-center">
                <h3>{{ $player->team->name }}</h3>
                <img src="{{ asset('storage/' . $player->team->logo_path) }}" alt="{{ $player->team->name }}"
                    class="ms-2 img80">
            </a>

        </div>

        <div class="col-md-8">
            <h3 class="mb-4">{{__('messages.statistika') }}</h3>

            <table class="table text-center align-middle border border-3 rounded overflow-hidden mb-0" style="
        background-color: {{ $player->team->teamcolor }};
        color: {{ $player->team->teamsecondarycolor }};
        border-color: {{ $player->team->teamsecondarycolor }};
    ">

                <tr class="playertable">
                    <th>
                        <img src="/other/goal.png" alt="{{__('messages.vartivairaki') }}" class="img40" title="{{__('messages.vartivairaki') }}">
                    </th>
                    <th>
                        <img src="/other/assist.png" alt="{{__('messages.piespeles') }}" class="img40" title="{{__('messages.piespeles') }}">
                    </th>
                    <th>
                        <img src="/other/yellowcard.png" alt="{{__('messages.dzeltenaskartinas') }}" class="img40"
                            title="{{__('messages.dzeltenaskartinas') }}">
                    </th>
                    <th>
                        <img src="/other/redcard.png" alt="{{__('messages.sarkanaskartinas') }}" class="img40" title="{{__('messages.sarkanaskartinas') }}">
                    </th>
                </tr>
                <tr class="playertable">
                    <td>
                        {{ $goals }}</td>
                    <td>
                        {{ $assists }}</td>
                    <td>
                        {{ $yellowCards }}</td>
                    <td>
                        {{ $redCards }}</td>
                </tr>
            </table>


        </div>
    </div>
    <div class="row pt-5">
        <h2>{{__('messages.citi') }} {{ $player->team->name }} {{__('messages.speletaji') }}:</h2>
        <div class="d-flex flex-wrap gap-4 mt-3">
            @foreach($player->team->players->where('id', '!=', $player->id) as $teammate)
            <div class="text-center" class="img100">
                <a href="{{ route('player.show', $teammate->id) }}" class="text-decoration-none text-dark">
                    <img src="{{ asset('storage/' . $teammate->img_path) }}" alt="{{ $teammate->name }}"
                        class="img-fluid mb-2 img100" >
                    <p>{{ $teammate->name }}</p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>



@endsection