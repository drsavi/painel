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

@section('breadcrumb') Início @endsection
@section('content')

<body class="m-0">

</body>
</html>

@endsection
