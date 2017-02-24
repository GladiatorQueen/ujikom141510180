<?php $__env->startSection('content'); ?>

<br>

<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading">Update Data Pegawai</div>

                <div class="panel-body">

    <?php echo Form::model($peg,['method'=>'PATCH','route'=>['pegawai.update',$peg->id],'enctype'=>'multipart/form-data']); ?>


    <div class="form-group <?php echo e($errors->has('nip') ? ' has-error' : ''); ?>">

        <?php echo Form::label('NIP', 'NIP:'); ?>


        <?php echo Form::text('nip',null,['class'=>'form-control']); ?>


        <?php if($errors->has('nip')): ?>

                                    <span class="help-block">

                                        <strong><?php echo e($errors->first('nip')); ?></strong>

                                    </span>

                                <?php endif; ?>

    </div>

    <div class="form-group">

    <?php echo Form::label('Name', 'Name:'); ?>


                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e($peg->User->name); ?>">



                                <?php if($errors->has('name')): ?>

                                    <span class="help-block">

                                        <strong><?php echo e($errors->first('name')); ?></strong>

                                    </span>

                                <?php endif; ?>

            </div>

            <div class="form-group">

    <?php echo Form::label('Email', 'Email:'); ?>


                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e($peg->User->email); ?>">



                                <?php if($errors->has('email')): ?>

                                    <span class="help-block">

                                        <strong><?php echo e($errors->first('email')); ?></strong>

                                    </span>

                                <?php endif; ?>

            </div>

    <div class="form-group">

                                <?php echo Form::label('Permission', 'Permission:'); ?>


                                <input id="permission" type="text" class="form-control" name="permission" value="<?php echo e($peg->User->permission); ?>">



                                <?php if($errors->has('email')): ?>

                                    <span class="help-block">

                                        <strong><?php echo e($errors->first('email')); ?></strong>

                                    </span>

                                <?php endif; ?>

            </div>

    <div class="form-group <?php echo e($errors->has('jabatan_id') ? ' has-error' : ''); ?>">

        <?php echo Form::label('Kode Jabatan', 'Kode Jabatan:'); ?>


        <select  name="jabatan_id" class="form-control">

                                   <option value="">Silahkan Pilih Kode Jabatan</option>

                                        <?php $__currentLoopData = $jab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                                        <option value="<?php echo $a->id; ?>">Kode : <?php echo $a->kode_jabatan; ?> Jabatan : <?php echo $a->nama_jabatan; ?></option>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                                    </select>

                                <?php if($errors->has('jabatan_id')): ?>

                                    <span class="help-block">

                                        <strong><?php echo e($errors->first('jabatan_id')); ?></strong>

                                    </span>

                                <?php endif; ?>

    </div>

        <div class="form-group <?php echo e($errors->has('golongan_id') ? ' has-error' : ''); ?>">

        <?php echo Form::label('Kode Jabatan', 'Kode Jabatan:'); ?>


        <select  name="golongan_id" class="form-control">

                                   <option value="">Silahkan Pilih Kode Jabatan</option>

                                        <?php $__currentLoopData = $gol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                                        <option value="<?php echo $a->id; ?>">Kode : <?php echo $a->kode_golongan; ?> Jabatan : <?php echo $a->nama_golongan; ?></option>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                                    </select>

                                <?php if($errors->has('golongan_id')): ?>

                                    <span class="help-block">

                                        <strong><?php echo e($errors->first('golongan_id')); ?></strong>

                                    </span>

                                <?php endif; ?>

    </div>

       

    

    <div class="form-group <?php echo e($errors->has('photo') ? ' has-error' : ''); ?>">

        <?php echo Form::label('Foto', 'Foto:'); ?>


        <?php echo Form::file('photo',null,['class'=>'form-control']); ?>


        <?php if($errors->has('photo')): ?>

                                    <span class="help-block">

                                        <strong><?php echo e($errors->first('photo')); ?></strong>

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

    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>