@extends('layout.principal')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-xs-12" style="height:50px;"></div>
        </div>
        <div class="row">
            <div class="col">
                <h1>
                    Portfólio<br>
                    <small>Controle e adicione dados ao seu portfólio.</small>
                </h1><br/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col col-md-6">
                        <img width="100%" src="{{$projeto->imagem}}" />
                        <h3>
                            {{$projeto->titulo}}
                        </h3>
                    </div>
                    <div class="col col-md-6">
                        <h2>
                            #{{$projeto->id}}<br />
                            <small>Dados do Projeto</small>
                        </h2><br/>

                        <form>
                            <div class="form-group">
                                <label for="titulo">Título do projeto</label>
                                <input name="titulo" id="titulo" class="form-control" placeholder="Título do projeto" value="{{$projeto->titulo}}"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="imagem">URL da Imagem do projeto</label>
                                <input name="imagem" id="imagem" class="form-control" placeholder="URL da Imagem" value="{{$projeto->imagem}}"/>
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