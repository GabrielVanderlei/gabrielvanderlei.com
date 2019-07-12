@extends('layouts.app')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-xs-12" style="height:50px;"></div>
        </div>
        <div class="row text-center">
            <div class="col">
                <h1>
                    Novo produto ou serviço<br>
                    <small>Esses dados estarão disponíveis na aba de produtos da sua plataforma.</small>
                </h1><br/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row justify-content-md-center">
                    <div class="col col-md-6">
                        <h2>
                            Definição<br />
                            <small>Dados do produto</small>
                        </h2><br/>

                        @include('alerts.errors')
                        <form action="{{route('admin.produtos.adicionar')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="titulo">Título do produto</label>
                                <input name="titulo" id="titulo" class="form-control" value="{{old('titulo')}}" placeholder="Título do produto"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="descricao">Descrição do produto</label>
                                <textarea name="descricao" id="descricao" class="form-control" placeholder="Descrição do produto">{{old('descricao')}}</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="detalhes">Detalhes do produto</label>
                                <textarea name="detalhes" id="detalhes" class="form-control" placeholder="Detalhes do produto">{{old('detalhes')}}</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="imagem">URL da Imagem do produto</label>
                                <input name="imagem" id="imagem" class="form-control" value="{{old('imagem')}}" placeholder="URL da Imagem"/>
                            </div>

                            <div class="form-group">
                                <label for="imagem_topo">URL da Imagem de topo do produto</label>
                                <input name="imagem_topo" id="imagem_topo" class="form-control" value="{{old('imagem_topo')}}" placeholder="URL da Imagem do topo"/>
                            </div>

                            <div class="form-group">
                                <label for="url">URL do produto</label>
                                <input name="slug" id="url" class="form-control" value="{{old('slug')}}" placeholder="URL do produto"/>
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