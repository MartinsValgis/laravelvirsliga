@extends('layout')
@section('title', __('messages.tabula'))

<head>
    <link rel="icon" type="image/png" href="{{ asset('storage/other/logofavicon.png') }}">
</head>

@section('content')
<div class="container my-5">
    <h2 class="mb-4 text-center">{{__('messages.tabula') }}</h2>

    <table class="table table-striped table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>{{__('messages.vieta') }}</th>
                <th>{{__('messages.komanda') }}</th>
                <th>{{__('messages.speles') }}</th>
                <th>{{__('messages.uzvaras') }}</th>
                <th>{{__('messages.neizskirti') }}</th>
                <th>{{__('messages.zaudejumi') }}</th>
                <th>{{__('messages.gutievarti') }}</th>
                <th>{{__('messages.ielaistievarti') }}</th>
                <th>{{__('messages.vartuattieciba') }}</th>
                <th>{{__('messages.punkti') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($table as $index => $row)
            <tr>
                <td @class([ 'ucl'=> $index + 1 == 1,
                    'konf' => $index + 1==2||$index + 1==3,
                    'parsp' => $index + 1==9,
                    'releg' => $index + 1==10,
                    'bold'
                    ])
                    >{{ $index + 1 }}</td>
                <td><a href="/team/{{$row->team->id}}" class="text-decoration-none text-dark">{{ $row->team->name }}</a>
                </td>
                <td>{{ $row->played }}</td>
                <td>{{ $row->wins }}</td>
                <td>{{ $row->draws }}</td>
                <td>{{ $row->losses }}</td>
                <td>{{ $row->goals_for }}</td>
                <td>{{ $row->goals_against }}</td>
                <td>{{ $row->goal_difference }}</td>
                <td>{{ $row->points }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


    <div class="d-flex align-items-center mb-2">
        <div class="kubs ucl me-2"></div>
        <p class="mb-0">- {{__('messages.ucl') }}</p>
    </div>

    <div class="d-flex align-items-center mb-2">
        <div class="kubs konf me-2"></div>
        <p class="mb-0">- {{__('messages.konf') }}</p>
    </div>

    <div class="d-flex align-items-center mb-2">
        <div class="kubs parsp me-2"></div>
        <p class="mb-0">- {{__('messages.parsp') }}</p>
    </div>

    <div class="d-flex align-items-center mb-2">
        <div class="kubs releg me-2"></div>
        <p class="mb-0">- {{__('messages.releg') }}</p>
    </div>

</div>
@endsection