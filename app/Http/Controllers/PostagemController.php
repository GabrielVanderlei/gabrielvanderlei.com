<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Postagem;
use App\Http\Requests\PostagemRequest;

class PostagemController extends Controller
{
    
    function postagens(){
        $postagens = Postagem::paginate(6);
        return view("blog.blog.index") -> withPostagens($postagens);
    }

    function verPostagem($slug){
        $postagem = Postagem::where('slug' ,'=', $slug)->firstOrFail();
        return view("blog.blog.ver") -> withPostagem($postagem);
    }

    function listar(){
        $postagens = Postagem::paginate(6);
        return view("admin.blog.lista") -> withPostagens($postagens);
    }
    
    function ver($id){
        $postagem = Postagem::find($id);;
        return view("admin.blog.ver") -> withPostagem($postagem);
    }
    
    function novo(){
        return view("admin.blog.novo");
    }

    function adicionar(PostagemRequest $request){
        Postagem::create($request->all());
        return redirect()->route('admin.blog');
    }

    function editar(PostagemRequest $request, $id){
        $postagem = Postagem::find($id);
        $postagem->fill($request->all());
        $postagem->save();
        return back();
    }

    function excluir($id){
        $postagem = Postagem::find($id);
        $postagem->delete();
        return back();
    }
}
