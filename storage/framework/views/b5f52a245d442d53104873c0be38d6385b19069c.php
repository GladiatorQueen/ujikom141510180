                            



                            <?php $__env->startSection('content'); ?>

                            <div id="content">

                            <div class="panel">

                            <div class="panel-body">

                            <div class="col-md-6 col-sm-12">



                            <h3 class="animated fadeInLeft">Your Gaji</h3>

                            <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> IS MONEY</p>





                            </div>

                            <div class="col-md-0 col-sm-12">













                            <div class="panel-body">

                            <?php echo Form::model($penggajian,['method' => 'PATCH','route'=>['penggajian.update',$penggajian->id]]); ?>


                            <?php echo csrf_field(); ?>


                            <table  class="table" >

                            <?php 

                            $date=date('Y-m-d');

                             ?>

                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                            <input type="hidden" name="tunjangan_pegawai_id" value="<?php echo e($penggajian->tunjangan_pegawai_id); ?>">

                            <input type="hidden" name="jumlah_jam_lembur" value="<?php echo e($penggajian->jumlah_jam_lembur); ?>">

                            <input type="hidden" name="jumlah_uang_lembur" value="<?php echo e($penggajian->jumlah_uang_lembur); ?>">

                            <input type="hidden" name="gaji_pokok" value="<?php echo e($penggajian->gaji_pokok); ?>">

                            <input type="hidden" name="total_gaji" value="<?php echo e($penggajian->total_gaji); ?>">

                            <input type="hidden" name="tanggal_pengambilan" value="<?php echo e($date); ?>">

                            <input type="hidden" name="status_pengambilan" value="1">

                            <input type="hidden" name="petugas_penerima" value="<?php echo e($penggajian->petugas_penerima); ?>">



                            <input type="hidden" name="status_pengambilan" value="1">







                            <input type="submit" value="Ambil Gaji" class="btn btn-success col-md-12"></input></td>

                            </tr>

                            </table>

                            </div>

                            </div>

                            </div>

                            </div>

                            </div>

                            <?php echo Form::close(); ?>


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

                            </div>

                            </div>                    

                            </div>



                            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>