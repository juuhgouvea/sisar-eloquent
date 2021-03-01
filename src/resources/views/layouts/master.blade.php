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
                @if(Auth::check())
                    <div class="dropdown">
                        <button
                            id="dropdowMenu"
                            class="btn p-2 m-0 dropdown-toggle text-white font-weight-bold"
                            type="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            {{ Auth::user()->name }}
                        </button>
                        <div class="dropdown-menu m-0 p-0" aria-labelledby="dropdownMenu">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn m-0 p-2 w-100 text-left">Sair</button>
                            </form>
                        </div>
                    </div>
                @else
                    @yield('menu-nav-direito')
                @endif
            </div>
        </nav>
    </header>

    @yield('conteudo')

    <script src="{{ url('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
