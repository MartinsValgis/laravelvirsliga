<!DOCTYPE html>
<html lang="lv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

</head>

<body>
    @php
    $headerColor = View::hasSection('teamcolor') ? trim($__env->yieldContent('teamcolor')) : '#ff0000';
    $bColor = View::hasSection('teamsecondarycolor') ? trim($__env->yieldContent('teamsecondarycolor')) : '#ffffff';
    @endphp

    <div style="background-color: {{ $headerColor }};" class="py-3">
        <div>
            <a href="/">
                <svg width="111" height="54" class="mx-4 m-4 position-absolute" viewBox="0 0 74 36" fill="{{ $bColor }}"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#a)" fill="{{ $bColor }}">
                        <path
                            d="M34.952 25.361c-.852-.435-1.902-.772-2.575-.99-.734-.237-.97-.554-.97-.912 0-.435.435-.772 1.13-.772.694 0 1.643.278 2.535 1.011l1.447-2.02c-1.15-1.09-2.495-1.506-3.923-1.506-2.575 0-4.24 1.387-4.24 3.35 0 1.328.693 2.277 1.942 2.872.653.317 2.12.772 2.693 1.031.475.218.673.455.673.793 0 .535-.574.872-1.328.872-1.07 0-2.099-.502-2.89-1.224l-1.54 2.023c1.137 1.169 2.71 1.797 4.43 1.797 2.754 0 4.458-1.546 4.458-3.545 0-1.268-.574-2.1-1.842-2.774v-.006ZM47.877 16.308h-5.204v1.818h5.204v-1.818ZM46.83 20.528h-3.11v10.857h3.11V20.528ZM41.416 16.308h-3.11v15.077h3.11V16.308ZM70.318 20.528l-.175 1.15c-.792-.813-1.883-1.428-3.347-1.428-3.072 0-5.349 2.398-5.349 5.646 0 3.248 2.22 5.765 5.349 5.765 1.485 0 2.555-.595 3.347-1.387l.175 1.109h2.758V20.526h-2.758v.002ZM67.33 28.83c-1.624 0-2.773-1.307-2.773-2.892s1.13-2.853 2.773-2.853c1.644 0 2.813 1.307 2.813 2.853 0 1.546-1.17 2.892-2.813 2.892ZM57.341 20.528l-.175 1.07c-.752-.793-1.803-1.348-3.228-1.348-3.09 0-5.528 2.258-5.528 5.607 0 3.35 2.179 5.547 5.41 5.547 1.466 0 2.475-.515 3.208-1.268v.416c0 1.547-1.089 2.793-3.228 2.793-1.243 0-2.412-.455-3.332-.998L49.2 34.61A8.832 8.832 0 0 0 53.92 36c3.468 0 6.082-2.14 6.082-5.688v-9.787h-2.659l-.002.004Zm-3.028 8.183c-1.585 0-2.773-1.208-2.773-2.834 0-1.626 1.188-2.774 2.773-2.774 1.585 0 2.754 1.17 2.754 2.774s-1.169 2.834-2.754 2.834ZM18.739 20.528h-3.11v10.857h3.11V20.528ZM17.195 15.732c-1.031 0-1.863.794-1.863 1.842s.813 1.842 1.863 1.842 1.861-.794 1.861-1.842-.813-1.842-1.861-1.842ZM7.389 26.472l-3.604-9.728H0l6.002 14.64h2.773l5.925-14.64h-3.744l-3.567 9.728ZM26.954 20.23c-1.207 0-2.238.536-2.952 1.704l-.175-1.406H21.03v10.857h3.11V26.43c0-2.357 1.11-3.209 2.536-3.209.273 0 .558.035.846.095l.393-2.946a3.912 3.912 0 0 0-.963-.142l.002.002ZM68.758 4.92a3.298 3.298 0 0 0 .972-2.604l.874.874 1.73 1.73c.987.987.987 2.591 0 3.577l-4.175 4.176a2.532 2.532 0 0 1-3.577 0 2.532 2.532 0 0 1 0-3.577l4.176-4.175Z" />
                        <path
                            d="M68.155.74c.986.985.986 2.59 0 3.576l-1.79 1.789-1.789-1.79a2.532 2.532 0 0 1 0-3.576 2.532 2.532 0 0 1 3.577 0h.002ZM9.435 3.367a4.216 4.216 0 0 0-4.217 4.216A4.226 4.226 0 0 0 9.435 11.8a4.226 4.226 0 0 0 4.216-4.217 4.217 4.217 0 0 0-4.216-4.216Zm0 6.748c-1.4 0-2.529-1.13-2.529-2.532a2.535 2.535 0 0 1 2.529-2.532 2.535 2.535 0 0 1 2.528 2.532 2.527 2.527 0 0 1-2.528 2.532ZM39.27 3.367c-.941 0-1.828.315-2.528.842V1.68A.833.833 0 0 0 35.9.838h-.842V11.8h1.684v-.843a4.216 4.216 0 1 0 2.528-7.59Zm0 6.748c-1.4 0-2.528-1.13-2.528-2.532a2.527 2.527 0 0 1 2.528-2.532A2.527 2.527 0 0 1 41.8 7.583a2.524 2.524 0 0 1-2.529 2.532Zm-7.744-6.748h1.684V11.3c0 2.316-1.828 4.244-4.145 4.288a4.212 4.212 0 0 1-4.288-4.216h.945c.387 0 .716.257.815.63a2.548 2.548 0 0 0 2.528 1.902c1.376-.045 2.46-1.198 2.46-2.587v-1.215a4.299 4.299 0 0 1-2.559.842c-2.33-.014-4.185-1.96-4.185-4.289V3.367h.842c.473 0 .842.37.842.842v2.474c0 1.375 1.072 2.546 2.46 2.586a2.53 2.53 0 0 0 2.6-2.532v-3.37Zm-8.262 4.216V11.8h-.842a.833.833 0 0 1-.842-.843V7.583a2.528 2.528 0 1 0-5.057 0V11.8h-1.685V3.367h1.685v.842a4.213 4.213 0 0 1 6.741 3.374ZM4.217 10.115V11.8A4.216 4.216 0 0 1 0 7.583v-5.9h.842c.473 0 .842.369.842.841v.843h2.529V5.05H1.684v2.532a2.537 2.537 0 0 0 2.533 2.532ZM55.79 5.057v2.532c0 1.4 1.13 2.532 2.533 2.532v1.684a4.216 4.216 0 0 1-4.217-4.216V1.686h.842c.473 0 .842.37.842.842v.843h2.533v1.684H55.79v.002ZM52.804 8.17c.027-.185.045-.388.045-.586a4.216 4.216 0 0 0-4.374-4.216 4.228 4.228 0 0 0-4.046 4.045 4.215 4.215 0 0 0 7.56 2.717l-.514-.302a1.718 1.718 0 0 0-1.643-.027c-.414.23-.9.343-1.414.284a2.562 2.562 0 0 1-2.244-1.927h6.632v.013l-.002-.001Zm-3.915-3.1c.972.099 1.803.77 2.118 1.67H46.25a2.503 2.503 0 0 1 2.639-1.67Z" />
                    </g>
                    <defs>
                        <clipPath id="a">
                            <path fill="#fff" d="M0 0h73.076v36H0z" />
                        </clipPath>
                    </defs>
                </svg>
            </a>
        </div>
        <div class="container">
            <div class="d-flex justify-content-center flex-wrap gap-3 mb-3">
                @foreach($teams as $team)
                <a href="/team/{{$team['id']}}" class="d-inline-block">
                    <img src="{{ asset($team['logo_path']) }}" alt="{{$team['name']}}" class="img-fluid img40 exp">
                </a>
                @endforeach
            </div>
            <div class="d-flex justify-content-center gap-3">
                <a href="/" class="btn"
                    style="color: {{ $bColor }}; border-color:{{ $bColor }}">{{__('messages.kalendars') }}</a>
                <a href="/table" class="btn"
                    style="color: {{ $bColor }}; border-color:{{ $bColor }}">{{__('messages.tabula') }}</a>
                <a href="/favorites" class="btn"
                    style="color: {{ $bColor }}; border-color:{{ $bColor }}">{{__('messages.izlase') }}</a>
                <a href="/profile" class="btn"
                    style="color: {{ $bColor }}; border-color:{{ $bColor }}">{{__('messages.konts') }}</a>
            </div>
        </div>
        <div class="language-switcher position-absolute top-0 end-0 mt-5 me-3 d-flex gap-4">
            <a href="{{ route('setLocale', ['lang' => 'lv']) }}">
                <img class="flag" src="/other/latvian.png" alt="LV">
            </a>
            <a href="{{ route('setLocale', ['lang' => 'en']) }}">
                <img class="flag" src="/other/english.png" alt="EN">
            </a>
            <a href="{{ route('setLocale', ['lang' => 'de']) }}">
                <img class="flag" src="/other/german.png" alt="DE">
            </a>
        </div>

    </div>


    @yield('content')




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>