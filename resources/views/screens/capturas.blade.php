@extends('layouts.estrutura')

@section('breadcrumb') Status Captura @endsection
@section('content')

<link rel="stylesheet" href="/assets/css/capturas.css">

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
                        <th class="align-middle">Certidão</th>
                        <th class="align-middle">Categoria</th>
                        <th class="align-middle">UF</th>
                        <th class="align-middle">Status</th>
                    </tr>
                    </thead>

                    <tbody>
                    @if(isset($capturas))
                        @foreach ($capturas as $captura)
                            <tr>
                                <td>{{ $captura->certidao }}</td>
                                <td>{{ $captura->categoria }}</td>
                                <td>{{ $captura->uf }}</td>
                                <td>{{ $captura->status }}</td>
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
