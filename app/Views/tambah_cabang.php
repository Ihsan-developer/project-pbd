<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php if (session()->get('role') === 'manager') : ?>
    <h3>Input Data Cabang Toko</h3>
    <form action="<?= base_url('data-cabang/simpan') ?>" method="post">
        <?= csrf_field(); ?>
        <div class="form-group row">
            <label for="num" class="col-sm-2 col-form-label">ID Cabang</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="num" name="num">
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nama Cabang</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="form-group row">
            <label for="lokasi" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="lokasi" name="lokasi">
            </div>
        </div>
        <div class="form-group row">
            <label for="gaji" class="col-sm-2 col-form-label">Gaji</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="gaji" name="gaji">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
<?php else : ?>
    <div class="alert alert-danger" role="alert">
        Anda tidak memiliki akses untuk melihat data
    </div>
<?php endif; ?>

<?= $this->endSection(); ?>