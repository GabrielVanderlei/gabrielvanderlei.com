<?php

namespace App\Http\Controllers;

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

    function postagens(){
        $postagens = DB::select('select * from postagens');
        return view("blog.posts.index") -> withPostagens($postagens);
    }
    
    function verPostagem($slug){
        $postagem = DB::select('select * from postagens where slug = ? ', array($slug));
        return view("blog.posts.ver") -> withPostagem($postagem[0]);
    }
        
}
