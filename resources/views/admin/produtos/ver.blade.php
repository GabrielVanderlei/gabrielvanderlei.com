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
                        <img width="100%" src="{{$projeto->imagem_topo}}" />
                        <img width="100%" src="{{$projeto->imagem}}" />
                        <h3>
                            {{$projeto->titulo}}<br/>
                            <small>{{$projeto->descricao}}</small>
                        </h3><br/>
                        <p>{{$projeto->detalhes}}</p>
                    </div>
                    <div class="col col-md-6">
                        <h2>
                            #{{$projeto->id}}<br />
                            <small>Sobre o produto ou serviço</small>
                        </h2><br/>
                        
                        @include('alerts.errors', ['errors'=>$errors])

                        <form action="{{route('admin.produtos.editar', $projeto->id)}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="titulo">Título do projeto</label>
                                <input name="titulo" id="titulo" class="form-control" value="{{ old('titulo', $projeto->titulo) }}" placeholder="Título do projeto"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="descricao">Descrição do projeto</label>
                                <textarea name="descricao" id="descricao" class="form-control" placeholder="Descrição do projeto">{{old('descricao', $projeto->descricao)}}</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="detalhes">Detalhes do projeto</label>
                                <textarea name="detalhes" id="detalhes" class="form-control" placeholder="Detalhes do projeto">{{old('detalhes',$projeto->detalhes)}}</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="imagem">URL da Imagem do projeto</label>
                                <input name="imagem" id="imagem" class="form-control" value="{{old('imagem',$projeto->imagem)}}" placeholder="URL da Imagem"/>
                            </div>

                            <div class="form-group">
                                <label for="imagem_topo">URL da Imagem de topo do produto</label>
                                <input name="imagem_topo" id="imagem_topo" class="form-control" value="{{old('imagem_topo')}}" placeholder="URL da Imagem do topo"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="url">URL do projeto</label>
                                <input name="slug" id="url" class="form-control" value="{{old('slug',$projeto->slug)}}" placeholder="URL do projeto"/>
                            </div>

                            <input type="submit" class="btn btn-primary"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@stop