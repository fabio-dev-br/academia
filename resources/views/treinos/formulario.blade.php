@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe abaixo as informações do treino
                        <a class="pull-right" href="{{ url ('treinos')}}">Listagem treinos</a>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        @if(Request::is('*/editar'))
                            {!! Form::model($treino, ['method' => 'PATCH', 'url' => 'treinos/'.$treino->id])!!}
                        @else
                            {!! Form::open(['url' => 'treinos/salvar']) !!}
                        @endif

                        {!! Form::open(['url' => 'treinos/salvar'])!!}

                        {!! Form::label('tipo', 'Tipo do Treino')!!}
                        <select name="tipo" class="form-control">
                            <option value=""></option>
                            <option value="Abdominal">Abdominal</option>
                            <option value="Bíceps">Bíceps</option>
                            <option value="Tríceps">Tríceps</option>
                            <option value="Costas">Costas</option>
                            <option value="Peito">Peito</option>
                            <option value="Perna">Perna</option>
                            <option value="Ombro">Ombro</option>
                            <option value="Bumbum">Bumbum</option>
                            <option value="Alongamento">Alongamento</option>
                        </select>

                            {!! Form::label('nomedoaluno', 'Nome do Aluno')!!}
                            {!! Form::input('text', 'nomedoaluno', null, ['class' => 'form-control', 'placeholder' => 'Nome do Aluno'])!!}


                            {!! Form::label('exercicio', 'Nome do Exercício')!!}
                        {!! Form::input('text', 'exercicio', null, ['class' => 'form-control', 'placeholder' => 'Nome do Exercício'])!!}

                        {!! Form::label('repeticao', 'Repetições')!!}
                        {!! Form::input('text', 'repeticao', null, ['class' => 'form-control', 'placeholder' => 'Exemplo: "3 repetições de 15"'])!!}

                        {!! Form::label('frequencia', 'Frequência (por semana)')!!}
                        {!! Form::input('text', 'frequencia', null, ['class' => 'form-control', 'placeholder' => 'Exemplo: "2 vezes por semana"'])!!}

                        {!! Form::label('personalresponsavel', 'Personal Trainer Responsável')!!}
                        {!! Form::input('text', 'personalresponsavel', null, ['class' => 'form-control', 'placeholder' => 'Personal Trainer Responsável'])!!}

                        {!! Form::submit ('Salvar', ['class'=>'btn btn-primary'])!!}
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
