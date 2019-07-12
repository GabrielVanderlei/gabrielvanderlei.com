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
                        <img width="100%" src="{{$postagem->imagem}}" />
                        <h3>
                            {{$postagem->titulo}}<br/>
                            <small>{{$postagem->descricao}}</small>
                        </h3><br/>
                        <p>{{$postagem->detalhes}}</p>
                        <p>{{$postagem->tags}}</p>
                    </div>
                    <div class="col col-md-6">
                        <h2>
                            #{{$postagem->id}}<br />
                            <small>Sobre o produto ou serviço</small>
                        </h2><br/>
                        
                        @include('alerts.errors', ['errors'=>$errors])

                        <form action="{{route('admin.blog.editar', $postagem->id)}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="titulo">Título da postagem</label>
                                <input name="titulo" id="titulo" class="form-control" value="{{ old('titulo', $postagem->titulo) }}" placeholder="Título da postagem"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="descricao">Descrição da postagem</label>
                                <textarea name="descricao" id="descricao" class="form-control" placeholder="Descrição da postagem">{{old('descricao', $postagem->descricao)}}</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="detalhes">Detalhes da postagem</label>
                                <textarea name="detalhes" id="detalhes" class="form-control" placeholder="Detalhes da postagem">{{old('detalhes',$postagem->detalhes)}}</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="imagem">URL da Imagem da postagem</label>
                                <input name="imagem" id="imagem" class="form-control" value="{{old('imagem',$postagem->imagem)}}" placeholder="URL da Imagem"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="tags">Tags da postagem</label>
                                <input name="tags" id="tags" class="form-control" value="{{old('tags',$postagem->tags)}}" placeholder="Tags da postagem"/>
                            </div>

                            <div class="form-group">
                                <label for="slug">URL da postagem</label>
                                <input name="slug" id="slug" class="form-control" value="{{old('slug',$postagem->slug)}}" placeholder="URL da postagem"/>
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