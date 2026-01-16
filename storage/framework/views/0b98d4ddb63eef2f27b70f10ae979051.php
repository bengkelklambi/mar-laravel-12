

<?php $__env->startSection('title', 'Detail Siswa'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Detail Data Siswa</h4>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-3">
                        <strong>ID:</strong>
                    </div>
                    <div class="col-md-9">
                        <?php echo e($siswa->id); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <strong>Nama Lengkap:</strong>
                    </div>
                    <div class="col-md-9">
                        <?php echo e($siswa->nama); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <strong>Kelas:</strong>
                    </div>
                    <div class="col-md-9">
                        <?php echo e($siswa->kelas); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <strong>Alamat:</strong>
                    </div>
                    <div class="col-md-9">
                        <?php echo e($siswa->alamat); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <strong>Dibuat pada:</strong>
                    </div>
                    <div class="col-md-9">
                        <?php echo e($siswa->created_at->format('d/m/Y H:i:s')); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <strong>Terakhir diupdate:</strong>
                    </div>
                    <div class="col-md-9">
                        <?php echo e($siswa->updated_at->format('d/m/Y H:i:s')); ?>

                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="<?php echo e(route('siswa.index')); ?>" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <div>
                        <a href="<?php echo e(route('siswa.edit', $siswa->id)); ?>" class="btn btn-warning">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <form action="<?php echo e(route('siswa.destroy', $siswa->id)); ?>" 
                              method="POST" 
                              style="display: inline;"
                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus data siswa ini?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\crud_datasiswa_laravel12\resources\views/siswa/show.blade.php ENDPATH**/ ?>