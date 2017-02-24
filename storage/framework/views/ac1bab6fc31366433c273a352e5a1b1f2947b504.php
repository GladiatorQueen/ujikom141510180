<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-black panel-primary">
                <div class="panel-heading">EDIT JABATAN</div>

                <div class="panel-body">
                <?php echo Form::model($jb,['method'=>'PATCH', 'route'=>['jabatan.update', $jb->id]]); ?>


					<div class="form-group <?php echo e($errors->has('kode_jabatan') ? ' has-error' : 'pesan'); ?>">
						<?php echo Form::label('Kode Jabatan','Kode Jabatan :'); ?>

						<?php echo Form::text('kode_jabatan',null,['class'=>'form-control']); ?>

						<?php if($errors->has('kode_jabatan')): ?>
				                                    <span class="help-block">
				                                        <strong><?php echo e($errors->first('kode_jabatan')); ?></strong>
				                                    </span>
				                                <?php endif; ?>
					</div>
					<div class="form-group<?php echo e($errors->has('nama_jabatan') ? ' has-error' : 'pesan'); ?>">
						<?php echo Form::label('Nama Jabatan','Nama Jabatan :'); ?>

						<?php echo Form::text('nama_jabatan',null,['class'=>'form-control']); ?>

												<?php if($errors->has('nama_jabatan')): ?>
				                                    <span class="help-block">
				                                        <strong><?php echo e($errors->first('nama_jabatan')); ?></strong>
				                                    </span>
				                                <?php endif; ?>
					</div>
					<div class="form-group <?php echo e($errors->has('besaran_uang') ? ' has-error' : 'pesan'); ?>">
						<?php echo Form::label('Besaran Uang','Besaran Uang :'); ?>

						<?php echo Form::text('besaran_uang',null,['class'=>'form-control']); ?>

						<?php if($errors->has('besaran_uang')): ?>
				                                    <span class="help-block">
				                                        <strong><?php echo e($errors->first('besaran_uang')); ?></strong>
				                                    </span>
				                                <?php endif; ?>
					</div>
					<div class="form-group">
						<?php echo Form::submit('Save', ['class' => 'btn btn-primary form control']); ?>

						<?php echo Form::close(); ?>

						</div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>