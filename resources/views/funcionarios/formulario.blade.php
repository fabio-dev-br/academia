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
                        <select name="cargo" class="form-control">
                            <option value=""></option>
                            <option value="Administrador">Administrador</option>
                            <option value="Atendente">Atendente</option>
                            <option value="Instrutor">Instrutor</option>
                            <option value="Personal Trainer">Personal Trainer</option>
                            <option value="Outro">Outro</option>
                        </select>

                        {!! Form::label('datanascimento', 'Data de Nascimento')!!}
                        {!! Form::input('date', 'datanascimento', null, ['class' => 'checkbox', 'placeholder' => 'Data de Nascimento'])!!}

                        {!! Form::label('endereço', 'Endereço')!!}
                        {!! Form::input('text', 'endereço', null, ['class' => 'form-control', 'placeholder' => 'Endereço'])!!}

                        {!! Form::label('telefone', 'Telefone')!!}
                        {!! Form::input('text', 'telefone', null, ['class' => 'form-control', 'placeholder' => 'Telefone'])!!}

                        {!! Form::label('telefonecelular', 'Telefone Celular')!!}
                        {!! Form::input('text', 'telefonecelular', null, ['class' => 'form-control', 'placeholder' => 'Telefone Celular'])!!}

                        {!! Form::label('email', 'Email')!!}
                        {!! Form::input('text', 'email', null, ['class' => 'form-control', 'placeholder' => 'Email'])!!}

                        {!! Form::label('sexo', 'Sexo')!!}
                        <select name="sexo" class="form-control">
                            <option value=""></option>
                            <option value="Feminino">Feminino</option>
                            <option value="Masculino">Masculino</option>
                        </select>

                        {!! Form::label('carga', 'Carga Horária')!!}
                            <select name="carga" class="form-control">
                                <option value=""></option>
                                <option value="4 horas">4 HORAS</option>
                                <option value="5 horas">5 HORAS</option>
                                <option value="6 horas">6 HORAS</option>
                                <option value="7 horas">7 HORAS</option>
                                <option value="8 horas">8 HORAS</option>
                                <option value="9 horas">9 HORAS</option>
                            </select>

                        {!! Form::submit ('Salvar', ['class'=>'btn btn-primary'])!!}
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
