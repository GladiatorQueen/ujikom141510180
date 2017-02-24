<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-black panel-primary">
                <div class="panel-heading">EDIT GOLONGAN</div>
                	<div class="panel-body">
                	<?php echo Form::model($gol,['method'=>'PATCH', 'route'=>['golongan.update', $gol->id]]); ?>

                		<div class="form-group <?php echo e($errors->has('kode_golongan') ? ' has-error' : 'pesan'); ?>">

							<?php echo Form::label('Kode Golongan','Kode Golongan :'); ?>

							<?php echo Form::text('kode_golongan',null,['class'=>'form-control']); ?>

							<?php if($errors->has('kode_golongan')): ?>
				                                    <span class="help-block">
				                                        <strong><?php echo e($errors->first('kode_golongan')); ?></strong>
				                                    </span>
				                                <?php endif; ?>
						
						</div>
						<div class="form-group">
							<?php echo Form::label('Nama Golongan','Nama Golongan :'); ?>

							<?php echo Form::text('nama_golongan',null,['class'=>'form-control']); ?>

						
						</div>
						<div class="form-group">
							<?php echo Form::label('Besaran Uang','Besaran Uang :'); ?>

							<?php echo Form::text('besaran_uang',null,['class'=>'form-control']); ?>

						
						</div>
						<div class="form-group">
							<?php echo Form::submit('Save', ['class'=>'btn btn-primary form control']); ?>

							<?php echo Form::close(); ?>

						</div>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>