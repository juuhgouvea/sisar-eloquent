<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ url('images/curso_ico.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    @yield('styles')
    <title>SISAR - Sistema de Avaliação Remota</title>
</head>
<body>
    <header class="container mt-4">
        <nav class="nav nav-bar bg-dark p-3 text-white">
            <div class="d-flex align-items-center justify-content-center">
                @yield('pagina-ativa')
            </div>
            <h1 class="titulo">SISAR - Sistema de Avaliação Remota</h1>
            <div class="d-flex align-items-center justify-content-center">
                @yield('menu-nav-direito')
            </div>
        </nav>
    </header>

    @yield('conteudo')

    @yield('scripts')
</body>
</html>
