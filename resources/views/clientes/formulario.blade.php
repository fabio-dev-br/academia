<<<<<<< HEAD
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe abaixo as informações do cliente
                        <a class="pull-right" href="{{ url ('clientes')}}">Listagem cliente</a>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        @if(Request::is('*/editar'))
                            {!! Form::model($cliente, ['method' => 'PATCH', 'url' => 'clientes/'.$cliente->id])!!}
                        @else
                            {!! Form::open(['url' => 'clientes/salvar']) !!}
                        @endif

                        {!! Form::open(['url' => 'clientes/salvar'])!!}

                        {!! Form::label('nome', 'Nome')!!}
                        {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome'])!!}

                        {!! Form::label('cpf', 'CPF')!!}
                        {!! Form::input('text', 'cpf', null, ['class' => 'form-control', 'placeholder' => 'CPF'])!!}

                        {!! Form::label('rg', 'RG')!!}
                        {!! Form::input('text', 'rg', null, ['class' => 'form-control', 'placeholder' => 'RG'])!!}

                        {!! Form::label('endereço', 'Endereço')!!}
                        {!! Form::input('text', 'endereço', null, ['class' => 'form-control', 'placeholder' => 'Endereço'])!!}

                        {!! Form::label('telefone', 'Telefone')!!}
                        {!! Form::input('text', 'telefone', null, ['class' => 'form-control', 'placeholder' => 'Telefone'])!!}

                        {!! Form::label('sexo', 'Sexo')!!}
                            <select name="sexo" class="form-control">
                                <option value=""></option>
                                <option value="Feminino">Feminino</option>
                                <option value="Masculino">Masculino</option>
                            </select>

                        {!! Form::submit ('Salvar', ['class'=>'btn btn-primary'])!!}
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
=======
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe abaixo as informações do cliente
                        <a class="pull-right" href="{{ url ('clientes')}}">Listagem cliente</a>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        @if(Request::is('*/editar'))
                            {!! Form::model($cliente, ['method' => 'PATCH', 'url' => 'clientes/'.$cliente->id])!!}
                        @else
                            {!! Form::open(['url' => 'clientes/salvar']) !!}
                        @endif

                        {!! Form::open(['url' => 'clientes/salvar'])!!}

                        {!! Form::label('nome', 'Nome')!!}
                        {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome'])!!}

                        {!! Form::label('cpf', 'CPF')!!}
                        {!! Form::input('text', 'cpf', null, ['class' => 'form-control', 'placeholder' => 'CPF'])!!}

                        {!! Form::label('rg', 'RG')!!}
                        {!! Form::input('text', 'rg', null, ['class' => 'form-control', 'placeholder' => 'RG'])!!}

                        {!! Form::label('endereço', 'Endereço')!!}
                        {!! Form::input('text', 'endereço', null, ['class' => 'form-control', 'placeholder' => 'Endereço'])!!}

                        {!! Form::label('telefone', 'Telefone')!!}
                        {!! Form::input('text', 'telefone', null, ['class' => 'form-control', 'placeholder' => 'Telefone'])!!}

                        {!! Form::label('sexo', 'Sexo')!!}
                        {!! Form::input('text', 'sexo', null, ['class' => 'form-control', 'placeholder' => 'Sexo'])!!}

                        {!! Form::submit ('Salvar', ['class'=>'btn btn-primary'])!!}
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
>>>>>>> master
