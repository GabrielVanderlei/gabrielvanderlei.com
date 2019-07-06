@extends('layout.principal')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-xs-12" style="height:60px;"></div>
        </div>
        <div class="row">
            <div class="col text-center">
                <div class="display-4">
                    <span style="color:rgb(20, 100, 120);">Trabalhos desenvolvidos</span><br />
                    <small>Qual o melhor modo de mostrar que se sabe fazer algo, se não for... fazendo?</small>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12" style="height:60px;"></div>
        </div>

        <div class="row">
            @foreach ($projetos as $p)
                <div class="col col-md-4 p-4 text-center">
                    <h5>{{$p->titulo}}<br />
                    <small>{{$p->descricao}}</small></h5>
                    <img width="100%" src="{{$p->imagem}}" />
                </div>
            @endforeach
        </div>
    </div>
@stop