@extends('layout.principal')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-xs-12" style="height:60px;"></div>
        </div>
        <div class="row">
            <div class="col text-center">
                <div class="h1">
                    <span style="color:rgb(20, 100, 120);">Produtos e Serviços</span><br />
                    <small>O que eu tenho a oferecer para o seu negócio?</small>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12" style="height:60px;"></div>
        </div>

            <div class="row">
                <div class="col-xs-12" style="height:60px;"></div>
            </div>
            <div class="row">
                @foreach ($produtos as $i => $p)
                    <div class="col m-4" >
                        <div class="row m-4">
                            <div class="col">
                                <img width="100%" style="border-radius:5px;" src="{{$p->imagem}}" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col p-4 text-center">
                                <div class="display-4">{{$p->titulo}}<br />
                                <small>{{$p->descricao}}</small></div><br />
                                <a href="/produtos/{{$p->slug}}" class="btn btn-primary">Saiba mais sobre o produto</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-xs-12" style="height:60px;"></div>
            </div>
    </div>
@stop