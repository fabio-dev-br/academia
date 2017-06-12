<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Salas
                        <a class="pull-right" href="<?php echo e(url ('salas/novo')); ?>">Nova Sala</a>
                    </div>


                    <div class="panel-body">
                        <?php if(Session::has('mensagem_sucesso')): ?>
                            <div class="alert-success"><?php echo e(Session::get('mensagem_sucesso')); ?></div>
                        <?php endif; ?>

                        <table class="table">
                            <th>Código Sala</th>
                            <th>Situação Sala</th>
                            <th>Nome Personal Trainer</th>
                            <th>Horário de Atendimento</th>
                            <th>Ações</th>
                            <tbody>
                            <?php $__currentLoopData = $salas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sala): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($sala->codigo); ?></td>
                                    <td><?php echo e($sala->situacao); ?></td>
                                    <td><?php echo e($sala->nomepersonal); ?></td>
                                    <td><?php echo e($sala->horario); ?></td>
                                    <td>
                                        <a href="salas/<?php echo e($sala->id); ?>/editar" class="btn btn-default btn-sm">Editar</a>
                                        <?php echo Form::open(['style' => 'display: inline', 'method' => 'DELETE', 'url' => '/salas/'.$sala->id]); ?>

                                        <button type="submit" class="btn btn-default btn-sm">Excluir</button>
                                        <?php echo Form::close(); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>