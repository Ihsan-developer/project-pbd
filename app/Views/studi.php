<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="public/dist/aos.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .active,
        .accordion:hover {
            background-color: #ccc;
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
        }
    </style>
</head>

<body>


    <?php if (session()->get('role') === 'manager') : ?>

        <h3>Test</h3>
        <button class="accordion"><b>1. Menampilkan Seluruh Transaksi pada Bulan Januari</b></button>
        <div class="panel">
            <img src="/img/thumbs/studi1.jpg" alt="studi kasus">
        </div>

        <button class="accordion"><b>2. Menampilkan Jumlah Kue Cupcake yang Terjual</b> </button>
        <div class="panel">
            <img src="/img/thumbs/studi2.jpg" alt="studi kasus">
        </div>

        <button class="accordion"><b>3. Menampilkan Manager untuk Setiap Karyawan</b></button>
        <div class="panel">
            <img src="/img/thumbs/studi3.jpg" alt="studi kasus">
        </div>


        <button class="accordion"><b>4. Menampilkan seluruh karyawan berdasarkan huruf</b></button>
        <div class="panel">
            <img src="/img/thumbs/studi4.jpg" alt="studi kasus">
        </div>


        <button class="accordion"><b>5. Menampilkan Kue dengan Jumlah Stok terbanyak</b></button>
        <div class="panel">
            <img src="/img/thumbs/studi5.jpg" alt="studi kasus">
        </div>


        <button class="accordion"><b>6. Menapilkan Daftar Pembelian Seluruh Pelanggan dengan Nama Kue dan Harga Satuannya</b></button>
        <div class="panel">
            <img src="/img/thumbs/studi6.jpg" alt="studi kasus">
        </div>

        <button class="accordion"><b>7. Menampilkan Harga yang Harus Dibayar Setiap Pelanggan</b></button>
        <div class="panel">
            <img src="/img/thumbs/studi7.jpg" alt="studi kasus">
        </div>

        <button class="accordion"><b>8. Menampilkan Penjualan Kue Setiap Cabang </b></button>
        <div class="panel">
            <img src="/img/thumbs/studi8.jpg" alt="studi kasus">
        </div>

        <button class="accordion"><b>9. Menampilkan Jumlah Kue yang Terjual Setiap Bulannya</b></button>
        <div class="panel">
            <img src="/img/thumbs/studi999.jpg" alt="studi kasus">
            <br>
            <p></p>
            <img src="/img/thumbs/studi99.jpg" alt="studi kasus">
            <br>
            <p></p>
            <img src="/img/thumbs/studi9.jpg" alt="studi kasus">
        </div>
        <button class="accordion"><b>10. Menampilkan Staff yang Bekerja di Cabang Pamulang</b></button>
        <div class="panel">
            <img src="/img/thumbs/studi10.jpg" alt="studi kasus">
        </div>





    <?php else : ?>
        <div class="alert alert-danger" role="alert">
            Anda tidak memiliki akses untuk melihat data
        </div>
    <?php endif; ?>
    <footer class="bg-dark text-white mt-3">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p>Copyright@2020</p>
                </div>
            </div>
        </div>
    </footer>




    <script src="public/script.js"></script>
    <script src="public/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>


</body>

</html>
<?= $this->endSection(); ?>