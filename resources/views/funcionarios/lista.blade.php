@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Funcionários
                        <a class="pull-right" href="{{ url ('funcionarios/novo')}}">Novo Funcionário</a>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        <table class="table">
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Carteira de Trabalho</th>
                            <th>Cargo</th>
                            <th>Data de Nascimento</th>
                            <th>Endereço</th>
                            <th>Telefone</th>
                            <th>Celular</th>
                            <th>E-mail</th>
                            <th>Sexo</th>
                            <th>Carga Horária</th>
                            <th>Ações</th>
                            <tbody>
                            @foreach($funcionarios as $funcionario)
                                <tr>
                                    <td>{{$funcionario->nome}}</td>
                                    <td>{{$funcionario->cpf}}</td>
                                    <td>{{$funcionario->numerocarteira}}</td>
                                    <td>{{$funcionario->cargo}}</td>
                                    <td>{{$funcionario->datanascimento}}</td>
                                    <td>{{$funcionario->endereço}}</td>
                                    <td>{{$funcionario->telefone}}</td>
                                    <td>{{$funcionario->telefonecelular}}</td>
                                    <td>{{$funcionario->email}}</td>
                                    <td>{{$funcionario->sexo}}</td>
                                    <td>{{$funcionario->carga}}</td>
                                    <td>
                                        <a href="funcionarios/{{$funcionario->id}}/editar" class="btn btn-default btn-sm">Editar</a>
                                        {!! Form::open(['style' => 'display: inline', 'method' => 'DELETE', 'url' => '/funcionarios/'.$funcionario->id]) !!}
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
