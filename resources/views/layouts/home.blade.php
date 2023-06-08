<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<div>Hi Home</div>
<div>
    <ul>
        <li><a href="{{ route('home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a></li>
        <li><a href="{{ route('extratos') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Extratos</a></li>
        <li><a href="{{ route('usuarios') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Usuários</a></li>
        <li><a href="{{ route('clientes') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Clientes</a></li>
        <li><a href="{{ route('capturas') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Status Captura</a></li>
    </ul>

</div>
</body>
</html>
