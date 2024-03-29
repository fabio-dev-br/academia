<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-15 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe abaixo as informações do funcionário
                        <a class="pull-right" href="<?php echo e(url ('funcionarios')); ?>">Listagem funcionários</a>
                    </div>

                    <div class="panel-body">
                        <?php if(Session::has('mensagem_sucesso')): ?>
                            <div class="alert-success"><?php echo e(Session::get('mensagem_sucesso')); ?></div>
                        <?php endif; ?>

                        <?php if(Request::is('*/editar')): ?>
                            <?php echo Form::model($funcionario, ['method' => 'PATCH', 'url' => 'funcionarios/'.$funcionario->id]); ?>

                        <?php else: ?>
                            <?php echo Form::open(['url' => 'funcionarios/salvar']); ?>

                        <?php endif; ?>


                        <?php echo Form::open(['url' => 'funcionarios/salvar']); ?>


                        <?php echo Form::label('nome', 'Nome'); ?>

                        <?php echo Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome']); ?>


                        <?php echo Form::label('cpf', 'CPF'); ?>

                        <?php echo Form::input('text', 'cpf', null, ['class' => 'form-control', 'placeholder' => 'CPF']); ?>


                        <?php echo Form::label('numerocarteira', 'Numero da Carteira de Trabalho'); ?>

                        <?php echo Form::input('text', 'numerocarteira', null, ['class' => 'form-control', 'placeholder' => 'Numero da Carteira de Trabalho']); ?>


                        <?php echo Form::label('cargo', 'Cargo'); ?>

                        <select name="cargo" class="form-control">
                            <option value=""></option>
                            <option value="Administrador">Administrador</option>
                            <option value="Atendente">Atendente</option>
                            <option value="Instrutor">Instrutor</option>
                            <option value="Personal Trainer">Personal Trainer</option>
                            <option value="Outro">Outro</option>
                        </select>

                        <?php echo Form::label('datanascimento', 'Data de Nascimento'); ?>

                        <?php echo Form::input('date', 'datanascimento', null, ['class' => 'checkbox', 'placeholder' => 'Data de Nascimento']); ?>


                        <?php echo Form::label('endereço', 'Endereço'); ?>

                        <?php echo Form::input('text', 'endereço', null, ['class' => 'form-control', 'placeholder' => 'Endereço']); ?>


                        <?php echo Form::label('telefone', 'Telefone'); ?>

                        <?php echo Form::input('text', 'telefone', null, ['class' => 'form-control', 'placeholder' => 'Telefone']); ?>


                        <?php echo Form::label('telefonecelular', 'Telefone Celular'); ?>

                        <?php echo Form::input('text', 'telefonecelular', null, ['class' => 'form-control', 'placeholder' => 'Telefone Celular']); ?>


                        <?php echo Form::label('email', 'Email'); ?>

                        <?php echo Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => 'Email']); ?>


                        <?php echo Form::label('sexo', 'Sexo'); ?>

                        <select name="sexo" class="form-control">
                            <option value=""></option>
                            <option value="Feminino">Feminino</option>
                            <option value="Masculino">Masculino</option>
                        </select>

                        <?php echo Form::label('carga', 'Carga Horária'); ?>

                            <select name="carga" class="form-control">
                                <option value=""></option>
                                <option value="4 horas">4 HORAS</option>
                                <option value="5 horas">5 HORAS</option>
                                <option value="6 horas">6 HORAS</option>
                                <option value="7 horas">7 HORAS</option>
                                <option value="8 horas">8 HORAS</option>
                                <option value="9 horas">9 HORAS</option>
                            </select>

                        <?php echo Form::submit ('Salvar', ['class'=>'btn btn-primary']); ?>

                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>