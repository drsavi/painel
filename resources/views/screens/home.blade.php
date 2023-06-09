<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/navbar.css">

    <!-- JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body class="m-0">
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-1 p-0 navbar-esquerda full-height justify-content-start align-items-center">
            <ul class="nav flex-column my-0">
                <li class="mt-4"><img src="./assets/images/ico/la-bars.png" width="24" height="24" class="d-inline-block" title="Menu" alt="Home"> </li>
                <li class="mb-3 navbar-esquerda-segundo-li"><a href="{{ route('home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> <img src="./assets/images/ico/la-home.png" width="24" height="24" class="d-inline-block" title="Home" alt="Home"> </a></li>
                <li class="mb-3 navbar-esquerda-outros-li"><a href="{{ route('extratos') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><img src="./assets/images/ico/la-th-list.png" width="24" height="24" class="d-inline-block" title="Extratos" alt="Extratos"></a></li>
                <li class="mb-3 navbar-esquerda-outros-li"><a href="{{ route('usuarios') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> <img src="./assets/images/ico/la-user.png" width="24" height="24" class="d-inline-block" title="Usuários"  alt="Usuários"> </a></li>
                <li class="mb-3 navbar-esquerda-outros-li"><a href="{{ route('clientes') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> <img src="./assets/images/ico/la-building.png" width="24" height="24" class="d-inline-block" title="Clientes"  alt="Clientes"> </a></li>
                <li class="mb-3 navbar-esquerda-outros-li"><a href="{{ route('capturas') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> <img src="./assets/images/ico/la-th-list.png" width="24" height="24" class="d-inline-block" title="Capturas"  alt="Capturas"> </a></li>
            </ul>
        </div>

      <div class="col">
        <div class="row">
          <div class="col-lg-12 m-0 p-0">
            
            <!-- Navbar vertical na parte superior direita -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
              <div class="d-flex flex-column w-100 justify-content-end bg-light p-0" id="navbarCollapse">
                
                <div class="bg-dark">
                  <a id="navbar" class="navbar-brand d-flex align-items-left" href="#">
                    <img src="./assets/images/logo/logo.png" width="30" height="30" class="d-inline-block align-top p-" alt="Q"><i class="text-white">uestor</i>
                  </a>
                </div>
                  
                <div id="navbar" class="p-0 mt-0 mb-0 px-32 bg-light d-flex align-items-center">
                  <a class="nav-link" href="#">
                    <img src="./assets/images/ico/la-home.png" width="16" height="16" class="d-inline-block" alt="">
                    <span class="ms-2 text-black"> Início</span>
                  </a>
                </div>              
                
              </div>
            </nav>
          </div>
          <div class="col-lg-12">
            <!-- Conteúdo do site -->
            <div class="row">
              <div class="col-lg-12">
                <!-- Aqui você pode adicionar o conteúdo do site -->
                Conteúdo Principal
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>