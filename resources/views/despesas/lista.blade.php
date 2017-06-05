@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Despesas
                        <a class="pull-right" href="{{ url ('despesas/novo')}}">Nova Despesa</a>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        <table class="table">
                            <th>Tipo</th>
                            <th>Descrição</th>
                            <th>Valor</th>
                            <th>Data de Vencimento</th>
                            <tbody>
                            @foreach($despesas as $despesas)
                                <tr>
                                    <td>{{$despesas->tipo}}</td>
                                    <td>{{$despesas->descrição}}</td>
                                    <td>{{$despesas->valor}}</td>
                                    <td>{{$despesas->datadevencimento}}</td>
                                    <td>
                                        <a href="despesas/{{$despesas->id}}/editar" class="btn btn-default btn-sm">Editar</a>
                                        {!! Form::open(['style' => 'display: inline', 'method' => 'DELETE', 'url' => '/despesas/'.$despesas->id]) !!}
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
