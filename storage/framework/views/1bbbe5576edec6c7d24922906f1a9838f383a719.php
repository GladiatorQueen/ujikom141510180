<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-black panel-primary">
            <div class="panel-heading">TAMBAH TUNJANGAN</div>
				<div class="panel-body">
                <?php echo Form::open(['url'=>'tunjangan']); ?>

					<div class="form-group<?php echo e($errors->has('kode_tunjangan') ? ' has-error' : 'pesan'); ?>">
						<?php echo Form::label ('Kode Tunjangan', 'Kode Tunjangan :'); ?>

							<input type="text" name="kode_tunjangan" class="form-control" required>
							<?php if($errors->has('kode_tunjangan')): ?>
				                 <span class="help-block">
				                	<strong><?php echo e($errors->first('kode_tunjangan')); ?></strong>
				                 </span>
				            <?php endif; ?>
					</div>
					<div class="form-group<?php echo e($errors->has('jabatan_id') ? ' has-error' : ''); ?>">
						<?php echo Form::label ('Nama Jabatan', ' Nama Jabatan:'); ?>

						<select class="form-control" name="jabatan_id">
						<option value="">---Nama Jabatan---</option>
							<?php $__currentLoopData = $jb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<option value="<?php echo $data->id; ?>"><?php echo $data->nama_jabatan; ?> </option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
						</select>
						<?php if($errors->has('jabatan_id')): ?>
				                                    <span class="help-block">
				                                        <strong><?php echo e($errors->first('jabatan_id')); ?></strong>
				                                    </span>
				        <?php endif; ?>
					</div>
					<div class="form-group<?php echo e($errors->has('golongan_id') ? ' has-error' : ''); ?>">
						<?php echo Form::label ('Nama Golongan', ' Nama Golongan:'); ?>

						<select class="form-control" name="golongan_id">
						<option value="">---Nama Golongan---</option>
							<?php $__currentLoopData = $gol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<option value="<?php echo $data->id; ?>"><?php echo $data->nama_golongan; ?> </option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
						</select>
						<?php if($errors->has('golongan_id')): ?>
				                                    <span class="help-block">
				                                        <strong><?php echo e($errors->first('golongan_id')); ?></strong>
				                                    </span>
				        <?php endif; ?>
					</div>

					<div class="form-group<?php echo e($errors->has('status') ? ' has-error' : ''); ?>">
                            <label for="status" class="col-md-4 control-label">status</label>

                            <div class="col-md-6">
                                <select name="status" class="form-control">
                                    <option value="">---Pilih---</option>
                                    <option value="Menikah">Menikah</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                    <option value="Bercerai">Bercerai</option>
                                </select><br>
                                <?php if($errors->has('status')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('status')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
					
										 <div class="form-group<?php echo e($errors->has('jumlah_anak') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">jumlah_anak</label>

                        <div class="col-md-6">
                                <input id="jumlah_anak" type="number" class="form-control" name="jumlah_anak" value="<?php echo e(old('jumlah_anak')); ?>" required autofocus>

                                <?php if($errors->has('jumlah_anak')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('jumlah_anak')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>
                    
                    <div class="form-group<?php echo e($errors->has('besaran_uang') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">besaran_uang</label>

                        <div class="col-md-6">
                                <input id="besaran_uang" type="number" class="form-control" name="besaran_uang" value="<?php echo e(old('besaran_uang')); ?>" required autofocus>

                                <?php if($errors->has('besaran_uang')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('besaran_uang')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>
                        </div>


					 <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>

				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>