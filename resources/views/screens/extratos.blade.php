<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/extrato.css">

    <!-- JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>

@extends('layouts.estrutura')

@section('breadcrumb') Extratos @endsection
@section('content')

<body class="m-0">
    <div class="container-fluid">
        <div class="mx-4 mt-4 tabela-usuario">
            <div class="ml-4 rounded border border-secondary">
                <div class="h3 p-3 border-bottom border-secondary">
                    <strong>Extratos</strong>
                </div>

                <table class="table table-bordered table-striped">
                    <thead class="">
                    <tr>
                        <th class="align-middle">Certidão</th>
                        <th class="align-middle">Competência</th>
                        <th class="align-middle">Quantidade de CND</th>
                        <th class="align-middle">Quantidade de CNPJ</th>
                    </tr>
                    </thead>

                    <tbody>
                    @if(isset($clientes))
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->cnpj }}</td>
                                <td>{{ $cliente->idQuestor }}</td>
                                <td>{{ $cliente->status }}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>
</html>

@endsection
