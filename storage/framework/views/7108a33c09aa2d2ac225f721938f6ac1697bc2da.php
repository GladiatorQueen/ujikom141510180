<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
    <br>
    <br>
    <br>
        <div class="col-md-10">
            <div class="panel panel-primary">
                <div class="panel-heading"> <center><h3>Kategori Lembur</h3></center></div>  
				<?php if(Auth::user()->permission == "Super Admin" || Auth::user()->permission == "Keuangan"): ?>
                <div class="panel-body">
                    <center><a href="<?php echo e(route('kategori_lembur.create')); ?>" class="btn btn-success">Tambah Data</a></center>
                    <center><?php echo e($kl->links()); ?></center>
                <?php endif; ?>
	<br>
	<br>
	<table class="table table-bordered">
		<thead>
			<tr class="bg-info">
				<th>No</th>
				<th>Kode Lembur</th>
				<th>Nama Jabatan</th>
				<th>Nama Golongan</th>
				<th>Besaran Uang</th>
				<th colspan="3"><center>Action</center></th>
			</tr>
		</thead>
		<?php 
		$no = 1;
		 ?>
		<?php $__currentLoopData = $kl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tbody>
			<td><?php echo e($no++); ?></td>
			<td><?php echo e($data->kode_lembur); ?></td>
			<td><?php echo e($data->Jabatan->nama_jabatan); ?></td>
			<td><?php echo e($data->Golongan->nama_golongan); ?></td>
			<?php $data->besaran_uang=number_format($data->besaran_uang,2,',','.'); ?>
			<td>Rp.<?php echo e($data->besaran_uang); ?></td>
			<?php if(Auth::user()->permission == "Super Admin" || Auth::user()->permission == "Keuangan"): ?>
			<td><center><a href="<?php echo e(route('kategori_lembur.edit', $data->id)); ?>" class="btn btn-warning"><li class="mdi mdi-lg mdi-pencil"></li></a></center></td>
				<td><center>
					<form method="POST" action="<?php echo e(route('kategori_lembur.destroy', $data->id)); ?>">
					<?php echo e(csrf_field()); ?>

					<input type="hidden" name="_method" value="DELETE">
					<button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Mau Menghapus Data?');"><i class="mdi mdi-delete"></i></button>
					</form>
			<?php endif; ?>
		</tbody>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</table>
	</div>
	</div>
	</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>