<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Produto;
use App\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller
{
    
    function produtos(){
        $produtos = Produto::paginate(6);
        return view("blog.produtos.index") -> withProdutos($produtos);
    }

    function verProduto($slug){
        $produto = Produto::where('slug' ,'=', $slug)->firstOrFail();
        return view("blog.produtos.ver") -> withProduto($produto);
    }

    function listar(){
        $produtos = Produto::paginate(6);
        return view("admin.produtos.lista") -> withProjetos($produtos);
    }
    
    function ver($id){
        $produto = Produto::find($id);;
        return view("admin.produtos.ver") -> withProjeto($produto);
    }
    
    function novo(){
        return view("admin.produtos.novo");
    }

    function adicionar(ProdutoRequest $request){
        Produto::create($request->all());
        return redirect()->route('admin.produtos');
    }

    function editar(ProdutoRequest $request, $id){
        $projeto = Produto::find($id);
        $projeto->fill($request->all());
        $projeto->save();
        return back();
    }

    function excluir($id){
        $projeto = Produto::find($id);
        $projeto->delete();
        return back();
    }
}
