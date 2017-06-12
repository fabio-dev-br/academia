@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe abaixo as informações do usuário
                        <a class="pull-right" href="{{ url ('usuarios')}}">Listagem usuários</a>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        @if(Request::is('*/editar'))
                            {!! Form::model($usuario, ['method' => 'PATCH', 'url' => 'usuarios/'.$usuario->id])!!}
                        @else
                            {!! Form::open(['url' => 'usuarios/salvar']) !!}
                        @endif

                        {!! Form::open(['url' => 'usuarios/salvar'])!!}

                        {!! Form::label('nome', 'Nome de Usuário')!!}
                        {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome de Usuário'])!!}

                        {!! Form::label('senha', 'Senha')!!}
                        {!! Form::input('password', 'senha', null, ['class' => 'form-control', 'placeholder' => 'Senha'])!!}

                        {!! Form::submit ('Salvar', ['class'=>'btn btn-primary'])!!}
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
