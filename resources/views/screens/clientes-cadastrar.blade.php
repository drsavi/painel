<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/toogle-switch.css">
<link rel="stylesheet" href="/assets/css/clientes-cadastrar.css">

@extends('layouts.estrutura')

@section('breadcrumb') Clientes @endsection
@section('content')

<body class="m-0">
    <div class="container-fluid">
        <div class="mx-4 mt-4 tabela-usuario">
            <div class="ml-4 rounded border border-secondary">
                <div class="ml-4 rounded border border-secondary">

                    <div class="h3 p-3 border-bottom border-secondary">
                        <strong>Adicionar Clientes</strong>
                    </div>

                    <form method="POST" action="{{ route('clientes/cadastrar') }}">
                        @csrf
                        <div class="row px-3">

                            <div class="col-3">
                                <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome do Cliente') }}</label>

                                <div class="col-md-12">
                                    <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" required autocomplete="nome">

                                    @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-3">
                                <label for="cnpj" class="col-md-4 col-form-label text-md-right">{{ __('CNPJ') }}</label>

                                <div class="col-md-12">
                                    <input id="cnpj" type="text" class="form-control @error('cnpj') is-invalid @enderror" name="cnpj" required autocomplete="cnpj">

                                    @error('cnpj')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-3">
                                <label for="idQuestor" class="col-md-4 col-form-label text-md-right">{{ __('ID Questor') }}</label>

                                <div class="col-md-12">
                                    <input id="idQuestor" type="text" class="form-control" name="idQuestor" required autocomplete="idQuestor">
                                </div>
                            </div>

                            <div class="col-3">
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
                        </div>

                        <div class="row px-0 pt-4">
                            <div class="col-10"></div>
                            <div class="col-2 mt-2 p-0">
                                @component('components.button', [
                                    'type' => 'button',
                                    'onClick' => 'history.back()',
                                    'image' => '/assets/images/ico/la-undo.png',
                                    'title' => 'Voltar',
                                    'alt' => 'Voltar',
                                    'label' => __('Voltar')
                                ])
                                @endcomponent
                                @component('components.button', [
                                    'type' => 'submit',
                                    'onClick' => '',
                                    'image' => '/assets/images/ico/la-save.png',
                                    'title' => 'Salvar',
                                    'alt' => 'Salvar',
                                    'label' => __('Salvar')
                                ])
                                @endcomponent
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
