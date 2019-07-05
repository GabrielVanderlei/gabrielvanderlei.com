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

        @foreach ($produtos as $i => $p)
            @if ($i % 2)
            <div class="row">
                <div class="col-xs-12" style="height:60px;"></div>
            </div>
            <div class="row">
                    <div class="col"></div>
                    <div class="col col-md-8 p-4 text-right">
                        <div class="display-4">{{$p->title}}<br />
                        <small>{{$p->description}}</small></div>
                    </div>
            </div>
            <div class="row">
                <div class="col-xs-12" style="height:60px;"></div>
            </div>
            @else
            <div class="row">
                <div class="col-xs-12" style="height:60px;"></div>
            </div>
            <div class="row">
                    <div class="col col-md-6 p-4 text-left">
                        <div class="display-4">{{$p->title}}<br />
                        <small>{{$p->description}}</small></div>
                    </div>
                    <div class="col m-4">
                        <img width='100%' src="{{$p->image}}" />
                    </div>
            </div>
            <div class="row">
                <div class="col-xs-12" style="height:60px;"></div>
            </div>
            @endif
        @endforeach
    </div>
@stop