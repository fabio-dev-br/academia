@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Clientes
                        <a class="pull-right" href="{{ url ('clientes/novo')}}">Novo Cliente</a>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        <table class="table">
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>RG</th>
                            <th>Endereço</th>
                            <th>Telefone</th>
                            <th>Sexo</th>
                            <th>Ações</th>
                            <tbody>
                            @foreach($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->nome}}</td>
                                    <td>{{$cliente->cpf}}</td>
                                    <td>{{$cliente->rg}}</td>
                                    <td>{{$cliente->endereço}}</td>
                                    <td>{{$cliente->telefone}}</td>
                                    <td>{{$cliente->sexo}}</td>
                                    <td>
                                        <a href="clientes/{{$cliente->id}}/editar" class="btn btn-default btn-sm">Editar</a>
                                        {!! Form::open(['style' => 'display: inline', 'method' => 'DELETE', 'url' => '/clientes/'.$cliente->id]) !!}
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