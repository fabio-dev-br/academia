@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe abaixo as informações da agenda
                        <a class="pull-right" href="{{ url ('agendas')}}">Agenda</a>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        @if(Request::is('*/editar'))
                            {!! Form::model($agenda, ['method' => 'PATCH', 'url' => 'agendas/'.$agendas->id])!!}
                        @else
                            {!! Form::open(['url' => 'agendas/salvar']) !!}
                        @endif

                        {!! Form::open(['url' => 'agendas/salvar'])!!}

                        {!! Form::label('personaltrainer', 'Personal Trainer')!!}
                        {!! Form::input('text', 'tipo', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Personal Trainer'])!!}

                        {!! Form::label('data', 'Data')!!}
                        {!! Form::input('text', 'data', null, ['class' => 'form-control', 'placeholder' => 'Data'])!!}

                        {!! Form::label('horarioinicio', 'Horario Inicio')!!}
                        {!! Form::input('text', 'horarioinicio', null, ['class' => 'form-control', 'placeholder' => 'Horario Inicio'])!!}

                        {!! Form::label('horariofim', 'Horario Fim')!!}
                        {!! Form::input('text', 'horariofim', null, ['class' => 'form-control', 'placeholder' => 'Horario Fim'])!!}

                        {!! Form::label('tipotreino', 'Tipo de Treino')!!}
                        {!! Form::input('date', 'tipotreino', null, ['class' => 'checkbox', 'placeholder' => 'Tipo de Treino'])!!}

                        {!! Form::label('unidade', 'Unidade')!!}
                        {!! Form::input('text', 'unidade', null, ['class' => 'form-control', 'placeholder' => 'Unidade'])!!}

                        {!! Form::submit ('Salvar', ['class'=>'btn btn-primary'])!!}
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
