<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/usuarios.css">

@extends('layouts.estrutura')

@section('breadcrumb') Usuários @endsection
@section('content')

<body class="m-0">
    <div class="container-fluid">
        <div class="mx-4 mt-4 tabela-usuario">
            <div class="ml-4 rounded border border-secondary">
                <div class="h3 p-3 border-bottom border-secondary">
                    <strong>Usuários</strong>
                </div>

                <div class="p-1 justify-content-end">
                    <a href="{{ route('usuarios/cadastrar') }}" class="btn float-end" title="Adicionar Usuários" >
                        <img src="./assets/images/ico/la-plus.svg" width="20" height="20" class="d-inline-block" alt="Adicionar Usuários"><i class="h6 d-inline-block"> Adicionar Novo Usuário </i>
                    </a>
                </div>

                <table class="table table-bordered table-striped">
                    <thead class="">
                    <tr>
                        <th class="align-middle">Cliente</th>
                        <th class="align-middle">Nome</th>
                        <th class="align-middle">E-mail</th>
                        <th class="align-middle">Status</th>
                        <th class="align-middle col-lg-2"></th>
                    </tr>
                    </thead>

                    <tbody>
                    @if(isset($usuarios))
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td>@foreach ($usuario->clientes as $cliente)

                                        {{ $cliente->nome }}
                                    @endforeach</td>
                                <td>{{ $usuario->nome }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>@if($usuario->status == "1")
                                        Ativo
                                    @else
                                        Inativo
                                    @endif
                                </td>
                                <td>
                                    <a class="btn"><img src="./assets/images/ico/la-pen.svg" width="16" height="16" class="d-inline-block" title="Editar" alt="Editar"></a>
                                    <button class="btn" onclick="confirmDelete({{ $usuario->id }})">
                                        <img src="./assets/images/ico/la-trash.svg" width="16" height="16" class="d-inline-block" title="Excluir" alt="Excluir">
                                    </button>


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
<script>
    function confirmDelete(usuarioId) {
        if (confirm('Tem certeza de que deseja excluir este usuário?')) {
            axios.delete(`/usuarios/${usuarioId}`)
                .then(function(response) {
                    location.reload();
                })
        }
    }
</script>

@endsection
