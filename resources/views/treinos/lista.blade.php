@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Treinos
                        <a class="pull-right" href="{{ url ('treinos/novo')}}">Novo Treino</a>
                    </div>


                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        <table class="table">
                            <th>Nome do Aluno</th>
                            <th>Tipo de Treino</th>
                            <th>Nome Exercício</th>
                            <th>Repetições</th>
                            <th>Frequência (semanal)</th>
                            <th>Personal Trainer Responsável</th>
                            <th>Ações</th>
                            <tbody>
                            @foreach($treinos as $treino)
                                <tr>
                                    <td>{{$treino->nomedoaluno}}</td>
                                    <td>{{$treino->tipo}}</td>
                                    <td>{{$treino->exercicio}}</td>
                                    <td>{{$treino->repeticao}}</td>
                                    <td>{{$treino->frequencia}}</td>
                                    <td>{{$treino->personalresponsavel}}</td>
                                    <td>
                                        <a href="treinos/{{$treino->id}}/editar" class="btn btn-default btn-sm">Editar</a>
                                        {!! Form::open(['style' => 'display: inline', 'method' => 'DELETE', 'url' => '/treinos/'.$treino->id]) !!}
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

