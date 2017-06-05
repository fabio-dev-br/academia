@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe abaixo as informações do patrimonio
                        <a class="pull-right" href="{{ url ('patrimonios')}}">Listagem patrimonio</a>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        @if(Request::is('*/editar'))
                            {!! Form::model($patrimonio, ['method' => 'PATCH', 'url' => 'patrimonio/'.$patrimonio->id])!!}
                        @else
                            {!! Form::open(['url' => 'patrimonios/salvar']) !!}
                        @endif

                        {!! Form::open(['url' => 'patrimonios/salvar'])!!}

                        {!! Form::label('nome', 'Nome')!!}
                        {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome'])!!}

                        {!! Form::label('numero', 'numero')!!}
                        {!! Form::input('text', 'numero', null, ['class' => 'form-control', 'placeholder' => 'numero'])!!}

                        {!! Form::submit ('Salvar', ['class'=>'btn btn-primary'])!!}
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
