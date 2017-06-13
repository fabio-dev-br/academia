<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe abaixo as informações do cliente
                        <a class="pull-right" href="<?php echo e(url ('clientes')); ?>">Listagem cliente</a>
                    </div>

                    <div class="panel-body">
                        <?php if(Session::has('mensagem_sucesso')): ?>
                            <div class="alert-success"><?php echo e(Session::get('mensagem_sucesso')); ?></div>
                        <?php endif; ?>

                        <?php if(Request::is('*/editar')): ?>
                            <?php echo Form::model($cliente, ['method' => 'PATCH', 'url' => 'clientes/'.$cliente->id]); ?>

                        <?php else: ?>
                            <?php echo Form::open(['url' => 'clientes/salvar']); ?>

                        <?php endif; ?>

                        <?php echo Form::open(['url' => 'clientes/salvar']); ?>


                        <?php echo Form::label('nome', 'Nome'); ?>

                        <?php echo Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome']); ?>


                        <?php echo Form::label('cpf', 'CPF'); ?>

                        <?php echo Form::input('text', 'cpf', null, ['class' => 'form-control', 'placeholder' => 'CPF']); ?>


                        <?php echo Form::label('rg', 'RG'); ?>

                        <?php echo Form::input('text', 'rg', null, ['class' => 'form-control', 'placeholder' => 'RG']); ?>


                        <?php echo Form::label('endereço', 'Endereço'); ?>

                        <?php echo Form::input('text', 'endereço', null, ['class' => 'form-control', 'placeholder' => 'Endereço']); ?>


                        <?php echo Form::label('telefone', 'Telefone'); ?>

                        <?php echo Form::input('text', 'telefone', null, ['class' => 'form-control', 'placeholder' => 'Telefone']); ?>


                        <?php echo Form::label('sexo', 'Sexo'); ?>

                            <select name="sexo" class="form-control">
                                <option value=""></option>
                                <option value="Feminino">Feminino</option>
                                <option value="Masculino">Masculino</option>
                            </select>

                        <?php echo Form::submit ('Salvar', ['class'=>'btn btn-primary']); ?>

                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe abaixo as informações do cliente
                        <a class="pull-right" href="<?php echo e(url ('clientes')); ?>">Listagem cliente</a>
                    </div>

                    <div class="panel-body">
                        <?php if(Session::has('mensagem_sucesso')): ?>
                            <div class="alert-success"><?php echo e(Session::get('mensagem_sucesso')); ?></div>
                        <?php endif; ?>

                        <?php if(Request::is('*/editar')): ?>
                            <?php echo Form::model($cliente, ['method' => 'PATCH', 'url' => 'clientes/'.$cliente->id]); ?>

                        <?php else: ?>
                            <?php echo Form::open(['url' => 'clientes/salvar']); ?>

                        <?php endif; ?>

                        <?php echo Form::open(['url' => 'clientes/salvar']); ?>


                        <?php echo Form::label('nome', 'Nome'); ?>

                        <?php echo Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome']); ?>


                        <?php echo Form::label('cpf', 'CPF'); ?>

                        <?php echo Form::input('text', 'cpf', null, ['class' => 'form-control', 'placeholder' => 'CPF']); ?>


                        <?php echo Form::label('rg', 'RG'); ?>

                        <?php echo Form::input('text', 'rg', null, ['class' => 'form-control', 'placeholder' => 'RG']); ?>


                        <?php echo Form::label('endereço', 'Endereço'); ?>

                        <?php echo Form::input('text', 'endereço', null, ['class' => 'form-control', 'placeholder' => 'Endereço']); ?>


                        <?php echo Form::label('telefone', 'Telefone'); ?>

                        <?php echo Form::input('text', 'telefone', null, ['class' => 'form-control', 'placeholder' => 'Telefone']); ?>


                        <?php echo Form::label('sexo', 'Sexo'); ?>

                        <?php echo Form::input('text', 'sexo', null, ['class' => 'form-control', 'placeholder' => 'Sexo']); ?>


                        <?php echo Form::submit ('Salvar', ['class'=>'btn btn-primary']); ?>

                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>