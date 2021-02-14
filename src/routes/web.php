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

Route::resource('curso', 'App\Http\Controllers\CursosController')
    ->only(['index', 'store', 'update'])
    ->parameters(['curso' => 'id']);

Route::resource('professor', 'App\Http\Controllers\ProfessoresController')
    ->only(['index', 'store', 'update'])
    ->parameters(['professor' => 'id']);

Route::resource('disciplina', 'App\Http\Controllers\DisciplinasController')
    ->only(['index', 'store', 'update'])
    ->parameters(['disciplina' => 'id']);

Route::resource('aluno', 'App\Http\Controllers\AlunosController')
    ->only(['index', 'store', 'update'])
    ->parameters(['aluno' => 'id']);

Route::resource('matricula', 'App\Http\Controllers\MatriculasController')
    ->only(['index', 'update'])
    ->parameters(['matricula' => 'aluno_id']);
