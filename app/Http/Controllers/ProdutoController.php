<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    
    function produtos(){
        $produtos = DB::select('select * from produtos');
        return view("blog.produtos.index") -> withProdutos($produtos);
    }

    function verProduto($slug){
        $produto = DB::select('select * from produtos where slug = ? ', array($slug));
        return view("blog.produtos.ver") -> withProduto($produto[0]);
    }
}
