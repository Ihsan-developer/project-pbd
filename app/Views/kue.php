<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php if (session()->get('role') === 'manager') : ?>
    <h3>test</h3>
    <a href="<?= base_url('kue/tambah') ?>" class="btn btn-sm btn-primary mb-2" style="max-width: 60rem; text-align: center; position: middle; vertical-align: middle; 
	margin-top: 10px;
	margin-left: 232px;">Tambah Menu Kue</a>
    <div class="row">
        <div class="col"> </div>
        <div class="col-8">
            <table class="table table-sm table-hover" style="max-width: 60rem; text-align: center;">
                <thead class="thead-dark">
                    <tr>
                        <th>Kode Kue</th>
                        <th>Nama Kue</th>
                        <th>Jumlah Stok</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kue as $s) : ?>
                        <tr class="table-light">
                            <td><?= $s['kode'] ?></td>
                            <td><?= $s['nama'] ?></td>
                            <td><?= $s['jumlah'] ?></td>
                            <td><?= $s['harga'] ?></td>

                            <td>
                                <a href="<?= base_url('kue/edit/' . $s['id']) ?>" class='btn btn-warning'>Edit</a>
                                <form action="<?= base_url('kue/delete/' . $s['id']) ?>" method="POST" class="d-inline">
                                    <?= csrf_field() ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="confirm('Apakah anda yakin ? ')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col"></div>
    </div>
<?php else : ?>
    <div class="alert alert-danger" role="alert">
        Anda tidak memiliki akses untuk melihat kue
    </div>
<?php endif; ?>
<?= $this->endSection(); ?>