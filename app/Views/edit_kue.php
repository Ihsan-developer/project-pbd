<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php if (session()->get('role') === 'manager') : ?>
    <h3>Edit Menu Kue</h3>
    <form action="<?= base_url('kue/update/' . $kue['id']) ?>" method="post">
        <?= csrf_field(); ?>
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group row">
            <label for="kode" class="col-sm-2 col-form-label">Kode Kue</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="kode" name="kode" value="<?= $kue['kode'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Kue</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $kue['nama'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Stok</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $kue['jumlah'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="harga" name="harga" value="<?= $kue['harga'] ?>">
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
        Anda tidak memiliki akses untuk melihat kue
    </div>
<?php endif; ?>

<?= $this->endSection(); ?>