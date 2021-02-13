@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="{{ url('css/pagina-home.css') }}">
@endsection

@section('pagina-ativa')
    <a href="{{ url('/') }}" class="d-flex align-items-center justify-content-center text-white">
        <img class="w-25" src="{{ url('images/home_ico.png') }}" alt="Home">
        <h4 class="m-0 ml-2">Menu</h4>
    </a>
@endsection

@section('menu-nav-direito')
    <a href="/" class="text-white">
        <h4 class="m-0">|Home|</h4>
    </a>
@endsection

@section('conteudo')
    <main id="pagina-home" class="container mt-4">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ url('curso') }}" class="d-flex flex-column align-items-center justify-content-center">
                <img class="" src="{{ url('images/curso_ico.png') }}" alt="Cursos">
                <h2 class="font-weight-bold">Cursos</h2>
            </a>
            <a href="{{ url('disciplina') }}" class="d-flex flex-column align-items-center justify-content-center">
                <img class="" src="{{ url('images/disciplina_ico.png') }}" alt="Disciplinas">
                <h2 class="font-weight-bold">Disciplinas</h2>
            </a>
            <a href="{{ url('professor') }}" class="d-flex flex-column align-items-center justify-content-center">
                <img class="" src="{{ url('images/professor_ico.png') }}" alt="Professor">
                <h2 class="font-weight-bold">Professor</h2>
            </a>
            <a href="{{ url('aluno') }}" class="d-flex flex-column align-items-center justify-content-center">
                <img class="" src="{{ url('images/aluno_ico.png') }}" alt="Aluno">
                <h2 class="font-weight-bold">Aluno</h2>
            </a>
        </div>
    </main>
@endsection
