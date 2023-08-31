<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Airelabs' }}</title>
    @vite('resources/css/app.css')

    <style>
        html {
            font-family: Urbanist, sans-serif;
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            background-color: #FFF1E8;
        }
    </style>
    @livewireStyles
</head>

<body class="antialiased h-full" style="font-family: 'Source Sans Pro', sans-serif">
    {{ $slot }}
    @livewireScripts
</body>

</html>