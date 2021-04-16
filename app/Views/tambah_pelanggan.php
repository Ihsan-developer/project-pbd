<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php if (session()->get('role') === 'manager') : ?>
    <h3>Input Data Pelanggan</h3>
    <form action="<?= base_url('data-pelanggan/simpan') ?>" method="post">
        <?= csrf_field(); ?>
        <div class="form-group row">
            <label for="num" class="col-sm-2 col-form-label">Kode Pesanan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="num" name="num">
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nama Pelanggan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="form-group row">
            <label for="kue" class="col-sm-2 col-form-label">Kue Pesanan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="kue" name="kue">
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Kue</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="jumlah" name="jumlah">
            </div>
        </div>
        <div class="form-group row">
            <label for="cabang" class="col-sm-2 col-form-label">Nama Cabang</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="cabang" name="cabang">
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl" class="col-sm-2 col-form-label">Tanggal Pemesanan</label>
            <div class="col-sm-4">
                <input type="date" class="form-control" id="tgl" name="tgl">
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