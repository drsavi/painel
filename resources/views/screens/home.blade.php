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

@extends('layouts.estrutura')

@section('breadcrumb') Principal @endsection
@section('content')

<body class="m-0">
    <div class="container-fluid">
        <div class="mx-4 mt-4 mb-4 tabela-usuario">
            <div class="ml-4">
                <div class="card p-4">
                  <div class="card-header h3">
                    <strong>Principal</strong>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Título do Corpo</h5>
                    <p class="card-text">Conteúdo do Corpo do Card.</p>
                  </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection
