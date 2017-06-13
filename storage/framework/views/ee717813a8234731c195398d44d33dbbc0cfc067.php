<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe abaixo as informações da sala
                        <a class="pull-right" href="<?php echo e(url ('salas')); ?>">Listagem salas</a>
                    </div>

                    <div class="panel-body">
                        <?php if(Session::has('mensagem_sucesso')): ?>
                            <div class="alert-success"><?php echo e(Session::get('mensagem_sucesso')); ?></div>
                        <?php endif; ?>

                        <?php if(Request::is('*/editar')): ?>
                            <?php echo Form::model($sala, ['method' => 'PATCH', 'url' => 'salas/'.$sala->id]); ?>

                        <?php else: ?>
                            <?php echo Form::open(['url' => 'salas/salvar']); ?>

                        <?php endif; ?>

                        <?php echo Form::open(['url' => 'salas/salvar']); ?>


                        <?php echo Form::label('codigo', 'Código da Sala'); ?>

                        <?php echo Form::input('text', 'codigo', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Código da Sala']); ?>


                        <?php echo Form::label('situacao', 'Situação da Sala'); ?>

                        <select name="situacao" class="form-control">
                            <option value=""></option>
                            <option value="Livre">Livre</option>
                            <option value="Em Manutenção">Em Manutenção</option>
                            <option value="Fechado para limpeza">Fechado para limpeza</option>
                            <option value="Em uso">Em uso</option>
                        </select>

                        <?php echo Form::label('nomepersonal', 'Nome do Personal Trainer'); ?>

                        <?php echo Form::input('text', 'nomepersonal', null, ['class' => 'form-control', 'placeholder' => 'Nome do Personal Trainer']); ?>


                        <?php echo Form::label('horario', 'Horário de Atendimento'); ?>

                        <?php echo Form::input('time', 'horario', null, ['class' => 'checkbox', 'placeholder' => 'Horário de Atendimento']); ?>


                        <?php echo Form::submit ('Salvar', ['class'=>'btn btn-primary']); ?>

                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>