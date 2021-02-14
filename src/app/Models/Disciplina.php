<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    protected $table = 'disciplinas';
    protected $fillable = ['nome', 'professor_id', 'curso_id'];

    public function curso() {
        return $this->belongsTo('App\Models\Curso');
    }

    public function alunos() {
        return $this->belongsToMany('App\Models\Aluno', 'matriculas');
    }

    public function professor() {
        return $this->belongsTo('App\Models\Professor');
    }
}
