@extends('layouts.app')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-xs-12" style="height:50px;"></div>
        </div>
        <div class="row">
            <div class="col">
                <h1>Postagem</h1>
            </div>
            <div class="col text-right">
                <a href="{{route('admin.blog.novo')}}" class="btn btn-primary">Adicionar postagem</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1><small>Controle as postagens de sua plataforma.</small></h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Data</th>
                        <th scope="col">Título</th>
                        <th scope="col">Alterar</th>
                        <th scope="col">Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($postagens as $p)
                            <tr>
                                <th scope="row">{{$p->id}}</th>
                                <td>{{Str::limit($p->created_at,40,"...")}}</td>
                                <td>{{Str::limit($p->titulo,40,"...")}}</td>
                                <td><a href="{{route('admin.blog.ver',$p->id)}}"><i class="material-icons">edit</i></a></td>
                                <td><a href="{{route('admin.blog.excluir',$p->id)}}" onclick="return confirm('Deseja realmente excluir esse item?');"><i class="material-icons">delete</i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
                @include('pagination.default', ['paginator' => $postagens])
            </div>
        </div>
    </div>
@stop