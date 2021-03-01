@extends('layouts.master')

@section('pagina-ativa')
    <a href="{{ route('password.request') }}" class="d-flex align-items-center justify-content-center text-white">
        <h6 class="m-0 ml-2">Recuperação de Senha</h6>
    </a>
@endsection

@section('menu-nav-direito')
    <a href="{{ route('login') }}" class="text-white">
        <h6 class="m-0 mr-3">| Login |</h6>
    </a>
    <a href="{{ route('register') }}" class="text-white">
        <h6 class="m-0">| Registro |</h6>
    </a>
@endsection

@section('conteudo')
    <main id="pagina-recuperar-senha" class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-white font-weight-bold">{{ __('E-mail de Recuperação') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Endereço de E-mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Enviar link de recuperação') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
