@extends('layouts.master')

@section('pagina-ativa')
    <a href="{{ url('/curso') }}" class="d-flex align-items-center justify-content-center text-white">
        <img class="w-25" src="{{ url('images/curso_ico.png') }}" alt="Cursos">
        <h4 class="m-0 ml-2">Cursos</h4>
    </a>
@endsection

@section('conteudo')
    <main id="pagina-cursos" class="container mt-4">
        <button
            type="button"
            data-toggle="modal"
            data-target="#modal-form-curso"
            class="btn btn-primary btn-lg w-100 mt-4"
        >
            Cadastrar Novo Curso
        </button>
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th class="text-center w-75">Nome</th>
                    <th class="text-center w-25">Eventos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <p class="m-0">TECNOLÓGO EM ANALISE E DESENVOLVIMENTO DE SISTEMAS</p>
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
            </tbody>
        </table>
    </main>

    <div
        id="modal-form-curso"
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
                        <h5 class="modal-title">Cadastrar Novo Curso</h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal-form-curso"
                            aria-label="Fechar"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="form-curso">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input id="nome"name="nome" type="text" class="form-control">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" form="form-curso" class="btn btn-success">Concluir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
