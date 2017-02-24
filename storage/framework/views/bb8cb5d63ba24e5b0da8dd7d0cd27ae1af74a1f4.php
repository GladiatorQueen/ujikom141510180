<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-black panel-primary">
                <div class="panel-heading">EDIT TUNJANGAN</div>

                <div class="panel-body">
                <?php echo Form::model($tun,['method'=>'PATCH', 'route'=>['tunjangan.update', $tun->id]]); ?>


					<div class="form-group <?php echo e($errors->has('kode_tunjangan') ? ' has-error' : 'pesan'); ?>">
						<?php echo Form::label('Kode Tunjangan','Kode Tunjangan :'); ?>

						<?php echo Form::text('kode_tunjangan',null,['class'=>'form-control']); ?>

						<?php if($errors->has('kode_jabatan')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e($errors->first('kode_tunjangan')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
					</div>
                    <div class="form-group <?php echo e($errors->has('jabatan_id') ? ' has-error' : 'pesan'); ?>">
                        <?php echo Form::label ('Nama Jabatan', ' Nama Jabatan:'); ?>

                        <select class="form-control" name="jabatan_id">
                        <option value="">---Nama Jabatan---</option>
                            <?php $__currentLoopData = $jb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo $data->id; ?>"><?php echo $data->nama_jabatan; ?> </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <?php echo Form::label ('Nama Golongan', ' Nama Golongan:'); ?>

                        <select class="form-control" name="golongan_id">
                        <option value="">---Nama Golongan---</option>
                            <?php $__currentLoopData = $gol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo $data->id; ?>"><?php echo $data->nama_golongan; ?> </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Status','Status :'); ?>

                        <?php echo Form::text('status',null,['class'=>'form-control']); ?>

                        
                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Jumlah Anak','Jumlah Anak :'); ?>

                        <?php echo Form::text('jumlah_anak',null,['class'=>'form-control']); ?>

                        
                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Besaran Uang','Besaran Uang :'); ?>

                        <?php echo Form::text('besaran_uang',null,['class'=>'form-control']); ?>

                        
                    </div>
                    <div class="form-group">
                        <?php echo Form::submit('Save',['class'=>'btn btn-primary form control']); ?>

                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>