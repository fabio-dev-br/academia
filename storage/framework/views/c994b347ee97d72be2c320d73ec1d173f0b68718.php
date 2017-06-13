<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Clientes
                        <a class="pull-right" href="<?php echo e(url ('clientes/novo')); ?>">Novo Cliente</a>
                    </div>

                    <div class="panel-body">
                        <?php if(Session::has('mensagem_sucesso')): ?>
                            <div class="alert-success"><?php echo e(Session::get('mensagem_sucesso')); ?></div>
                        <?php endif; ?>

                        <table class="table">
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>RG</th>
                            <th>Endereço</th>
                            <th>Telefone</th>
                            <th>Sexo</th>
                            <th>Ações</th>
                            <tbody>
                            <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($cliente->nome); ?></td>
                                    <td><?php echo e($cliente->cpf); ?></td>
                                    <td><?php echo e($cliente->rg); ?></td>
                                    <td><?php echo e($cliente->endereço); ?></td>
                                    <td><?php echo e($cliente->telefone); ?></td>
                                    <td><?php echo e($cliente->sexo); ?></td>
                                    <td>
                                        <a href="clientes/<?php echo e($cliente->id); ?>/editar" class="btn btn-default btn-sm">Editar</a>
                                        <?php echo Form::open(['style' => 'display: inline', 'method' => 'DELETE', 'url' => '/clientes/'.$cliente->id]); ?>

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