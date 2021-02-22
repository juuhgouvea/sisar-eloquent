@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="{{ url('css/pagina-restrita.css') }}">
@endsection

@section('pagina-ativa')
    <a href="{{ url('/') }}" class="d-flex align-items-center justify-content-center text-white">
        <img class="w-25" src="{{ url('images/restrito.png') }}" alt="Acesso Restrito">
        <h4 class="m-0 ml-2">Restrito</h4>
    </a>
@endsection

@section('menu-nav-direito')
    <a href="{{ url('/') }}" class="text-white">
        <h4 class="m-0">|Home|</h4>
    </a>
@endsection

@section('conteudo')
    <main id="pagina-restrita" class="container mt-4">
        <h1>Acesso Restrito</h1>
        <img src="{{ url('/images/restrito.png') }}" alt="Acesso Restrito">
    </main>
@endsection
