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
})->middleware('access_level:0');


Route::resource('curso', 'App\Http\Controllers\CursosController')
    ->only(['index', 'store', 'update'])
    ->parameters(['curso' => 'id'])
    ->middleware('access_level:1');

Route::resource('professor', 'App\Http\Controllers\ProfessoresController')
    ->only(['index', 'store', 'update'])
    ->parameters(['professor' => 'id'])
    ->middleware('access_level:2');

Route::resource('disciplina', 'App\Http\Controllers\DisciplinasController')
    ->only(['index', 'store', 'update'])
    ->parameters(['disciplina' => 'id'])
    ->middleware('access_level:1');

Route::resource('aluno', 'App\Http\Controllers\AlunosController')
    ->only(['index', 'store', 'update'])
    ->parameters(['aluno' => 'id'])
    ->middleware('access_level:2');

Route::resource('matricula', 'App\Http\Controllers\MatriculasController')
    ->only(['index', 'update'])
    ->parameters(['matricula' => 'aluno_id'])
    ->middleware('access_level:2');

Route::get('/negado', function() {
    return view('restrito');
})->name('negado');
