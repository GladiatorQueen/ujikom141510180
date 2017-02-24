<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
    <br>
        <div class="col-md-10">
            <div class="panel panel-primary">
                <div class="panel-heading"> <center><h3>Golongan</h3></center></div>  
                <br>
                <div class="form-group"><center>
                    <form action="<?php echo e(url('jabatan')); ?>/?nama_golongan=nama_golongan">
                    <input type="text" name="nama_golongan" placeholder="Sarch"></form>
                </center></div>
                
	<br>
	<br>
	<table class="table table-bordered">
		<thead>
			<tr class="bg-info">
				<th>No</th>
				<th>Kode Golongan</th>
				<th>Nama Golongan</th>
				<th>Besaraan Uang</th>
				<?php if(Auth::user()->permission == "SuperAdmin"): ?>
				<th colspan="3"><center>Action</center></th>
				<?php endif; ?>
			</tr>
		</thead>
		<?php 
		$no = 1;
		 ?>
		<?php $__currentLoopData = $gol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tbody>
			<tr>
				<td><?php echo e($no++); ?></td>
				<td><?php echo e($data->kode_golongan); ?></td>
				<td><?php echo e($data->nama_golongan); ?></td>
				<?php $data->besaran_uang=number_format($data->besaran_uang,2,',','.'); ?>
				<td>Rp.<?php echo e($data->besaran_uang); ?></td>
				<?php if(Auth::user()->permission == "Super Admin" || Auth::user()->permission == "Hrd"): ?>
				<td><center><a href="<?php echo e(route('golongan.edit', $data->id)); ?>" class="btn btn-warning"><li class="mdi mdi-lg mdi-pencil"></li></a></center></td>
				<td><center>
					<form method="POST" action="<?php echo e(route('golongan.destroy', $data->id)); ?>">
					<?php echo e(csrf_field()); ?>

					<input type="hidden" name="_method" value="DELETE">
					<button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Mau Menghapus Data?');"><i class="mdi mdi-delete"></i></button>
					</form>
				</center></td>
				<?php endif; ?>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</tbody>
	</table>
	<?php if(Auth::user()->permission == "Super Admin" || Auth::user()->permission == "Hrd"): ?>
	<div class="panel-body">
        <center><a href="<?php echo e(route('golongan.create')); ?>" class="btn btn-success">Tambah Data</a></center>
    </div>
    <?php endif; ?>
                <?php echo e($gol->links()); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>