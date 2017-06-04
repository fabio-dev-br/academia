@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe abaixo as informações do funcionário
                        <a class="pull-right" href="{{ url ('funcionarios')}}">Listagem funcionários</a>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        @if(Request::is('*/editar'))
                            {!! Form::model($funcionario, ['method' => 'PATCH', 'url' => 'funcionarios/'.$funcionario->id])!!}
                        @else
                            {!! Form::open(['url' => 'funcionarios/salvar']) !!}
                        @endif


                        {!! Form::open(['url' => 'funcionarios/salvar'])!!}

                        {!! Form::label('nome', 'Nome')!!}
                        {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome'])!!}

                        {!! Form::label('cpf', 'CPF')!!}
                        {!! Form::input('text', 'cpf', null, ['class' => 'form-control', 'placeholder' => 'CPF'])!!}

                        {!! Form::label('numerocarteira', 'Numero da Carteira de Trabalho')!!}
                        {!! Form::input('text', 'numerocarteira', null, ['class' => 'form-control', 'placeholder' => 'Numero da Carteira de Trabalho'])!!}

                        {!! Form::label('cargo', 'Cargo')!!}
                        {!! Form::input('text', 'cargo', null, ['class' => 'form-control', 'placeholder' => 'Cargo'])!!}

                        {!! Form::label('datanascimento', 'Data de Nascimento')!!}
                        {!! Form::input('text', 'datanascimento', null, ['class' => 'form-control', 'placeholder' => 'Telefone'])!!}

                        {!! Form::label('endereço', 'Endereço')!!}
                        {!! Form::input('text', 'endereço', null, ['class' => 'form-control', 'placeholder' => 'Endereço'])!!}

                        {!! Form::label('telefone', 'Telefone')!!}
                        {!! Form::input('text', 'telefone', null, ['class' => 'form-control', 'placeholder' => 'Telefone'])!!}

                        {!! Form::label('telefonecelular', 'Telefone Celular')!!}
                        {!! Form::input('text', 'telefonecelular', null, ['class' => 'form-control', 'placeholder' => 'Telefone Celular'])!!}

                        {!! Form::label('email', 'Email')!!}
                        {!! Form::input('text', 'email', null, ['class' => 'form-control', 'placeholder' => 'Email'])!!}

                        {!! Form::label('sexo', 'Sexo')!!}
                        {!! Form::input('text', 'sexo', null, ['class' => 'form-control', 'placeholder' => 'Sexo'])!!}

                        {!! Form::label('carga', 'Carga Horária')!!}
                        {!! Form::input('text', 'carga', null, ['class' => 'form-control', 'placeholder' => 'Carga Horária'])!!}

                        {!! Form::submit ('Salvar', ['class'=>'btn btn-primary'])!!}
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
