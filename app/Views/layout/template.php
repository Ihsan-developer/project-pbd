<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="public/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/dist/aos.css" />

    <title>Project Akhir PBD</title>
</head>

<body">
    <section id="navbar" class="navbar">
        <div class="container">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Toko Kue Lazist Cake</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <ul class="navbar-nav mr-auto">
                        <?php if (session()->get('logged_in') === true) : ?>
                            <?php if (session()->get('role') === 'manager') : ?>
                                <li class="nav-item-active">
                                    <a class="nav-link" href="<?= base_url('home') ?>">Beranda</a>
                                </li>
                                <li class="nav-item-active">
                                    <a class="nav-link" href="<?= base_url('home#tentang-section') ?>">Tentang Kami</a>
                                </li>
                                <li class="nav-item-active">
                                    <a class="nav-link" href="<?= base_url('info-kegiatan') ?>">ERD</a>
                                </li>
                                <li class="nav-item-active">
                                    <a class="nav-link" href="<?= base_url('studi') ?>">Studi Kasus</a>
                                </li>
                                <li class="nav-item-active">
                                    <a class="nav-link" href="<?= base_url('kue') ?>">Data Kue</a>
                                </li>
                                <li class="nav-item-active">
                                    <a class="nav-link" href="<?= base_url('data-pegawai') ?>">Data Karyawan</a>
                                </li>
                                <li class="nav-item-active">
                                    <a class="nav-link" href="<?= base_url('data-manager') ?>">Data Manager</a>
                                </li>
                                <li class="nav-item-active">
                                    <a class="nav-link" href="<?= base_url('data-cabang') ?>">Data Cabang Toko</a>
                                </li>
                                <li class="nav-item-active">
                                    <a class="nav-link" href="<?= base_url('data-pelanggan') ?>">Data Pelanggan</a>
                                </li>
                            <?php elseif (session()->get('role') === 'pelanggan') : ?>
                                <li class="nav-item-active">
                                    <a class="nav-link" href="<?= base_url('home') ?>">Beranda</a>
                                </li>
                                <li class="nav-item-active">
                                    <a class="nav-link" href="<?= base_url('home#tentang-section') ?>">Tentang Kami</a>
                                </li>
                                <li class="nav-item-active">
                                    <a class="nav-link" href="<?= base_url('menu') ?>">Menu Kami</a>
                                </li>
                                <li class="nav-item-active">
                                    <a class="nav-link" href="<?= base_url('ular') ?>">Game Ular by Ishamashi</a>
                                </li>
                            <?php else : ?>
                                <li class="nav-item-active">
                                    <a class="nav-link" href="<?= base_url('home') ?>">Beranda</a>
                                </li>
                                <li class="nav-item-active">
                                    <a class="nav-link" href="#tentang-section">Tentang Kami</a>
                                </li>
                            <?php endif ?>
                        <?php else : ?>
                            <li class="nav-item-active">
                                <a class="nav-link" href="<?= base_url('home') ?>">Beranda</a>
                            </li>
                            <li class="nav-item-active">
                                <a class="nav-link" href="#tentang-section">Tentang Kami</a>
                            </li>
                        <?php endif ?>
                    </ul>
                    <ul class="navbar-nav">
                        <?php if (session()->get('logged_in') === true) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('logout') ?>">Keluar</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('login') ?>">Masuk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('registrasi') ?>">Daftar</a>
                            </li>
                        <?php endif ?>
                    </ul>
                </div>
        </div>
        </nav>

    </section>


    <!-- Content -->
    <?= $this->renderSection('content') ?>

    <!-- End of Content-->
    <script src="public/dist/aos.js"></script>
    <script src="public/script.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <?= $this->renderSection('content') ?>
    </body>

</html>