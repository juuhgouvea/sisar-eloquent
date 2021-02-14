@extends('layouts.master')

@section('pagina-ativa')
    <a href="{{ url('/disciplina') }}" class="d-flex align-items-center justify-content-center text-white">
        <img class="w-25" src="{{ url('images/disciplina_ico.png') }}" alt="Disciplinas">
        <h4 class="m-0 ml-2">Disciplinas</h4>
    </a>
@endsection

@section('conteudo')
    <main id="pagina-disciplinas" class="container mt-4">
        <button
            type="button"
            data-toggle="modal"
            data-target="#modal-form-disciplina"
            class="btn btn-primary btn-lg w-100 mt-4"
        >
            Cadastrar Nova Disciplina
        </button>
        @if(isset($disciplinas) && count($disciplinas) > 0)
            <table class="table table-striped mt-4">
                <thead>
                    <tr>
                        <th class="text-center">Nome</th>
                        <th class="text-center">Curso</th>
                        <th class="text-center">Professor</th>
                        <th class="text-center">Eventos</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($disciplinas as $disciplina)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="m-0">{{ $disciplina->nome }}</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="m-0">{{ $disciplina->curso->nome }}</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="m-0">{{ $disciplina->professor->nome }}</p>
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
                <h4 class="text-center m-0">Não há disciplinas cadastradas.</h4>
            </div>
        @endif
    </main>

    <div
        id="modal-form-disciplina"
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
                        <h5 class="modal-title">Cadastrar Nova Disciplina</h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal-form-disciplina"
                            aria-label="Fechar"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form
                            id="form-disciplina"
                            action="{{ route('disciplina.index') }}"
                            method="POST"
                        >
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input id="nome"name="nome" type="text" class="form-control" required>
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
                            <div class="form-group">
                                <label for="professor">Professor</label>
                                <select id="professor" name="professor" class="form-control">
                                    <option value="" selected disabled>Selecione o Professor</option>
                                    @foreach(($professores ?? []) as $professor)
                                        <option value="{{ $professor->id }}">{{ $professor->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" form="form-disciplina" class="btn btn-success">Concluir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
