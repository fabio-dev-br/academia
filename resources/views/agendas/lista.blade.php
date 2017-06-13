@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Agenda
                        <a class="pull-right" href="{{ url ('agendas/novo')}}">Novo Horario</a>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        <table class="table">
                            <th>Personal Trainer</th>
                            <th>Data</th>
                            <th>Horario Inicio</th>
                            <th>Horario Fim</th>
                            <th>Tipo de Treino</th>
                            <th>Unidade</th>
                            <tbody>
                            @foreach($agendas as $agenda)
                                <tr>
                                    <td>{{$agenda->personaltrainer}}</td>
                                    <td>{{$agenda->data}}</td>
                                    <td>{{$agenda->horarioinicio}}</td>
                                    <td>{{$agenda->horariofim}}</td>
                                    <td>{{$agenda->tipotreino}}</td>
                                    <td>{{$agenda->unidade}}</td>
                                    <td>
                                        <a href="agendas/{{$agenda->id}}/editar" class="btn btn-default btn-sm">Editar</a>
                                        {!! Form::open(['style' => 'display: inline', 'method' => 'DELETE', 'url' => '/agendas/'.$agenda->id]) !!}
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
