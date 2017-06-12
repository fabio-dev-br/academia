<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Despesas
                        <a class="pull-right" href="<?php echo e(url ('despesas/novo')); ?>">Nova Despesa</a>
                    </div>

                    <div class="panel-body">
                        <?php if(Session::has('mensagem_sucesso')): ?>
                            <div class="alert-success"><?php echo e(Session::get('mensagem_sucesso')); ?></div>
                        <?php endif; ?>

                        <table class="table">
                            <th>Tipo</th>
                            <th>Descrição</th>
                            <th>Valor</th>
                            <th>Data de Vencimento</th>
                            <tbody>
                            <?php $__currentLoopData = $despesas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $despesa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($despesa->tipo); ?></td>
                                    <td><?php echo e($despesa->descrição); ?></td>
                                    <td><?php echo e($despesa->valor); ?></td>
                                    <td><?php echo e($despesa->datadevencimento); ?></td>
                                    <td>
                                        <a href="despesas/<?php echo e($despesa->id); ?>/editar" class="btn btn-default btn-sm">Editar</a>
                                        <?php echo Form::open(['style' => 'display: inline', 'method' => 'DELETE', 'url' => '/despesas/'.$despesa->id]); ?>

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