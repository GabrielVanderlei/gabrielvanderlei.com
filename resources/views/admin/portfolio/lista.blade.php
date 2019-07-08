@extends('layout.principal')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-xs-12" style="height:50px;"></div>
        </div>
        <div class="row">
            <div class="col">
                <h1>Portfólio</h1>
            </div>
            <div class="col text-right">
                <a href="{{route('admin.portfolio.novo')}}" class="btn btn-primary">Adicionar projeto</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1><small>Controle e adicione dados ao seu portfólio.</small></h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Imagem</th>
                        <th scope="col">Título</th>
                        <th scope="col">Alterar</th>
                        <th scope="col">Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projetos as $p)
                            <tr>
                                <th scope="row">{{$p->id}}</th>
                                <td>{{Str::limit($p->imagem,40,"...")}}</td>
                                <td>{{Str::limit($p->titulo,40,"...")}}</td>
                                <td><a href="{{route('admin.portfolio.ver',$p->id)}}"><i class="material-icons">edit</i></a></td>
                                <td><a href="{{route('admin.portfolio.excluir.confirmar',$p->id)}}"><i class="material-icons">delete</i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop