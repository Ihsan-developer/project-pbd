<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php if (session()->get('role') === 'manager') : ?>
    <h3>Input Data Karyawan</h3>
    <form action="<?= base_url('data-pegawai/simpan') ?>" method="post">
        <?= csrf_field(); ?>
        <div class="form-group row">
            <label for="num" class="col-sm-2 col-form-label">ID Karyawan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="num" name="num">
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nama Karyawan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="form-group row">
            <label for="lokasi" class="col-sm-2 col-form-label">Lokasi Kerja</label>
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