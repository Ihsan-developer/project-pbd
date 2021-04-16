<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php if (session()->get('role') === 'manager') : ?>
    <h3>test</h3>
    <a href="<?= base_url('data-pegawai/tambah') ?>" class="btn btn-sm btn-primary mb-2" style="max-width: 60rem; text-align: center; position: middle; vertical-align: middle; 
	margin-top: 10px;
	margin-left: 232px;">Tambah Data Karyawan</a>
    <div class="row">
        <div class="col"> </div>
        <div class="col-8">
            <table class="table table-sm table-hover" style="max-width: 60rem; text-align: center;">
                <thead class="thead-dark">
                    <tr>
                        <th>ID Manager</th>
                        <th>Nama Manager</th>
                        <th>Lokasi Kerja</th>
                        <th>Gaji</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pegawai as $s) : ?>
                        <tr class="table-light">
                            <td><?= $s['num'] ?></td>
                            <td><?= $s['name'] ?></td>
                            <td><?= $s['lokasi'] ?></td>
                            <td><?= $s['gaji'] ?></td>

                            <td>
                                <a href="<?= base_url('data-pegawai/edit/' . $s['id']) ?>" class='btn btn-warning'>Edit</a>
                                <form action="<?= base_url('data-pegawai/delete/' . $s['id']) ?>" method="POST" class="d-inline">
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
        Anda tidak memiliki akses untuk melihat data
    </div>
<?php endif; ?>
<?= $this->endSection(); ?>