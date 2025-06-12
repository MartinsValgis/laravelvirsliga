<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<div class="bg-danger py-3">
    <div class="d-flex">
        <div class="ps-3">
            <img src="{{ asset('other/virsligalogo.png') }}" alt="Virslīga Logo" class="img-fluid" style="height: 100px;">
        </div>
        <div class="flex-grow-1">
            <div class="container">
                <div class="d-flex justify-content-center flex-wrap gap-3 mb-3">
                    @foreach($teams as $team)
                        <a href="/team/{{$team['id']}}" class="d-inline-block">
                            <img src="{{ asset($team['logo_path']) }}" alt="{{$team['name']}}" class="img-fluid" style="height: 40px;">
                        </a>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center gap-3">
                    <a href="/" class="btn border border-warning text-warning">Kalendārs</a>
                    <a href="/favorite" class="btn border border-warning text-warning">Izlase</a>
                    <a href="/konts" class="btn border border-warning text-warning">Konts</a>
                </div>
            </div>
        </div>
    </div>
</div>

    
        @yield('content')
    

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>