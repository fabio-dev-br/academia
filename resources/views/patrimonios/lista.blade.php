@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Patrimônios
                        <a class="pull-right" href="{{ url ('patrimonios/novo')}}">Novo Patrimônio</a>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        <table class="table">
                            <th>Nome</th>
<<<<<<< HEAD:resources/views/patrimonios/lista.blade.php
                            <th>Número</th>
                            <th>Quantidade</th>
=======
                            <th>Numero</th>
>>>>>>> a9b9b89b1b59e4b9b89cdd6cfd6f1907cc403488:resources/views/patrimonios/lista.blade.php
                            <th>Ações</th>
                            <tbody>
                            @foreach($patrimonios as $patrimonio)
                                <tr>
                                    <td>{{$patrimonio->nome}}</td>
                                    <td>{{$patrimonio->numero}}</td>
                                    <td>{{$patrimonio->quantidade}}</td>
                                    <td>
                                        <a href="patrimonios/{{$patrimonio->id}}/editar" class="btn btn-default btn-sm">Editar</a>
                                        {!! Form::open(['style' => 'display: inline', 'method' => 'DELETE', 'url' => '/patrimonios/'.$patrimonio->id]) !!}
                                        <button type="submit" class="btn btn-default btn-sm">Excluir</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection