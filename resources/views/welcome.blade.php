<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
{{--        <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
{{--        @livewireStyles--}}
{{--        <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    </head>
    <body >
       <div>
           <div id="app"></div>
           @vite('resources/js/app.js')
{{--           @livewireScripts--}}

{{--           <script src="{{ asset('js/app.js') }}" defer></script>--}}
       </div>
    </body>
</html>
