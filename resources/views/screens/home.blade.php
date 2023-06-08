<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/home.css">

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
    <header></header>

    <nav class="navbar navbar-dark border border-bottom-dark w-100 m-0 p-0">
    <div class="d-flex flex-column w-100 justify-content-end bg-light p-0" id="navbarCollapse">

        <div class="bg-dark">
        <a id="navbar" class="navbar-brand d-flex align-items-left" href="#">
            <img src="/assets/images/logo/logo.png" width="30" height="30" class="d-inline-block align-top p-" alt="Q">uestor
        </a>
        </div>

        <div id="navbar" class="p-0 mt-0 mb-0 px-lg-0 bg-light w-100 mb-0 d-flex align-items-center">
        <a class="nav-link" href="#">
            <img src="/assets/images/ico/la-home.png" width="16" height="16" class="d-inline-block" alt=""><i class="text-black">- Início</i>
        </a>
        </div>
    </div>
    </nav>
    
    <main>
        <div class="">Hi Home</div>
        <div>
            <ul>
                <li><a href="{{ route('home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a></li>
                <li><a href="{{ route('extratos') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Extratos</a></li>
                <li><a href="{{ route('usuarios') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Usuários</a></li>
                <li><a href="{{ route('clientes') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Clientes</a></li>
                <li><a href="{{ route('capturas') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Status Captura</a></li>
            </ul>
        </div>
    </main>
</body>
</html>
