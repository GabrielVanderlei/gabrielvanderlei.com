<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolio';
    public $timestamps = true;
    protected $fillable = array('slug','titulo','descricao','detalhes','imagem');
    protected $guarded = ['id'];
}
