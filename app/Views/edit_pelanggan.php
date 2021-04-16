<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php if (session()->get('role') === 'manager') : ?>
    <h3>Edit Data Pelanggan</h3>
    <form action="<?= base_url('data-pelanggan/update/' . $pelanggan['id']) ?>" method="post">
        <?= csrf_field(); ?>
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group row">
            <label for="num" class="col-sm-2 col-form-label">Kode Pesanan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="num" name="num" value="<?= $pelanggan['num'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nama Pelanggan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="name" name="name" value="<?= $pelanggan['name'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="kue" class="col-sm-2 col-form-label">Kue Pesanan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="kue" name="kue" value="<?= $pelanggan['kue'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Kue</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $pelanggan['jumlah'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="cabang" class="col-sm-2 col-form-label">Nama Cabang</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="cabang" name="cabang" value="<?= $pelanggan['cabang'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl" class="col-sm-2 col-form-label">Tanggal Pemesanan</label>
            <div class="col-sm-4">
                <input type="date" class="form-control" id="tgl" name="tgl" value="<?= $pelanggan['tgl'] ?>">
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