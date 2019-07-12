@extends('layouts.app')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-xs-12" style="height:50px;"></div>
        </div>
        <div class="row text-center">
            <div class="col">
                <h1>
                    Nova postagem<br>
                    <small>Adicione uma nova postagem ao seu blog.</small>
                </h1><br/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row justify-content-md-center">
                    <div class="col col-md-6">
                        <h2>
                            Conteúdo<br />
                            <small>Dados da postagem</small>
                        </h2><br/>

                        @include('alerts.errors')
                        <form action="{{route('admin.blog.adicionar')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="titulo">Título</label>
                                <input name="titulo" id="titulo" class="form-control" value="{{old('titulo')}}" placeholder="Título da postagem"/>
                            </div>

                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <input name="descricao" id="descricao" class="form-control" value="{{old('descricao')}}" placeholder="Descrição da postagem"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="detalhes">Conteúdo</label>
                                <textarea name="detalhes" id="detalhes" class="form-control" placeholder="Conteúdo da postagem">{{old('detalhes')}}</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="imagem">URL da Imagem</label>
                                <textarea name="imagem" id="imagem" class="form-control" placeholder="URL da imagem relacionada">{{old('imagem')}}</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input name="slug" id="slug" class="form-control" value="{{old('slug')}}" placeholder="Slug da postagem"/>
                            </div>

                            <div class="form-group">
                                <label for="tags">Tags</label>
                                <input name="tags" id="tags" class="form-control" value="{{old('tags')}}" placeholder="Tags da postagem"/>
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