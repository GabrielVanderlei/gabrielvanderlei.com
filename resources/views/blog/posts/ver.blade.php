@extends('layouts.principal')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-xs-12" style="height:60px;"></div>
        </div>
        <div class="row justify-content-md-center text-center">
            <div class="col-md-6">
                <div class="h1">
                    <span style="color:rgb(20, 100, 120);">{{$postagem->titulo}}</span><br />
                    <small>{{$postagem->descricao}}</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12" style="height:60px;"></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-md-center ">
            <div class="col col-md-6">
                <img width="100%" src="{{$postagem->imagem}}" />
            </div>
        </div>
    </div>
@stop