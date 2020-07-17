<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bona') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('common-css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('common-css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('blog-sidebar/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('blog-sidebar/css/responsive.css')}}" rel="stylesheet">
    @stack('scripts-head')
</head>
<body>
    @include('template.header')
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>

        
    </div>
    
    @include('layouts.footer')
    <script src="{{asset('common-js/jquery-3.1.1.min.js')}}"></script>

    <script src="{{asset('common-js/tether.min.js')}}"></script>

    <script src="{{asset('common-js/bootstrap.js')}}"></script>

    <script src="{{asset('common-js/scripts.js')}}"></script>
</body>
</html>
