@extends('layout')
@section('title', 'Turnīra tabula')

<head>
    <link rel="icon" type="image/png" href="{{ asset('storage/other/logofavicon.png') }}">
</head>

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Turnīra tabula</h2>

    <table class="table table-striped table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>Vieta</th>
                <th>Komanda</th>
                <th>Spēles</th>
                <th>Uzvaras</th>
                <th>Neizšķirti</th>
                <th>Zaudējumi</th>
                <th>Gūtie</th>
                <th>Ielaistie</th>
                <th>Attiecība</th>
                <th>Punkti</th>
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
        <p class="mb-0">- Vieta UEFA Čempionu līgas kvalifikācijā</p>
    </div>

    <div class="d-flex align-items-center mb-2">
        <div class="kubs konf me-2"></div>
        <p class="mb-0">- Vieta UEFA Konferences līgas kvalifikācijā</p>
    </div>

    <div class="d-flex align-items-center mb-2">
        <div class="kubs parsp me-2"></div>
        <p class="mb-0">- Vieta virslīgas pārspēlēs</p>
    </div>

    <div class="d-flex align-items-center mb-2">
        <div class="kubs releg me-2"></div>
        <p class="mb-0">- Automātiska izkrišana no virslīgas</p>
    </div>

</div>
@endsection