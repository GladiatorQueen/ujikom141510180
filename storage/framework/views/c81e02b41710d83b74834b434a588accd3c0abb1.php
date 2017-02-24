                
                <?php $__env->startSection('content'); ?>
    <div id="page-wrapper">
        <div class="row">
            <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Penggajian</h1>
        </div>
            <!--End Page Header -->
    </div>

                <div class="row">
                <!--quick info section -->
                
                <!--end quick info section -->
                </div>

                <div class="row">
                <div class="col-lg-8">
                <!--Area chart example -->
                </div>

                <!--End area chart example -->
                <!--Simple table example -->
                <div class="panel panel-primary">
                <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i>tabel

                <div class="pull-right">
                </div>

                <div class="btn-group">
                </div>

                </div>



                <div class="panel-body">
                <div class="row">
                <div class="col-lg-12">
                <div class="table-responsive">
                <div class="container">
                <div class="row">
                <div class="col-md-8 col-md-offset-2">
                <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/penggajian')); ?>"   enctype="multipart/form-data">
                <?php echo csrf_field(); ?>


                <table  class="table" >

                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="col-md-12">
                <label for="Jabatan">Nama Pegawai</label>

                <div>
                <?php if(isset($error)): ?>
                Penggajian Sudah Ada!
                <?php endif; ?>
                </div>

                <select class="col-md-6 form-control" name="tunjangan_pegawai_id">
                <?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datatunjangan): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                <option  value="<?php echo e($datatunjangan->id); ?>" ><?php echo e($datatunjangan->pegawai->User->name); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </select>
                <tr>
                <input type="hidden" name="status_pengambilan" value="0">

                <td  class="btn btn-danger">  <input type="submit" value="Tambah" class="btn btn-success"></input></td>

                </tr>
                </table>
                </div>
                </div>
                </div>
                <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>