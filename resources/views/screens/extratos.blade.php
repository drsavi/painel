@extends('layouts.estrutura')

@section('breadcrumb') Extratos @endsection
@section('content')

<link rel="stylesheet" href="/assets/css/extrato.css">

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
                    @if(isset($extratos))
                        @foreach ($extratos as $extrato)
                            <tr>
                                <td>{{ $extrato->certidao }}</td>
                                <td>{{ $extrato->competencia }}</td>
                                <td>{{ $extrato->quantidadecnd }}</td>
                                <td>{{ $extrato->quantidadecnpj }}</td>
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
