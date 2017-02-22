<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Tunjangan</div>
        <div class="panel-body">
        <a class="btn btn-success" href="<?php echo e(url('tunjanganpegawai/create')); ?>">Tambah Data</a><br><br>
            <table class="table table-striped table-bordered table-hover">
                        <thead>
                    <tr class="bg-primary">
                        <th><center>Id</th>
                        <th><center>Kode Tunjangan</th>
                        <th><center>Nama Pegawai</th>
                        <th colspan="3"><center>Opsi</th>
                    </tr>
                </thead>

                <?php $id=1; ?>
                <?php $__currentLoopData = $tunjanganpegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tbody>
                    <tr> 
                        <td> <?php echo e($id++); ?> </td>
                        <td> <?php echo e($data->tunjangan->kode_tunjangan); ?> </td>
                        <td> <?php echo e($data->pegawai->User->name); ?> </td>
                        <td><a href="<?php echo e(route('tunjanganpegawai.edit',$data->id)); ?>" class="btn btn-primary">Edit</a>
                        <td><a data-toggle="modal" href="#delete<?php echo e($data->id); ?>" class="btn btn-danger" title="Delete" data-toggle="tooltip">Delete</a></center>
                                  <?php echo $__env->make('models.delete', [
                                    'url' => route('tunjanganpegawai.destroy', $data->id),
                                    'model' => $data
                                  ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </td>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </table>    
                </div>
            </div>
        </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>