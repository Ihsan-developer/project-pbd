<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php if (session()->get('role') === 'manager') : ?>
    <h3>Edit Data Cabang Toko</h3>
    <form action="<?= base_url('data-cabang/update/' . $cabang['id']) ?>" method="post">
        <?= csrf_field(); ?>
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group row">
            <label for="id" class="col-sm-2 col-form-label">ID Cabang</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="num" name="num" value="<?= $cabang['num'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nama Cabang</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="name" name="name" value="<?= $cabang['name'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="lokasi" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $cabang['lokasi'] ?>">
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