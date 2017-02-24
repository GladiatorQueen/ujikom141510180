<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
    <br>
    <br>
    <br>
        <div class="col-md-10">
            <div class="panel panel-primary">
                <div class="panel-heading"> <center><h2>Welcome in MyProject GilaCoding</h2></center></div>

                <div class="panel-body"><center><h5 class="m-0">
                    “Your future is determined by what you start today.”
                    <br>
                    Masa depan anda ditentukan oleh hal yang anda mulai hari ini.

                    </h5><center><br></center></center>
                </div>
                
                <tbody>
                    <tr>
                        <th>
                        <center><img src="assets/images/users/avatar-3.jpg" alt="user" class="thumb-sm img-circle" /></center>
                        </th>
                        <td>
                        <center><h5 class="m-0">Bayu Prima Yuda</h5></center>
                        <center><p class="m-0 text-muted font-13"><small>Student SMK ASSALAAM BANDUNG</small></p></center>
                        </td>
                        <td><center>Jawa Barat</center></td>
                        <td><center>Indonesia</center></td>
                    </tr>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>