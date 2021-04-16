<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php if (session()->get('role') === 'manager') : ?>
    <h3>Edit Data Manager</h3>
    <form action="<?= base_url('data-manager/update/' . $manager['id']) ?>" method="post">
        <?= csrf_field(); ?>
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group row">
            <label for="id" class="col-sm-2 col-form-label">ID Manager</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="num" name="num" value="<?= $manager['num'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nama Manager</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="name" name="name" value="<?= $manager['name'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="lokasi" class="col-sm-2 col-form-label">Lokasi Kerja</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $manager['lokasi'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="gaji" class="col-sm-2 col-form-label">Gaji</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="gaji" name="gaji" value="<?= $manager['gaji'] ?>">
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