<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'funcionario';
    public $timestamps = false;

    protected $fillable = array('nome','genero','horario','departamento','data');
}
