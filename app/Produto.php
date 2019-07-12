<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    public $timestamps = true;
    protected $fillable = array('slug','titulo','descricao','detalhes','imagem','imagem_topo');
    protected $guarded = ['id'];
}
