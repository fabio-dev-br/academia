@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe abaixo as informações da sala
                        <a class="pull-right" href="{{ url ('salas')}}">Listagem salas</a>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        @if(Request::is('*/editar'))
                            {!! Form::model($sala, ['method' => 'PATCH', 'url' => 'salas/'.$sala->id])!!}
                        @else
                            {!! Form::open(['url' => 'salas/salvar']) !!}
                        @endif

                        {!! Form::open(['url' => 'salas/salvar'])!!}

                        {!! Form::label('codigo', 'Código da Sala')!!}
                        {!! Form::input('text', 'codigo', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Código da Sala'])!!}

                        {!! Form::label('situacao', 'Situação da Sala')!!}
                        {!! Form::input('text', 'situacao', null, ['class' => 'form-control', 'placeholder' => 'Situação da Sala'])!!}

                        {!! Form::label('nomepersonal', 'Nome do Personal Trainer')!!}
                        {!! Form::input('text', 'nomepersonal', null, ['class' => 'form-control', 'placeholder' => 'Nome do Personal Trainer'])!!}

                        {!! Form::label('horario', 'Horário de Atendimento')!!}
                        {!! Form::input('text', 'horario', null, ['class' => 'form-control', 'placeholder' => 'Horário de Atendimento'])!!}

                        {!! Form::submit ('Salvar', ['class'=>'btn btn-primary'])!!}
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
