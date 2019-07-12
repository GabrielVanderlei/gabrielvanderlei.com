@extends('layouts.app')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-xs-12" style="height:50px;"></div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col col-md-6">
                        <img width="100%" src="{{$contato->imagem}}" />
                        <h4>#{{$contato->id}}</h4>
                        <h3>
                            {{$contato->nome}}<br/>
                            <small>{{$contato->email}}</small><br />
                            <small>{{$contato->celular}}</small>
                        </h3><br/>
                        <p>{{$contato->motivo}}</p>
                        <p>{{$contato->mensagem}}</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@stop