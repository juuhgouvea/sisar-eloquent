@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="css/pagina-matriculas.css">
@endsection

@section('pagina-ativa')
    <a href="{{ route('matricula.index').($aluno ? '?aluno_id='.$aluno->id : '') }}" class="d-flex align-items-center justify-content-center text-white">
        <img class="w-25" src="{{ url('images/conceito_ico.png') }}" alt="Matrículas">
        <h4 class="m-0 ml-2">Matrículas</h4>
    </a>
@endsection

@section('conteudo')
    <main id="pagina-matriculas" class="container mt-4">
        <div class="d-flex align-items-start justify-content-between">
            <a
                href="{{ url('aluno') }}"
                role="button"
                class="btn btn-lg btn-dark"
            >
                Voltar
            </a>
            @if(!is_null($aluno))
                <div class="d-flex align-items-center justify-content-between alert alert-secondary w-100 ml-4">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="icone" src="{{ url('images/cursop_ico.png') }}" alt="Curso">
                        <h4 class="font-weight-bold m-0 ml-2">{{ mb_strtoupper($aluno->curso->nome, 'utf-8') }}</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="icone" src="{{ url('images/alunop_ico.png') }}" alt="Aluno">
                        <h4 class="font-weight-bold m-0 ml-2">{{ mb_strtoupper($aluno->nome, 'utf-8') }}</h4>
                    </div>
                </div>
            @endif
        </div>

        <div class="alert alert-primary d-flex align-items-center justify-content-center mt-2">
            <img class="icone" src="{{ url('images/conceito_ico.png') }}" alt="Matricula">
            <h4 class="font-weight-bold m-0 ml-2">Matrículas do Aluno</h4>
        </div>
        @if(!is_null($aluno))
            <form
                id="form-matriculas"
                action="{{ route('matricula.update', ['aluno_id' => $aluno->id]).'?_method=PUT' }}"
                method="POST"
            >
                @csrf
                @if(isset($disciplinas) && count($disciplinas) > 0)
                    <table class="table table-striped mt-4">
                        <tbody>
                            @foreach($disciplinas as $disciplina)
                                <tr>
                                    <td>
                                        <div class="form-group m-0">
                                            <input
                                                type="checkbox"
                                                name="matriculas[]"
                                                id="matricula-{{ $disciplina->id }}"
                                                value="{{ $disciplina->id }}"
                                                @if(!is_null($aluno->disciplinas->find($disciplina->id))) checked @endif
                                            >
                                            <label class="m-0 ml-2 font-weight-bold" for="matricula-{{ $disciplina->id }}">{{ mb_strtoupper($disciplina->nome, 'utf-8') }}</label>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button class="btn btn-primary btn-lg w-100"type="submit">Confirmar Matrículas</button>
                @else
                    <div class="alert alert-danger w-100 mt-4">
                        <h4 class="text-center m-0">Não há disciplinas cadastradas.</h4>
                    </div>
                @endif

            </form>
        @endif
    </main>
@endsection
