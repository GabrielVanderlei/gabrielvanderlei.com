<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $table = 'contatos';
    public $timestamps = true;
    protected $fillable = array('nome','email','celular','motivo','mensagem');
    protected $guarded = ['id'];
}
