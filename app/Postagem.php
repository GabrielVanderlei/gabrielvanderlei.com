<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postagem extends Model
{
    protected $table = 'postagens';
    public $timestamps = true;
    protected $fillable = array('slug','titulo','descricao','detalhes','imagem','tags');
    protected $guarded = ['id'];
}
