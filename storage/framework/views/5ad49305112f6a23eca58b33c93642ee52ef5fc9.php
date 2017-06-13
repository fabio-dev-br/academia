<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe abaixo as informações do patrimônio
                        <a class="pull-right" href="<?php echo e(url ('patrimonios')); ?>">Listagem patrimônios</a>
                    </div>

                    <div class="panel-body">
                        <?php if(Session::has('mensagem_sucesso')): ?>
                            <div class="alert-success"><?php echo e(Session::get('mensagem_sucesso')); ?></div>
                        <?php endif; ?>

                        <?php if(Request::is('*/editar')): ?>
                            <?php echo Form::model($patrimonio, ['method' => 'PATCH', 'url' => 'patrimonios/'.$patrimonio->id]); ?>

                        <?php else: ?>
                            <?php echo Form::open(['url' => 'patrimonios/salvar']); ?>

                        <?php endif; ?>

                        <?php echo Form::open(['url' => 'patrimonios/salvar']); ?>


                        <?php echo Form::label('nome', 'Nome'); ?>

                        <?php echo Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome']); ?>


                        <?php echo Form::label('numero', 'Número'); ?>

                        <?php echo Form::input('text', 'numero', null, ['class' => 'form-control', 'placeholder' => 'Número']); ?>


                        <?php echo Form::label('quantidade', 'Quantidade'); ?>

                        <?php echo Form::input('text', 'quantidade', null, ['class' => 'form-control', 'placeholder' => 'Quantidade']); ?>


                        <?php echo Form::submit ('Salvar', ['class'=>'btn btn-primary']); ?>

                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>