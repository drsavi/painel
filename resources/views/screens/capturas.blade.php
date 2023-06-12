@extends('layouts.estrutura')

@section('breadcrumb') Clientes @endsection
@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/capturas.css">

    <!-- JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body class="m-0">
    <div class="container-fluid">
        <div class="mx-4 mt-4 tabela-usuario">
            <div class="ml-4 rounded border border-secondary">
                <div class="h3 p-3 border-bottom border-secondary">
                    <strong>Status Captura</strong>
                </div>

                <table class="table table-bordered table-striped">
                    <thead class="">
                    <tr>
                        <th class="align-middle">Nome</th>
                        <th class="align-middle">CNPJ</th>
                        <th class="align-middle">ID Questor</th>
                        <th class="align-middle">Status</th>
                        <th class="align-middle col-lg-2"></th>
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
                                <td>
                                    <a class="btn"><img src="./assets/images/ico/la-pen.png" width="16" height="16" class="d-inline-block" title="Editar" alt="Editar"></a>
                                    <button class="btn" onclick="confirmDelete({{ $cliente->id }})"><img src="./assets/images/ico/la-trash.png" width="16" height="16" class="d-inline-block" title="Excluir" alt="Excluir"></button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>
@endsection

</html>
