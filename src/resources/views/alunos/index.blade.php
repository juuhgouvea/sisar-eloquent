@extends('layouts.master')

@section('pagina-ativa')
    <a href="{{ url('/aluno') }}" class="d-flex align-items-center justify-content-center text-white">
        <img class="w-25" src="{{ url('images/aluno_ico.png') }}" alt="Alunos">
        <h4 class="m-0 ml-2">Alunos</h4>
    </a>
@endsection

@section('conteudo')
    <main id="pagina-alunos" class="container mt-4">
        <button
            id="js-cadastrar"
            type="button"
            data-toggle="modal"
            data-target="#modal-form-aluno"
            class="btn btn-primary btn-lg w-100 mt-4"
        >
            Cadastrar Novo Aluno
        </button>

        @if(isset($alunos) && count($alunos) > 0)
            <table class="table table-striped mt-4">
                <thead>
                    <tr>
                        <th class="text-center">Nome</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Curso</th>
                        <th class="text-center">Disciplinas</th>
                        <th class="text-center">Eventos</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alunos as $aluno)
                        <tr data-id="{{ $aluno->id }}">
                            <td>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="m-0" data-nome="{{ $aluno->nome }}">{{ $aluno->nome }}</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="m-0" data-email="{{ $aluno->email }}">{{ $aluno->email }}</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="m-0" data-curso="{{ $aluno->curso->id }}">{{ $aluno->curso->nome }}</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-center">
                                    <select class="form-control text-center">
                                        @if(isset($aluno->disciplinas) && count($aluno->disciplinas) > 0)
                                            @foreach($aluno->disciplinas as $disciplina)
                                                <option>{{ $disciplina->nome }}</option>
                                            @endforeach
                                        @else
                                            <option>Nenhuma disciplina encontrada</option>
                                        @endif
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-center">
                                    <button
                                        class="btn m-0 p-0"
                                        data-toggle="modal"
                                        data-target="#modal-form-aluno"
                                        data-acao="editar"
                                    >
                                        <img src="{{ url('images/icons/edit.svg') }}" alt="Editar" class="icone">
                                    </button>
                                    <button class="btn m-0 p-0">
                                        <img src="{{ url('images/icons/config.svg') }}" alt="Editar" class="icone">
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-danger w-100 mt-4">
                <h4 class="text-center m-0">Não há alunos cadastrados.</h4>
            </div>
        @endif
    </main>

    <div
        id="modal-form-aluno"
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
                        <h5 class="modal-title">Cadastrar Novo Aluno</h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal-form-aluno"
                            aria-label="Fechar"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form
                            id="form-aluno"
                            action="{{ route('aluno.store') }}"
                            method="POST"
                            data-url-cadastro="{{ route('aluno.store')}}"
                            data-url-edicao="{{ route('aluno.update', ['id' => 'id'])}}"
                        >
                            @csrf
                            <input type="hidden" name="id">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input id="nome"name="nome" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input id="email"name="email" type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="curso">Curso</label>
                                <select id="curso" name="curso" class="form-control">
                                    <option value="" selected disabled>Selecione o Curso</option>
                                    @foreach(($cursos ?? []) as $curso)
                                        <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" form="form-aluno" class="btn btn-success">Concluir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script defer src="{{ url('js/alunos/index.js') }}"></script>
@endsection
