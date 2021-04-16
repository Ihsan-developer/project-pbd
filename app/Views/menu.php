<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<html>

<head>

</head>
<link rel="stylesheet" href="public/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="public/dist/aos.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">

<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Karma", sans-serif
    }

    .w3-bar-block .w3-bar-item {
        padding: 200px
    }
</style>

<body>

    <section id="Menu-Kue-kami" class="Menu">

        <section id="Logo" class="Logo">
            <div class="jumbotron bg-white text-black jumbotron-fluid">
                <div class="container text-center">
                    <img src="img/thumbs/logo.png" width="25%" class="rounded-circle img=thumbnail" alt="ini gambar" data-aos="fade-down">
                    <h1 class="display-2 text-center" class="Font-weight-bold mb-0" data-aos="fade-up">Lazist Cake</h1>

                </div>
                <!-- /.container -->
            </div>
            <!-- /.jumbotron -->
        </section>

        <div class="container">
            <div class="row mb-4 pt-4">
                <div class="col text-center">
                    <h2 data-aos="fade-up">Menu Kue Kami</h2>
                </div>

            </div>

            <div class="row mb-4">
                <div class="col-md" data-aos="fade-down">
                    <div class="card">
                        <img src="img/thumbs/tiramisu.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="font-weight-bold mb-0" title="center">Tiramisu</h5>
                            <p class="card-text">Rp.30.000</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter-1">
                                Tambah ke keranjang
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md" data-aos="fade-down">
                    <div class="card">
                        <img src="img/thumbs/cupcake.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="font-weight-bold mb-0">Cupcake</h5>
                            <p class="card-text">Rp.15.000</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter-2">
                                Tambah ke keranjang
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md" data-aos="fade-down">
                    <div class="card">
                        <img src="img/thumbs/apple_pie.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="font-weight-bold mb-0">Apple Pie</h5>
                            <p class="card-text">Rp.20.000</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter-3">
                                Tambah ke keranjang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4" data-aos="fade-down">
                <div class="col-md">
                    <div class="card">
                        <img src="img/thumbs/kue_coklat.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="font-weight-bold mb-0">Chocolate Cake</h5>
                            <p class="card-text">Rp.25.000</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter-4">
                                Tambah ke keranjang
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md" data-aos="fade-down">
                    <div class="card">
                        <img src="img/thumbs/cookies.jpg" style="height: 443px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="font-weight-bold mb-0">Cookies</h5>
                            <p class="card-text">Rp.14.000</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter-5">
                                Tambah ke keranjang
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md" data-aos="fade-down">
                    <div class="card">
                        <img src="img/thumbs/sus.jpg" style="height: 443px;" class="card-img-top" alt="..." height="360px">
                        <div class="card-body">
                            <h5 class="font-weight-bold mb-0">Cream Cake</h5>
                            <p class="card-text">Rp.10.000</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter-6">
                                Tambah ke keranjang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <div class="modal fade" id="exampleModalCenter-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tiramisu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3>Description</h3>
                    Kue dengan lapisan krim tiramisu dan stik cokelat
                    <!--DESKRIPSI KUE-->
                    <div>
                        <p>Rp.30.000</p>
                        <!--GANTI SAMA HARGANYA-->
                        <input type="number" placeholder="Jumlah Pesanan" id="pesanan1" onkeyup="jumlah1();">
                    </div>
                    <div>
                        <p id="total">Total Harga Rp </p>
                        <div>
                            <input type="text" id="hasil1" />
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="alert('Pembelian Sukses')">Buy now</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Cupcake</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3>Description</h3>
                    Cupcake coklat yang diberi krim vanila diatasnya sebagai penambah rasa
                    <!--DESKRIPSI KUE-->
                    <div>
                        <p>Rp.15.000</p>
                        <!--GANTI SAMA HARGANYA-->
                        <input type="number" placeholder="Jumlah Pesanan" id="pesanan2" onkeyup="jumlah2();">
                    </div>
                    <div>
                        <p id="total">Total Harga Rp </p>
                        <div>
                            <input type="text" id="hasil2" />
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="alert('Pembelian Sukses')">Buy now</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Apple Pie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Pie apel yang memiliki aroma apel yang kuat dan rasa apelnya yang sangat lezat. Cocok untuk dimakan bersama keluarga atau teman
                    <!--DESKRIPSI KUE-->
                    <div>
                        <p>Rp.20.000</p>
                        <!--GANTI SAMA HARGANYA-->
                        <input type="number" placeholder="Jumlah Pesanan" id="pesanan3" onkeyup="jumlah3();">
                    </div>
                    <div>
                        <p id="total">Total Harga Rp </p>
                        <div>
                            <input type="text" id="hasil3" />
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="alert('Pembelian Sukses')">Buy now</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Chocolate Cake</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Kue ini memiliki lapisan coklat di setiap layer nya dan diberi krim coklat yang lezat
                    <!--DESKRIPSI KUE-->
                    <div>
                        <p>Rp.25.000</p>
                        <!--GANTI SAMA HARGANYA-->
                        <input type="number" placeholder="Jumlah Pesanan" id="pesanan4" onkeyup="jumlah4();">
                    </div>
                    <div>
                        <p id="total">Total Harga Rp </p>
                        <div>
                            <input type="text" id="hasil4" />
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="alert('Pembelian Sukses')">Buy now</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter-5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Cookies</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Kukis adalah makanan yang dipanggang atau dimasak yang biasanya kecil, datar, dan manis. Kukis biasanya terdiri dari tepung, gula, dan beberapa jenis minyak atau lemak
                    <!--DESKRIPSI KUE-->
                    <div>
                        <p>Rp.14.000</p>
                        <!--GANTI SAMA HARGANYA-->
                        <input type="number" placeholder="Jumlah Pesanan" id="pesanan5" onkeyup="jumlah5();">
                    </div>
                    <div>
                        <p id="total">Total Harga Rp </p>
                        <div>
                            <input type="text" id="hasil5" />
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="alert('Pembelian Sukses')">Buy now</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter-6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Cream Cake</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Kue cream adalah kue berbentuk bundar dengan rongga berisi cream custard
                    <!--DESKRIPSI KUE-->
                    <div>
                        <p>Rp.10.000</p>
                        <!--GANTI SAMA HARGANYA-->
                        <input type="number" placeholder="Jumlah Pesanan" id="pesanan6" onkeyup="jumlah6();">
                    </div>
                    <div>
                        <p id="total">Total Harga Rp </p>
                        <div>
                            <input type="text" id="hasil6" />
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="alert('Pembelian Sukses')">Buy now</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white mt-3">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p>Copyright@2020</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function jumlah1() {
            var x = document.getElementById('pesanan1').value;
            var y = 30000; //SAMAIN SAMA HARGANYA
            var result = parseFloat(x) * parseFloat(y);
            if (!isNaN(result)) {
                document.getElementById('hasil1').value = result;
            }
        }
    </script>
    <script>
        function jumlah2() {
            var x = document.getElementById('pesanan2').value;
            var y = 15000; //SAMAIN SAMA HARGANYA
            var result = parseFloat(x) * parseFloat(y);
            if (!isNaN(result)) {
                document.getElementById('hasil2').value = result;
            }
        }
    </script>
    <script>
        function jumlah3() {
            var x = document.getElementById('pesanan3').value;
            var y = 20000; //SAMAIN SAMA HARGANYA
            var result = parseFloat(x) * parseFloat(y);
            if (!isNaN(result)) {
                document.getElementById('hasil3').value = result;
            }
        }
    </script>
    <script>
        function jumlah4() {
            var x = document.getElementById('pesanan4').value;
            var y = 25000; //SAMAIN SAMA HARGANYA
            var result = parseFloat(x) * parseFloat(y);
            if (!isNaN(result)) {
                document.getElementById('hasil4').value = result;
            }
        }
    </script>
    <script>
        function jumlah5() {
            var x = document.getElementById('pesanan5').value;
            var y = 14000; //SAMAIN SAMA HARGANYA
            var result = parseFloat(x) * parseFloat(y);
            if (!isNaN(result)) {
                document.getElementById('hasil5').value = result;
            }
        }
    </script>
    <script>
        function jumlah6() {
            var x = document.getElementById('pesanan6').value;
            var y = 10000; //SAMAIN SAMA HARGANYA
            var result = parseFloat(x) * parseFloat(y);
            if (!isNaN(result)) {
                document.getElementById('hasil6').value = result;
            }
        }
    </script>

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

</body>


</html>



<?= $this->endSection(); ?>