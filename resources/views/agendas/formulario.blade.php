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
                            {!! Form::model($agenda, ['method' => 'PATCH', 'url' => 'agendas/'.$agenda->id])!!}
                        @else
                            {!! Form::open(['url' => 'agendas/salvar']) !!}
                        @endif

                        {!! Form::open(['url' => 'agendas/salvar'])!!}

                        {!! Form::label('personaltrainer', 'Personal Trainer')!!}
                        {!! Form::input('text', 'personaltrainer', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Personal Trainer'])!!}

                        {!! Form::label('data', 'Data')!!}
                        {!! Form::input('date', 'data', null, ['class' => 'form-control', 'placeholder' => 'Data'])!!}

                        {!! Form::label('horarioinicio', 'Horario Inicio')!!}
                        {!! Form::input('time', 'horarioinicio', null, ['class' => 'checkbox', 'placeholder' => 'Horario Inicio'])!!}

                        {!! Form::label('horariofim', 'Horario Fim')!!}
                        {!! Form::input('time', 'horariofim', null, ['class' => 'checkbox', 'placeholder' => 'Horario Fim'])!!}

                        {!! Form::label('tipotreino', 'Tipo de Treino')!!}
                            <select name="tipotreino" class="form-control">
                                <option value=""></option>
                                <option value="CrossFit">CrossFit</option>
                                <option value="Musculação">Musculação</option>
                                <option value="Dança">Dança</option>
                                <option value="Pilates">Pilates</option>
                                <option value="Spinning">Spinning</option>
                                <option value="Jump">Jump</option>
                            </select>

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
