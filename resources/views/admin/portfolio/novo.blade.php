@extends('layout.principal')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-xs-12" style="height:50px;"></div>
        </div>
        <div class="row text-center">
            <div class="col">
                <h1>
                    Portfólio<br>
                    <small>Adicione um novo projeto ao seu portfólio.</small>
                </h1><br/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row justify-content-md-center">
                    <div class="col col-md-6">
                        <h2>
                            Definição<br />
                            <small>Dados do Projeto</small>
                        </h2><br/>
                        <form action="{{route('admin.portfolio.adicionar')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="titulo">Título do projeto</label>
                                <input name="titulo" id="titulo" class="form-control" placeholder="Título do projeto"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="descricao">Descrição do projeto</label>
                                <textarea name="descricao" id="descricao" class="form-control" placeholder="Descrição do projeto"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="detalhes">Detalhes do projeto</label>
                                <textarea name="detalhes" id="detalhes" class="form-control" placeholder="Detalhes do projeto"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="imagem">URL da Imagem do projeto</label>
                                <input name="imagem" id="imagem" class="form-control" placeholder="URL da Imagem"/>
                            </div>

                            <div class="form-group">
                                <label for="url">URL do projeto</label>
                                <input name="slug" id="url" class="form-control" placeholder="URL do projeto"/>
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