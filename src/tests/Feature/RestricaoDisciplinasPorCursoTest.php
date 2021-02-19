<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\BrowserTestCase;
use App\Models\Curso;
use App\Models\Professor;
use App\Models\Disciplina;
use App\Models\Aluno;

class RestricaoDisciplinasPorCursoTest extends BrowserTestCase
{
    use RefreshDatabase;
    /**
     * Testa se disciplinas que não são do curso são exibidas para realização da matricula
     *
     * @return void
     */
    public function testDisciplinasPorCurso()
    {
        $cursos = Curso::factory()
                    ->count(2)
                    ->create();
        $professor = Professor::factory()->create();
        $aluno = Aluno::factory()
                    ->for($cursos->first())
                    ->create();
        $disciplinas = Disciplina::factory()
                        ->count(2)
                        ->for($professor)
                        ->for($cursos->first())
                        ->create();
        Disciplina::factory()
                        ->for($cursos->get(1))
                        ->for($professor)
                        ->create([
                            'nome' => 'Disciplina nao visivel'
                        ]);


        $response = $this->visit('/matricula?aluno_id='.$aluno->id)
                        ->dontSee('Disciplina nao visivel');
    }
}
