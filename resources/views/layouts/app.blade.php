<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta name="description" content="Stowarzyszenie Dać Szansę">
    <meta name="robots" content="index,follow">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    {{-- Icons --}}
    <link rel="shortcut icon" href="{{Storage::url('favicon.png')}}">
    <link rel="icon" href="{{Storage::url('favicon.png')}}">
    
    <!-- Styles -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm p-1 ds-menu-wrapper" id='main-menu'>
            <div class="main-menu-wrapper">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <img class='main-logo' src="{{ Storage::url('logo.png') }}">
                </a>
                <menu-navs></menu-navs>
            </div>
        </nav>
        {{--  --}}
        <main class="w-100" style='margin-top: 80px'>
            @yield('content')
        </main>
        {{--  --}}
        <ds-footer></ds-footer>
        {{--  --}}
        <scroll-btn></scroll-btn>
    </div>
</body>
</html>
