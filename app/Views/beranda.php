<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- External CSS -->
    <link rel="stylesheet" href="public/style.css">
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- AOS Animation CSS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Title-->
    <title>Project Akhir PPBD</title>
</head>

<body>
    <!-- Start Section Carousel-->
    <section id="carousel" class="carousel">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/thumbs/kue3.jpg" class="d-block w-100" height="650px" width="450px" alt="gambar 1">
                    <!--<div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>-->
                </div>
                <div class="carousel-item">
                    <img src="img/thumbs/kue2.jpg" class="d-block w-100" height="650px" width="450px" alt="gambar 2">
                    <!--<div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>-->
                </div>
                <div class="carousel-item">
                    <img src="img/thumbs/kue1.jpg" class="d-block w-100" height="650px" width="450px" alt="gambar 3">
                    <!--<div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>-->
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </section>
    <!-- End of Section Carousel -->

    <!-- Start Section About Us -->
    <section id="Logo" class="Logo">
        <div class="jumbotron bg-white text-black jumbotron-fluid">
            <div class="container text-center">
                <img src="img/thumbs/logo.png" width="25%" class="rounded-circle img=thumbnail" alt="ini gambar" data-aos="fade-down">
                <h1 class="display-2 text-center" class="Font-weight-bold mb-0" data-aos="fade-up">Lazist Cake</h1>
                <p class="lead" data-aos="fade-up">Kami menyediakan berbagai jenis kue yang manis dan lezat</p>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.jumbotron -->
    </section>

    <section id="tentang-section" class="tentang-section">
        <div class="jumbotron bg-light text-black jumbotrin-fluid">
            <div class="container text-center">
                <div class="row mb-4">
                    <div class="col text-center">
                        <h2 class="section-title" data-aos="fade-down">Tentang Kami</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 text-center" data-aos="fade-right">
                        <p>Perusahaan Kue kami bernama Lazist Cake, yang berarti Kue yang lezat. Sesuai namanya, kami menyediakan kue yang lezat dan manis yang tersedia dalam macam varian dan jenis.</p>
                    </div>
                    <div class="col-md-5 text-center" data-aos="fade-left">
                        <p>Perusahaan Lazist Cake berdiri pada tahun 2020 ketika terjadi pandemi covid-19, yang mendorong sekolompok pemuda untuk menambah pemasukkan agar tetap bisa bertahan hidup.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Section About Us -->

    <!-- Start Section Our Team -->
    <section id="Our Team" class="Portofolio bg-light pb-4">


        <div class="container">
            <div class="row mb-4 pt-4">
                <div class="col text-center">
                    <h2 data-aos="fade-up">Tim Kami</h2>
                </div>

            </div>

            <div class="row mb-4">
                <div class="col-md" data-aos="fade-up">
                    <div class="card">
                        <img src="img/thumbs/person1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="font-weight-bold mb-0">Wildan Akasyah</h5>
                            <p class="card-text">Chief Executive Officer</p>
                        </div>
                    </div>
                </div>

                <div class="col-md" data-aos="fade-down">
                    <div class="card">
                        <img src="img/thumbs/person_2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="font-weight-bold mb-0">Patricia Davis</h5>
                            <p class="card-text">Chief Technology Officer</p>
                        </div>
                    </div>
                </div>

                <div class="col-md" data-aos="fade-up">
                    <div class="card">
                        <img src="img/thumbs/person_3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="font-weight-bold mb-0">Viandra Effendy</h5>
                            <p class="card-text">Chief Financial Officer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4" data-aos="fade-down">
                <div class="col-md">
                    <div class="card">
                        <img src="img/thumbs/person_4.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="font-weight-bold mb-0">John Alex</h5>
                            <p class="card-text">Chief Operating Officer</p>
                        </div>
                    </div>
                </div>

                <div class="col-md" data-aos="fade-up">
                    <div class="card">
                        <img src="img/thumbs/person5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="font-weight-bold mb-0">Dimitri Felix</h5>
                            <p class="card-text">Chief Marketing Officer</p>
                        </div>
                    </div>
                </div>

                <div class="col-md" data-aos="fade-down">
                    <div class="card">
                        <img src="img/thumbs/person_6.png" class="card-img-top" alt="..." height="360px">
                        <div class="card-body">
                            <h5 class="font-weight-bold mb-0">Hiruki Agata</h5>
                            <p class="card-text">Chief Managing Officer</p>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End of Section Our Team-->

    <!-- Start Section Contact-->
    <section id="Contact" class="Contact">
        <div class="container">
            <div class="row pt-4 mb-4">
                <div class="col text-center">
                    <h1 data-aos="fade-up">Hubungi Kami</h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header">Lokasi Kantor Utama Perusahaan Kami</div>
                        <div class="card-body">
                            <h5 class="card-title">Kantor Perusahaan Lazist Cake 1</h5>
                            <p class="card-text">Jl. Karawang no.12 Jakarta, Indonesia 16524 </p>
                        </div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">Instagram : Lazist_Cake</li>
                        <li class="list-group-item">Facebook &nbsp;: LazistCake</li>
                        <li class="list-group-item">Twitter &nbsp; &nbsp; &nbsp;: @LazistCake</li>
                        <li class="list-group-item">Line &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: @LazistCakes</li>
                        <li class="list-group-item">Whatsapp : +62 8163 9473</li>

                    </ul>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <form id="saran" action="<?= base_url('home/saran') ?>" method='post'>
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label>Nomor HP</label>
                            <input type="text" class="form-control" name="no" id="no">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="mail" id="mail">
                        </div>
                        <div class="form-group">
                            <label>Kritik/Saran Pelayanan</label>
                            <input type="text" class="form-control" name="pesan" id="pesan">
                        </div>
                        <button type='Submit' class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>


        </div>
    </section>
    <!-- End of Section Contact-->


    <footer class="bg-dark text-white mt-3">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p>Copyright@2020</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- External JS -->
    <script src="public/script.js"></script>

    <!-- Initiation AOS Animation-->
    <script>
        AOS.init();
    </script>
    <!-- External AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- External Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>



</body>

</html>

<?= $this->endSection(); ?>