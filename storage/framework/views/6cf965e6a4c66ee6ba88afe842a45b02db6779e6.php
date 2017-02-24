<?php $__env->startSection('content'); ?>

<div id="page-wrapper">
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Penggajian</h1>

            <div class="row">
                <a href="<?php echo e(url('penggajian/create')); ?>"> <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                    <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b>Tambah Data </b>
                        </div>
                </div></a>



        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
            
        <?php 
        $no=1 ;
         ?>

        <?php $__currentLoopData = $penggajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datapenggajian): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

        <?php 
         ;
         ?>

        <div class="col-md-6">
        <center>

 
                        <center><img src="assets/images/users/avatar-3.jpg" alt="user" class="thumb-sm img-circle" /></center>
                        </th>
                        <h3><?php echo e($datapenggajian->tunjangan_pegawai->pegawai->User->name); ?></h3>
                        <h4><?php echo e($datapenggajian->tunjangan_pegawai->pegawai->nip); ?></h4>

                        <h5><b>
                        <?php if($datapenggajian->tanggal_pengambilan == ""&&$datapenggajian->status_pengambilan == "0"): ?>
                            Gaji Belum Diambil
                        <a class="btn btn-success col-md-2" href="<?php echo e(route('penggajian.edit',$datapenggajian->id)); ?>">Ambil Gaji </a>
                        
                        <?php elseif($datapenggajian->tanggal_pengambilan == ""||$datapenggajian->status_pengambilan == "0"): ?>

                            Gaji Belum Diambil

                            <br>

                            <br>

                            

                          <center> <b>  <a class="btn btn-success col-md-12" href="<?php echo e(route('penggajian.edit',$datapenggajian->id)); ?>">Ambil Gaji </a></b></center>

                            <br>

                            <br>

                            <br>



                             

                        

                        <?php else: ?>

                            Gaji Sudah Diambil Pada <?php echo e($datapenggajian->tanggal_pengambilan); ?>


                        <?php endif; ?></b></h5>

                        <h5>Jumlah Jam lembur Anda <?php echo e($datapenggajian->jumlah_jam_lembur); ?> jam</h5>
                        <h5>Gaji Lembur Anda Sebesar Rp.  <?php echo e($datapenggajian->jumlah_uang_lembur); ?> </h5>
                        <h5>Gaji Pokok Sebesar Rp. <?php echo e($datapenggajian->gaji_pokok); ?></h5>
                        <h5>Mendapat Tunjangan Sebesar Rp.  <?php echo e($datapenggajian->tunjangan_pegawai->tunjangan->besaran_uang); ?></h5>
                        <h5>Jadi Total Gaji Anda Adalah Rp.  <?php echo e($datapenggajian->total_gaji); ?></h5>


                        <a class="btn btn-success col-md-2" href="<?php echo e(route('penggajian.show',$datapenggajian->id)); ?>">Lihat </a>

                        <form method="POST" action=" <?php echo e(route('penggajian.destroy', $datapenggajian->id)); ?> ">

                        <?php echo e(csrf_field()); ?>


                        <input type="hidden" name="_method" value="DELETE">

                        <input class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="Hapus">

                        </form>

                      

                     

                    

                                

                        </center>

                        </div> 

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                        

                    </table>

                                    </div>



                                </div>



                            </div>

                            <!-- /.row -->

                        </div>

                        <!-- /.panel-body -->

                    </div>

                    <!--End simple table example -->



                </div>

                </div>



            </div>



                            </div>

                        </div>



                    </div>

                    <!--End Chat Panel Example-->

                </div>

            </div>

            

        </div>

        <!-- end page-wrapper -->



    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>