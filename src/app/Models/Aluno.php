<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $table = 'alunos';
    protected $fillable = ['nome', 'email', 'curso_id'];

    public function curso() {
        return $this->belongsTo('App\Models\Curso');
    }

    public function disciplinas() {
        return $this->belongsToMany('App\Models\Disciplina', 'matriculas');
    }
}
