<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Contato;
use App\Http\Requests\ContatoRequest;

class ContatoController extends Controller
{
    
    function contato(){
        return view("blog.contato");
    }
    
    function listar(){
        $contatos = Contato::paginate(6);
        return view("admin.contatos.lista") -> withContatos($contatos);
    }
    
    function ver($id){
        $contato = Contato::find($id);;
        return view("admin.contatos.ver") -> withContato($contato);
    }
    
    function novo(){
        return view("admin.contatos.novo");
    }

    function adicionar(ContatoRequest $request){
        Contato::create($request->all());
        return back();
    }

    function editar(ContatoRequest $request, $id){
        $projeto = Contato::find($id);
        $projeto->fill($request->all());
        $projeto->save();
        return back();
    }

    function excluir($id){
        $projeto = Contato::find($id);
        $projeto->delete();
        return back();
    }
}
