<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\BrowserTestCase;
use App\Models\Curso;

class CadastroCursoTest extends BrowserTestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCadastroNovoCurso()
    {
        $response = $this->visit('/curso')
            ->type('Novo Curso', 'nome')
            ->press('Concluir')
            ->seePageIs('/curso')
            ->see('Novo Curso');

        $this->assertCount(1, Curso::all());
    }
}
