

<?php $__env->startSection('title', 'Tambah Siswa'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Tambah Data Siswa</h4>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('siswa.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text"
                               class="form-control"
                               id="nama"
                               name="nama"
                               placeholder="Masukkan nama lengkap siswa"
                               required>
                    </div>

                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text"
                               class="form-control"
                               id="kelas"
                               name="kelas"
                               placeholder="Contoh: XII PPLG 1, XII PPLG 2"
                               required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control"
                                  id="alamat"
                                  name="alamat"
                                  rows="4"
                                  placeholder="Masukkan alamat lengkap siswa"
                                  required></textarea>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="<?php echo e(route('siswa.index')); ?>" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\crud_datasiswa_laravel12\resources\views/siswa/create.blade.php ENDPATH**/ ?>