<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Professor;
use App\Models\Disciplina;

class DisciplinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
        $professores = Professor::all();
        $disciplinas = Disciplina::with('curso', 'professor')->get();

        return view('disciplinas.index')
            ->with([
                'cursos' => $cursos,
                'professores' => $professores,
                'disciplinas' => $disciplinas,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Disciplina::create([
            'nome' => $request->input('nome'),
            'curso_id' => $request->input('curso'),
            'professor_id' => $request->input('professor'),
        ]);

        return redirect()->route('disciplina.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $disciplina = Disciplina::find($id);
        $nome = $request->input('nome');

        $disciplina->fill([
            'nome' => $request->input('nome'),
            'curso_id' => $request->input('curso'),
            'professor_id' => $request->input('professor'),
        ]);
        $disciplina->save();

        return redirect()->route('disciplina.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
