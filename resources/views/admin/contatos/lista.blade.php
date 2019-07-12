@extends('layouts.app')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-xs-12" style="height:50px;"></div>
        </div>
        <div class="row">
            <div class="col">
                <h1>Contatos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1><small>Veja os pedidos de contato enviados.</small></h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Data</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Motivo</th>
                        <th scope="col">Alterar</th>
                        <th scope="col">Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contatos as $p)
                            <tr>
                                <th scope="row">{{$p->id}}</th>
                                <td>{{Str::limit($p->created_at,40,"...")}}</td>
                                <td>{{Str::limit($p->nome,40,"...")}}</td>
                                <td>{{Str::limit($p->motivo,40,"...")}}</td>
                                <td><a href="{{route('admin.contatos.ver',$p->id)}}"><i class="material-icons">edit</i></a></td>
                                <td><a href="{{route('admin.contatos.excluir',$p->id)}}" onclick="return confirm('Deseja realmente excluir esse item?');"><i class="material-icons">delete</i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
                @include('pagination.default', ['paginator' => $contatos])
            </div>
        </div>
    </div>
@stop