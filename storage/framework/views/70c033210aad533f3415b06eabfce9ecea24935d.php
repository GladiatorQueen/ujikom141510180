                            



                            <?php $__env->startSection('content'); ?>















                            <table class="table table-striped table-hover table-bordered">



                            <div class="col-md-12">

                            <center>





                            <h3><?php echo e($datapenggajian->tunjangan_pegawai->pegawai->User->name); ?></h3>

                            <h4><?php echo e($datapenggajian->tunjangan_pegawai->pegawai->nip); ?></h4>

                            <b><?php if($datapenggajian->tanggal_pengambilan == ""&&$datapenggajian->status_pengambilan == "0"): ?>

                            Gaji Belum Diambil

                            <?php elseif($datapenggajian->tanggal_pengambilan == ""||$datapenggajian->status_pengambilan == "0"): ?>

                            Gaji Belum Diambil

                            <?php else: ?>

                            Gaji Sudah Diambil Pada <?php echo e($datapenggajian->tanggal_pengambilan); ?>


                            <?php endif; ?></b>

                            <h5>Gaji Lembur Sebesar Rp.<?php echo e($datapenggajian->jumlah_uang_lembur); ?> ,Gaji Pokok Sebesar Rp.<?php echo e($datapenggajian->gaji_pokok); ?> ,Mendapat Tunjangan Sebesar Rp.<?php echo e($datapenggajian->tunjangan_pegawai->tunjangan->besaran_uang); ?> ,Jadi Total Gaji Rp.<?php echo e($datapenggajian->total_gaji); ?>








                            </h5>

                            <?php if(Auth::user()->permession=='Admin'||Auth::user()->permession=='Hrd'): ?>

                            <a class="btn btn-primary col-md-12" href="<?php echo e(url('penggajian')); ?>">Kembali</a>

                            <?php elseif(Auth::user()->permession=='Pegawai'): ?>

                            <a class="btn btn-primary col-md-12" href="<?php echo e(url('/')); ?>">Kembali</a>

                            <?php endif; ?>   

                            </center>

                            </div> 



                            </table>

                            </div>



                            </div>

                            </div>

                            </div>

                            </div>

                            </div>                   

                            </div>

                            </div>                    

                            </div>

                            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>