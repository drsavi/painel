@extends('layouts.estrutura')

@section('content')
        <table class="table">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($usuarios))
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>
                            <a class="btn btn-primary">Editar</a>
                            <button class="btn btn-danger" onclick="confirmDelete({{ $usuario->id }})">Deletar</button>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
    </table>
@endsection
