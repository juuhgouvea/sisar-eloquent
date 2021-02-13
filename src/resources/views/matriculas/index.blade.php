@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="css/pagina-matriculas.css">
@endsection

@section('pagina-ativa')
    <a href="{{ url('/matricula') }}" class="d-flex align-items-center justify-content-center text-white">
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
            <div class="d-flex align-items-center justify-content-between alert alert-secondary w-100 ml-4">
                <div class="d-flex align-items-center justify-content-center">
                    <img class="icone" src="{{ url('images/cursop_ico.png') }}" alt="Curso">
                    <h4 class="font-weight-bold m-0 ml-2">TECNOLÓGO EM ANALISE E DESENVOLVIMENTO DE SISTEMAS</h4>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <img class="icone" src="{{ url('images/alunop_ico.png') }}" alt="Aluno">
                    <h4 class="font-weight-bold m-0 ml-2">EVANDRO</h4>
                </div>
            </div>
        </div>

        <div class="alert alert-primary d-flex align-items-center justify-content-center">
            <img class="icone" src="{{ url('images/conceito_ico.png') }}" alt="Matricula">
            <h4 class="font-weight-bold m-0 ml-2">Matrículas do Aluno</h4>
        </div>
        <form action="" id="form-matriculas">
            <table class="table table-striped mt-4">
                <tbody>
                    <tr>
                        <td>
                            <div class="form-group m-0">
                                <input type="checkbox" name="matriculas[]" id="matricula-1">
                                <label class="m-0 ml-2 font-weight-bold" for="matricula-1">COMPUTAÇÃO GRÁFICA</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group m-0">
                                <input type="checkbox" name="matriculas[]" id="matricula-2">
                                <label class="m-0 ml-2 font-weight-bold" for="matricula-2">DESENVOLVIMENTO WEB II</label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <button class="btn btn-primary btn-lg w-100"type="submit">Confirmar Matrículas</button>
        </form>
    </main>
@endsection
