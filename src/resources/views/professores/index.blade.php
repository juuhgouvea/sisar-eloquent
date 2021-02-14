@extends('layouts.master')

@section('pagina-ativa')
    <a href="{{ url('/professor') }}" class="d-flex align-items-center justify-content-center text-white">
        <img class="w-25" src="{{ url('images/professor_ico.png') }}" alt="Professores">
        <h4 class="m-0 ml-2">Professores</h4>
    </a>
@endsection

@section('conteudo')
    <main id="pagina-professores" class="container mt-4">
        <button
            type="button"
            data-toggle="modal"
            data-target="#modal-form-professor"
            class="btn btn-primary btn-lg w-100 mt-4"
        >
            Cadastrar Novo Professor
        </button>
        @if(isset($professores) && count($professores) > 0)
            <table class="table table-striped mt-4">
                <thead>
                    <tr>
                        <th class="text-center">Nome</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Eventos</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($professores as $professor)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="m-0">{{ $professor->nome }}</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="m-0">{{ $professor->email }}</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-center">
                                    <button class="btn m-0 p-0">
                                        <img src="{{ url('images/icons/edit.svg') }}" alt="Editar" class="icone">
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-danger w-100 mt-4">
                <h4 class="text-center m-0">Não há professores cadastrados.</h4>
            </div>
        @endif
    </main>

    <div
        id="modal-form-professor"
        class="modal fade"
        data-backdrop="static"
        data-keyboard="false"
        aria-hidden="true"
        tabindex="-1"
    >
        <div class="modal-dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cadastrar Novo Professor</h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal-form-professor"
                            aria-label="Fechar"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form
                            id="form-professor"
                            action="{{ route('professor.store') }}"
                            method="POST"
                        >
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input id="nome"name="nome" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input id="email"name="email" type="email" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" form="form-professor" class="btn btn-success">Concluir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
