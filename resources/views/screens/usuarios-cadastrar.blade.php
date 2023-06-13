<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/toogle-switch.css">
<link rel="stylesheet" href="/assets/css/usuarios-cadastrar.css">

@extends('layouts.estrutura')

@section('breadcrumb') Usuários @endsection
@section('content')

<body class="m-0">
    <div class="container-fluid">
        <div class="mx-4 mt-4 tabela-usuario">
            <div class="ml-4 rounded border border-secondary">
                <div class="h3 p-3 border-bottom border-secondary">
                    <strong>Adicionar Usuários</strong>
                </div>

                <form method="POST" action="{{ route('usuarios/cadastrar') }}">
                    @csrf
                    <div class="row px-3">

                        <div class="col-3">
                            <label for="email" class="col-md-12 col-form-label text-md-right">{{ __('E-mail') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-3">
                            <label for="nome" class="col-md-12 col-form-label text-md-right">{{ __('Nome do Usuário') }}</label>

                            <div class="col-md-12">
                                <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" required autocomplete="nome">

                                @error('nome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-2">
                            <label for="senha" class="col-md-12 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-12">
                                <input id="senha" type="password" class="form-control @error('senha') is-invalid @enderror" name="senha" required autocomplete="new-senha">

                                @error('senha')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="col-md-12">
                                <label for="senha-confirm" class="col-md-12 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>

                                <div class="col-md-12">
                                    <input id="senha-confirm" type="password" class="form-control" name="senha_confirmation" required autocomplete="new-senha">
                                </div>
                            </div>
                        </div>

                        <div class="col-1">
                            <div class="form-group row">
                                <label for="status" class="col-md-12 col-form-label text-md-right">{{ __('Status') }}</label>
                                <div class="col-md-12">
                                    <label class="toggle-switch">
                                        <input id="status" class="toggle-switch-checkbox" name="status" type="checkbox" value="true">
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-1">
                            <div class="form-group row">
                                <label for="admin" class="col-md-12 col-form-label text-md-right">{{ __('Admin') }}</label>

                                <div class="col-md-12">
                                    <label class="toggle-switch">
                                        <input id="admin" class="toggle-switch-checkbox" name="admin" value="true" type="checkbox">
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row px-3 pt-3">
                        <div class="col-3">
                            <div class="form-group row">


                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Empresa') }}</label>

                                <div class="col-md-12">
                                    <select id="empresa" class="form-control" name="empresa">

                                        @foreach ($clientes as $cliente)
                                            <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                                        @endforeach
                                        @if(isset($clientes))

                                        @else
                                            <option>Não há clientes cadastrados</option>
                                        @endif

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-9"></div>
                    </div>


                    <div class="row px-0 pt-4">
                        <div class="col-10"></div>
                        <div class="col-2 mt-2 p-0">
                            <button type="" class="btn ml-auto">
                                <p class="h5 d-inline"> <img src="/assets/images/ico/la-undo.png" width="20" height="20" class="d-inline-block" title="Voltar" alt="Voltar"> {{ __('Voltar') }} </p>
                            </button>
                            <button type="submit" class="btn ml-auto">
                                <p class="h5 d-inline"> <img src="/assets/images/ico/la-save.png" width="20" height="20" class="d-inline-block" title="Salvar" alt="Salvar"> {{ __('Salvar') }} </p>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

@endsection
