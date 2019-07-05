<?php

namespace blog\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index(){
        return view("blog.front");
    }
    
    function sobre(){
        return view("blog.sobre");
    }

    function portfolio(){
        $portfolio = [];

        array_push($portfolio, [
            "image" => "https://gabrielvanderlei.com/quem-sou-eu/assets/screenshots/institutoidv.jpeg",
            "title" => "Site do Instituto Internacional Despertando Vocações",
            "description" => ""
        ]);

        array_push($portfolio, [
            "image" => "https://gabrielvanderlei.com/quem-sou-eu/assets/screenshots/pdv.jpeg",
            "title" => "Site do Programa Internacional Despertando Vocações",
            "description" => ""
        ]);

        array_push($portfolio, [
            "image" => "https://gabrielvanderlei.com/quem-sou-eu/assets/screenshots/cpdvg.jpeg",
            "title" => "Site do Congresso Internacional Despertando Vocações",
            "description" => ""
        ]);

        array_push($portfolio, [
            "image" => "https://gabrielvanderlei.com/quem-sou-eu/assets/screenshots/ratomica.jpeg",
            "title" => "Aplicativo Roleta Atômica",
            "description" => ""
        ]);

        array_push($portfolio, [
            "image" => "https://gabrielvanderlei.com/quem-sou-eu/assets/screenshots/spdvl.jpeg",
            "title" => "Desenvolvimento do Projeto SMART Event",
            "description" => ""
        ]);

        array_push($portfolio, [
            "image" => "https://gabrielvanderlei.com/quem-sou-eu/assets/screenshots/associados.jpeg",
            "title" => "Sistema de Associados do Instituto Internacional Despertando Vocações",
            "description" => ""
        ]);
        
        $portfolio = json_decode(json_encode($portfolio));
        return view("blog.portfolio") -> withPosts($portfolio);
    }

    function contato(){
        return view("blog.contato");
    }
    
    function produtos(){
        $produtos = [];

        array_push($produtos, [
            "title" => "Criação de Sites",
            "description" => "O portão de entrada de toda empresa no mundo virtual. Sem complicações, do seu jeito.",
            "image" => "/assets/site.svg",
            "action" => "Entrar em contato", 
            "href" => "/contato"
        ]);

        array_push($produtos, [
            "title" => "Criação de Aplicativos",
            "description" => "Seja um aplicativo de simples divulgação até um complexo sistema de e-commerce.",
            "image" => "/assets/site.svg",
            "action" => "Entrar em contato", 
            "href" => "/contato"
        ]);
        
        $produtos = json_decode(json_encode($produtos));
        return view("blog.produtos") -> withProdutos($produtos);
    }
}
