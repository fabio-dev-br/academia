<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-13 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">Funcionários
                        <a class="pull-right" href="<?php echo e(url ('funcionarios/novo')); ?>">Novo Funcionário</a>
                    </div>

                    <div class="panel-body">
                        <?php if(Session::has('mensagem_sucesso')): ?>
                            <div class="alert-success"><?php echo e(Session::get('mensagem_sucesso')); ?></div>
                        <?php endif; ?>

                        <table class="table">
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Carteira de Trabalho</th>
                            <th>Cargo</th>
                            <th>Data de Nascimento</th>
                            <th>Endereço</th>
                            <th>Telefone</th>
                            <th>Celular</th>
                            <th>E-mail</th>
                            <th>Sexo</th>
                            <th>Carga Horária</th>
                            <th>Ações</th>
                            <tbody>
                            <?php $__currentLoopData = $funcionarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $funcionario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($funcionario->nome); ?></td>
                                    <td><?php echo e($funcionario->cpf); ?></td>
                                    <td><?php echo e($funcionario->numerocarteira); ?></td>
                                    <td><?php echo e($funcionario->cargo); ?></td>
                                    <td><?php echo e($funcionario->datanascimento); ?></td>
                                    <td><?php echo e($funcionario->endereço); ?></td>
                                    <td><?php echo e($funcionario->telefone); ?></td>
                                    <td><?php echo e($funcionario->telefonecelular); ?></td>
                                    <td><?php echo e($funcionario->email); ?></td>
                                    <td><?php echo e($funcionario->sexo); ?></td>
                                    <td><?php echo e($funcionario->carga); ?></td>
                                    <td>
                                        <a href="funcionarios/<?php echo e($funcionario->id); ?>/editar" class="btn btn-default btn-sm">Editar</a>
                                        <?php echo Form::open(['style' => 'display: inline', 'method' => 'DELETE', 'url' => '/funcionarios/'.$funcionario->id]); ?>

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