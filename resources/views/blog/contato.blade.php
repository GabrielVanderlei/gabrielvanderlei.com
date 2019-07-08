@extends('layout.principal')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-xs-12" style="height:60px;"></div>
        </div>
        <div class="row">
            <div class="col text-center">
                <div class="h1">
                    <span style="color:rgb(20, 100, 120);">Contato</span><br />
                    <small>Entre em contato.</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12" style="height:60px;"></div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col col-md-6">
                <div class="form-group">
                    <input placeholder="Nome Completo" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <input placeholder="E-mail" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <input placeholder="Celular" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option>Solicitação de orçamento</option>
                        <option>Dúvida</option>
                        <option>Parceria</option>
                        <option>Sugestão</option>
                        <option>Reclamação</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea placeholder="Mensagem" class="form-control"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Enviar" />
            </div>
        </div>
    </div>
@stop