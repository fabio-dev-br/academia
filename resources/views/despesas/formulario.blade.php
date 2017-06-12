@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe abaixo as informações da despesa
                        <a class="pull-right" href="{{ url ('despesas')}}">Listagem despesas</a>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        @if(Request::is('*/editar'))
                            {!! Form::model($despesa, ['method' => 'PATCH', 'url' => 'despesas/'.$despesa->id])!!}
                        @else
                            {!! Form::open(['url' => 'despesas/salvar']) !!}
                        @endif

                        {!! Form::open(['url' => 'despesas/salvar'])!!}

                        {!! Form::label('tipo', 'Tipo')!!}
                        {!! Form::input('text', 'tipo', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Tipo'])!!}

                        {!! Form::label('descrição', 'Descrição')!!}
                        {!! Form::input('text', 'descrição', null, ['class' => 'form-control', 'placeholder' => 'Descrição'])!!}

                        {!! Form::label('valor', 'Valor')!!}
                        {!! Form::input('text', 'valor', null, ['class' => 'form-control', 'placeholder' => 'Valor'])!!}

                        {!! Form::label('datadevencimento', 'Data de Vencimento')!!}
                        {!! Form::input('date', 'datadevencimento', null, ['class' => 'checkbox', 'placeholder' => 'Data de Vencimento'])!!}

                        {!! Form::submit ('Salvar', ['class'=>'btn btn-primary'])!!}
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
