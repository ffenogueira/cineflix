<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = 'favorite';

    protected $fillable = ['filme_id','titulo','categoria_id',
    'descricao','duracao','avaliacao','idioma_id'];
}
