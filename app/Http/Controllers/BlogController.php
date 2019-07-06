<?php

namespace blog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    function index(){
        return view("blog.front");
    }
    
    function sobre(){
        return view("blog.sobre");
    }

    function portfolio(){
        $projetos = DB::select('select * from portfolio');
        return view("blog.portfolio") -> withProjetos($projetos);
    }


    function produtos(){
        $produtos = DB::select('select * from portfolio');
        return view("blog.produtos.index") -> withProdutos($produtos);
    }

    function verProduto($slug){

        $produto = [
            "title" => "Sites e serviços relacionados.",
            "image" => "/assets/images/site-top.jpg",
            "description" => "Seus serviços, produtos e notícias, na internet. Para todos os seus atuais e futuros clientes acessarem.",
        ];

        $produto = json_decode(json_encode($produto));
        return view("blog.produtos.ver")->withProduto($produto);
    }

    function contato(){
        return view("blog.contato");
    }
        
}
