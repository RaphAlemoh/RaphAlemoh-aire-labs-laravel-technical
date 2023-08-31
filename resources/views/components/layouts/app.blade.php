<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Airelabs' }}</title>

    @vite('resources/css/app.css')
    
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @livewireStyles
</head>

<body class="antialiased h-full" style="font-family: 'Source Sans Pro', sans-serif">
    {{ $slot }}
    @livewireScripts
</body>

</html>