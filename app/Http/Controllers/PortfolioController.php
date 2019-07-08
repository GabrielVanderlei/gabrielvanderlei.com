<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Portfolio;
use App\Http\Requests\PortfolioRequest;

class PortfolioController extends Controller
{
    function portfolio(){
        $projetos = Portfolio::paginate(6);
        return view("blog.portfolio") -> withProjetos($projetos);
    }

    function listar(){
        $projetos = Portfolio::paginate(6);
        return view("admin.portfolio.lista") -> withProjetos($projetos);
    }
    
    function ver($id){
        $projeto = Portfolio::find($id);;
        return view("admin.portfolio.ver") -> withProjeto($projeto);
    }
    
    function novo(){
        return view("admin.portfolio.novo");
    }

    function adicionar(PortfolioRequest $request){
        Portfolio::create($request->all());
        return redirect()->route('admin.portfolio');
    }

    function editar(PortfolioRequest $request, $id){
        $projeto = Portfolio::find($id);
        $projeto->fill($request->all());
        $projeto->save();
        return back();
    }

    function excluir($id){
        $projeto = Portfolio::find($id);
        $projeto->delete();
        return back();
    }
}
