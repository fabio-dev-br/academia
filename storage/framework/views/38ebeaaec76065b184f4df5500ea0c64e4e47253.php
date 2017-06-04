<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe abaixo as informações do usuário
                        <a class="pull-right" href="<?php echo e(url ('usuarios')); ?>">Listagem usuários</a>
                    </div>

                    <div class="panel-body">
                        <?php if(Session::has('mensagem_sucesso')): ?>
                            <div class="alert-success"><?php echo e(Session::get('mensagem_sucesso')); ?></div>
                        <?php endif; ?>

                        <?php if(Request::is('*/editar')): ?>
                            <?php echo Form::model($usuario, ['method' => 'PATCH', 'url' => 'usuarios/'.$usuario->id]); ?>

                        <?php else: ?>
                            <?php echo Form::open(['url' => 'usuarios/salvar']); ?>

                        <?php endif; ?>

                        <?php echo Form::open(['url' => 'usuarios/salvar']); ?>


                        <?php echo Form::label('nome', 'Nome de Usuário'); ?>

                        <?php echo Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome de Usuário']); ?>


                        <?php echo Form::label('senha', 'Senha'); ?>

                        <?php echo Form::input('text', 'senha', null, ['class' => 'form-control', 'placeholder' => 'Senha']); ?>


                        <?php echo Form::submit ('Salvar', ['class'=>'btn btn-primary']); ?>

                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>