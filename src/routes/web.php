<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/curso', function () {
    return view('cursos.index');
});

Route::get('/professor', function () {
    return view('professores.index');
});

Route::get('/disciplina', function () {
    return view('disciplinas.index');
});

Route::get('/aluno', function () {
    return view('alunos.index');
});

Route::get('/matricula', function () {
    return view('matriculas.index');
});
