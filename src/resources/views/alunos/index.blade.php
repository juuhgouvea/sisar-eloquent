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
            type="button"
            data-toggle="modal"
            data-target="#modal-form-aluno"
            class="btn btn-primary btn-lg w-100 mt-4"
        >
            Cadastrar Novo Aluno
        </button>
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
                <tr>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <p class="m-0">EVANDRO</p>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <p class="m-0">evandro@email.com</p>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <p class="m-0">TECNOLÓGO EM ANALISE E DESENVOLVIMENTO DE SISTEMAS</p>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <select class="form-control text-center">
                                <option value="">Desenvolvimento Web II</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <button class="btn m-0 p-0">
                                <img src="{{ url('images/icons/edit.svg') }}" alt="Editar" class="icone">
                            </button>
                            <button class="btn m-0 p-0">
                                <img src="{{ url('images/icons/config.svg') }}" alt="Editar" class="icone">
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
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
                        <form id="form-aluno">
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
                                    <option value="">Tecnólogo em Ánalise e Desenvolvimento de Sistemas</option>
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
