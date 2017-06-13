<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe abaixo as informações da despesa
                        <a class="pull-right" href="<?php echo e(url ('despesas')); ?>">Listagem despesas</a>
                    </div>

                    <div class="panel-body">
                        <?php if(Session::has('mensagem_sucesso')): ?>
                            <div class="alert-success"><?php echo e(Session::get('mensagem_sucesso')); ?></div>
                        <?php endif; ?>

                        <?php if(Request::is('*/editar')): ?>
                            <?php echo Form::model($despesa, ['method' => 'PATCH', 'url' => 'despesas/'.$despesa->id]); ?>

                        <?php else: ?>
                            <?php echo Form::open(['url' => 'despesas/salvar']); ?>

                        <?php endif; ?>

                        <?php echo Form::open(['url' => 'despesas/salvar']); ?>


                        <?php echo Form::label('tipo', 'Tipo'); ?>

                        <?php echo Form::input('text', 'tipo', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Tipo']); ?>


                        <?php echo Form::label('descrição', 'Descrição'); ?>

                        <?php echo Form::input('text', 'descrição', null, ['class' => 'form-control', 'placeholder' => 'Descrição']); ?>


                        <?php echo Form::label('valor', 'Valor'); ?>

                        <?php echo Form::input('text', 'valor', null, ['class' => 'form-control', 'placeholder' => 'Valor']); ?>


                        <?php echo Form::label('datadevencimento', 'Data de Vencimento'); ?>

                        <?php echo Form::input('date', 'datadevencimento', null, ['class' => 'checkbox', 'placeholder' => 'Data de Vencimento']); ?>


                        <?php echo Form::submit ('Salvar', ['class'=>'btn btn-primary']); ?>

                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>