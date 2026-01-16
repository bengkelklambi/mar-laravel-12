

<?php $__env->startSection('title', 'Daftar Siswa'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Daftar Siswa</h4>
                <a href="<?php echo e(route('siswa.create')); ?>" class="btn btn-primary">
                    <i class="bi bi-plus"></i> Tambah Siswa
                </a>
            </div>
            <div class="card-body">
                <?php if($siswas->count() > 0): ?>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $siswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($index + 1); ?></td>
                                    <td><?php echo e($siswa->nama); ?></td>
                                    <td><?php echo e($siswa->kelas); ?></td>
                                    <td><?php echo e(Str::limit($siswa->alamat, 50)); ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="<?php echo e(route('siswa.show', $siswa->id)); ?>" 
                                               class="btn btn-info btn-sm">
                                                Detail
                                            </a>
                                            <a href="<?php echo e(route('siswa.edit', $siswa->id)); ?>" 
                                               class="btn btn-warning btn-sm">
                                                Edit
                                            </a>
                                            <form action="<?php echo e(route('siswa.destroy', $siswa->id)); ?>" 
                                                  method="POST" 
                                                  style="display: inline;"
                                                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus data siswa ini?')">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <!-- Setelah table -->
<div class="d-flex justify-content-center"><?php echo e($siswas->links()); ?></div>
                    </div>
                <?php else: ?>
                    <div class="text-center py-4">
                        <p class="text-muted">Belum ada data siswa.</p>
                        <a href="<?php echo e(route('siswa.create')); ?>" class="btn btn-primary">
                            Tambah Siswa Pertama
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\crud_datasiswa_laravel12\resources\views/siswa/index.blade.php ENDPATH**/ ?>