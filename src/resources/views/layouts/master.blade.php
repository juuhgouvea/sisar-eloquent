<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
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
            <a class="titulo" href="{{ url('/') }}">
                SISAR - Sistema de Avaliação Remota
            </a>
            <div class="d-flex align-items-center justify-content-center">
                @yield('menu-nav-direito')
            </div>
        </nav>
    </header>

    @yield('conteudo')

    <script src="{{ url('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
