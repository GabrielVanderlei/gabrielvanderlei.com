<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Portfolio;

class PortfolioController extends Controller
{
    function portfolio(){
        $projetos = DB::select('select * from portfolio');
        return view("blog.portfolio") -> withProjetos($projetos);
    }

    function listar(){
        $projetos = Portfolio::all();
        return view("admin.portfolio.lista") -> withProjetos($projetos);
    }
    
    function ver($id){
        $projeto = DB::select('select * from portfolio where id = ? ',[$id]);
        return view("admin.portfolio.ver") -> withProjeto($projeto[0]);
    }
    
    function novo(){
        return view("admin.portfolio.novo");
    }

    function adicionar(Request $request){
        Portfolio::create($request->all());
        return redirect()->route('admin.portfolio');
    }
}
