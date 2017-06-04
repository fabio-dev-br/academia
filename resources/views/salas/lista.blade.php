@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Salas
                        <a class="pull-right" href="{{ url ('salas/novo')}}">Nova Sala</a>
                    </div>


                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        <table class="table">
                            <th>Código Sala</th>
                            <th>Situação Sala</th>
                            <th>Nome Personal Trainer</th>
                            <th>Horário de Atendimento</th>
                            <th>Ações</th>
                            <tbody>
                            @foreach($salas as $sala)
                                <tr>
                                    <td>{{$sala->codigo}}</td>
                                    <td>{{$sala->situacao}}</td>
                                    <td>{{$sala->nomepersonal}}</td>
                                    <td>{{$sala->horario}}</td>
                                    <td>
                                        <a href="salas/{{$sala->id}}/editar" class="btn btn-default btn-sm">Editar</a>
                                        {!! Form::open(['style' => 'display: inline', 'method' => 'DELETE', 'url' => '/salas/'.$sala->id]) !!}
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

