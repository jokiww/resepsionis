<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="CodeHim" />
    <title>Ubah Data Tamu</title>
    <!-- animate.css-->
    <link href="../../assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- Load Screen -->
    <link href="../../assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="../../assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="../../assets/custom/css/fables-icons.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet"> -->
    <!-- FANCY BOX -->
    <link href="../../assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet">
    <!-- OWL CAROUSEL  -->
    <link href="../../assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="../../assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- Timeline -->
    <link rel="stylesheet" href="assets/vendor/timeline/timeline.css">
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="../../assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="../../assets/custom/css/custom-responsive.css" rel="stylesheet">
    <!-- SWEET ALERT -->
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Javascript -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>


    <!-- Style CSS -->
    <!-- <link rel="stylesheet" href="./assets/custom/css/style.css" /> -->
    <!-- Demo CSS (No need to include it into your project) -->
    <link rel="stylesheet" href="../../assets/custom/css/demo.css" />
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
</head>

<body>

    <!-- function ubah -->
    <?php
    // session_start();

    // if (!isset($_SESSION["login"])) {
    //     header("Location: ../../login.php");
    //     exit;
    // }
    require '../../../resepsionis/function/ftubah.php';
    ?>

    <div class=" search-section">
        <a class="close-search" href="#"></a>
        <div class="d-flex justify-content-center align-items-center h-100">
            <form method="post" action="#" class="w-50">
                <div class="row">
                    <div class="col-10">
                        <input type="search" value="" class="form-control palce bg-transparent border-0 search-input" placeholder="Search Here ..." />
                    </div>
                    <div class="col-2 mt-3">
                        <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i> </button>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <!-- Loading Screen -->
    <div id="ju-loading-screen">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>

    <!-- Start Top Header -->
    <div class="fables-forth-background-color fables-top-header-signin">
        <div class="container">
            <div class="row" id="top-row">
                <div class="col-12 col-sm-2 col-lg-5">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle border-0 bg-transparent font-13 lang-dropdown-btn pl-0" type="button" id="dropdownLangButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            language
                        </button>
                        <div class="dropdown-menu p-0 fables-forth-background-color rounded-0 m-0 border-0 lang-dropdown" aria-labelledby="dropdownLangButton">
                            <a class="dropdown-item white-color font-13 fables-second-hover-color" href="#">
                                <img src="../../assets/custom/images/england.png" alt="england flag" class="mr-1"> English</a>
                            <a class="dropdown-item white-color font-13 fables-second-hover-color" href="#">
                                <img src="../../assets/custom/images/France.png" alt="england flag" class="mr-1"> French</a>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-5 col-lg-4 text-right">
                    <p class="fables-third-text-color font-13"><span class="fables-iconphone"></span> Phone : (888) 6000 6000 - (888) 6000 6000</p>
                </div>
                <div class="col-12 col-sm-5 col-lg-3 text-right">
                    <p class="fables-third-text-color font-13"><span class="fables-iconemail"></span> Email: Design@domain.com</p>
                </div>

            </div>
        </div>
    </div>

    <!-- /End Top Header -->

    <!-- Start Fables Navigation -->
    <div class="fables-navigation fables-main-background-color py-3 py-lg-0">
        <div class="container">
            <div class="row">
                <div class="mx-auto d-block">
                    <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">

                        <a class="navbar-brand pl-0" href="index.php"><img src="../../assets/custom/images/fables-logo.png" alt="Fables Template" class="fables-logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fables-iconmenu-icon text-white font-16"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="fablesNavDropdown">
                            <!-- <ul class="navbar-nav mx-auto fables-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Home
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav1">
                                        <li><a class="dropdown-item" href="home1.html">Home 1</a></li>
                                        <li><a class="dropdown-item" href="home2.html">Home 2</a></li>
                                        <li><a class="dropdown-item" href="home3.html">Home 3</a></li>
                                        <li><a class="dropdown-item" href="home4.html">Home 4</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Features
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav2">

                                        <li><a class="dropdown-item dropdown-toggle" href="#">Headers</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Header 1</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="header1-transparent.html">Header 1 Transparent</a></li>
                                                        <li><a class="dropdown-item" href="header1-light.html">Header 1 Light</a></li>
                                                        <li><a class="dropdown-item" href="header1-dark.html">Header 1 Dark</a></li>
                                                        <li><a class="dropdown-item" href="header-megamenu.html">Header Mega menu</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Header 2</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="header2-transparent.html">Header 2 Transparent</a></li>
                                                        <li><a class="dropdown-item" href="header2-light.html">Header 2 Light</a></li>
                                                        <li><a class="dropdown-item" href="header2-dark.html">Header 2 Dark</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Header 3</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="header3-transparent.html">Header 3 Transparent</a></li>
                                                        <li><a class="dropdown-item" href="header3-light.html">Header 3 Light</a></li>
                                                        <li><a class="dropdown-item" href="header3-dark.html">Header 3 Dark</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Header 4</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="header4-transparent.html">Header 4 Transparent</a></li>
                                                        <li><a class="dropdown-item" href="header4-light.html">Header 4 Light</a></li>
                                                        <li><a class="dropdown-item" href="header4-dark.html">Header 4 Dark</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Header 5</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="header5-transparent.html">Header 5 Transparent</a></li>
                                                        <li><a class="dropdown-item" href="header5-light.html">Header 5 Light</a></li>
                                                        <li><a class="dropdown-item" href="header5-dark.html">Header 5 Dark</a></li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Footers</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Footer 1</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="footer1-bg-img.html">Footer 1 Transparent</a></li>
                                                        <li><a class="dropdown-item" href="Footer1-light.html">Footer 1 Light</a></li>
                                                        <li><a class="dropdown-item" href="Footer1-dark.html">Footer 1 Dark</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Footer 2</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="footer2-bg-img.html">Footer 2 Transparent</a></li>
                                                        <li><a class="dropdown-item" href="footer2-light.html">Footer 2 Light</a></li>
                                                        <li><a class="dropdown-item" href="footer2-dark.html">Footer 2 Dark</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Footer 3</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="footer3-bg-img.html">Footer 3 Transparent</a></li>
                                                        <li><a class="dropdown-item" href="footer3-light.html">Footer 3 Light</a></li>
                                                        <li><a class="dropdown-item" href="footer3-dark.html">Footer 3 Dark</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Footer 4</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="footer4-bg-img.html">Footer 4 Transparent</a></li>
                                                        <li><a class="dropdown-item" href="footer4-light.html">Footer 4 Light</a></li>
                                                        <li><a class="dropdown-item" href="footer4-dark.html">Footer 4 Dark</a></li>
                                                    </ul>
                                                </li>


                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="team.html">Team Members</a></li>
                                        <li><a class="dropdown-item" href="pricing-table.html">Pricing Table</a></li>
                                        <li><a class="dropdown-item" href="testimonials.html">testimonials</a></li>
                                        <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                        <li><a class="dropdown-item" href="counters.html">Counters</a></li>
                                        <li><a class="dropdown-item" href="image-hover-effects.html">Image Hover Effects</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        About
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav3">
                                        <li><a class="dropdown-item" href="about1.html">About 1</a></li>
                                        <li><a class="dropdown-item" href="about2.html">About 2</a></li>
                                        <li><a class="dropdown-item" href="about3.html">About 3</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Store
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav4">
                                        <li><a class="dropdown-item" href="store_grid_list.html">Product Category </a></li>
                                        <li><a class="dropdown-item" href="store_single.html">Product Single</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav5">
                                        <li><a class="dropdown-item" href="blog-cat1.html">Blog Cat 1</a></li>
                                        <li><a class="dropdown-item" href="blog-cat2.html">Blog Cat 2</a></li>
                                        <li><a class="dropdown-item" href="blog-cat3.html">Blog Cat 3</a></li>
                                        <li><a class="dropdown-item" href="blog-cat-masonry.html">Blog Cat Masonry</a></li>
                                        <li><a class="dropdown-item" href="blog-details1.html">Blog Details 1</a></li>
                                        <li><a class="dropdown-item" href="blog-details2.html">Blog Details 2</a></li>
                                        <li><a class="dropdown-item" href="blog-details3.html">Blog Details 3</a></li>
                                        <li><a class="dropdown-item" href="blog-single-img.html">Blog Single image</a></li>
                                        <li><a class="dropdown-item" href="blog-single-slider.html">Blog Single Slider</a></li>
                                        <li><a class="dropdown-item" href="blog-single-video.html">Blog Single Video</a></li>
                                        <li><a class="dropdown-item" href="blog-timeLine.html">Blog Timeline</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pages
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav6">
                                        <li><a class="dropdown-item" href="404.html">404</a></li>
                                        <li><a class="dropdown-item" href="comming-soon.html">Comming Soon</a></li>
                                        <li><a class="dropdown-item" href="gallery.html">Gallery</a></li>
                                        <li><a class="dropdown-item" href="gallery-filter.html">Gallery Filter</a></li>
                                        <li><a class="dropdown-item" href="gallery-filter-masonry.html">Gallery Filter Masonry</a></li>
                                        <li><a class="dropdown-item" href="gallery-history.html">Gallery History</a></li>
                                        <li><a class="dropdown-item" href="gallery-history2.html">Gallery History 2</a></li>
                                        <li><a class="dropdown-item" href="gallery-single.html">Gallery Single</a></li>
                                        <li><a class="dropdown-item" href="gallery-timeline.html">Gallery Timeline </a></li>
                                        <li><a class="dropdown-item" href="gallery-timeline2.html">Gallery Timeline 2</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Contact Us
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav7">
                                        <li><a class="dropdown-item" href="contactus1.html">Contact Us 1</a></li>
                                        <li><a class="dropdown-item" href="contactus2.html">Contact Us 2</a></li>
                                        <li><a class="dropdown-item" href="contactus3.html">Contact Us 3</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                    </nav>
                </div>
                <!-- <div class="col-12 col-md-2 col-lg-3 pr-md-0 icons-header-mobile">

                    <div class="fables-header-icons">
                        <div class="dropdown">
                            <a href="#_" class="fables-third-text-color dropdown-toggle right px-3 px-md-2 px-lg-4 fables-second-hover-color top-header-link max-line-height position-relative" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fables-iconcart-icon font-20"></span>
                                <span class="fables-cart-number fables-second-background-color text-center">3</span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="p-3 cart-block">
                                    <p class="fables-second-text-color semi-font mb-4 font-17">(2) Items in my cart</p>
                                    <div class="row mx-0 mb-3">
                                        <div class="col-4 p-0">
                                            <a href="#"><img src="assets/custom/images/sml1.jpg" alt="" class="w-100"></a>
                                        </div>
                                        <div class="col-8">
                                            <h2><a href="#" class="fables-main-text-color font-13 d-block fables-main-hover-color">LUIS LEATHER DRIVING</a></h2>
                                            <p class="fables-second-text-color font-weight-bold">$ 100.00</p>
                                            <p class="fables-forth-text-color">QTY : 1</p>
                                        </div>
                                    </div>
                                    <div class="row mx-0 mb-3">
                                        <div class="col-4 p-0">
                                            <a href="#"><img src="assets/custom/images/sml1.jpg" alt="" class="w-100"></a>
                                        </div>
                                        <div class="col-8">
                                            <h2><a href="#" class="fables-main-text-color font-13 d-block fables-main-hover-color">LUIS LEATHER DRIVING</a></h2>
                                            <p class="fables-second-text-color font-weight-bold">$ 100.00</p>
                                            <p class="fables-forth-text-color">QTY : 1</p>
                                        </div>
                                    </div>
                                    <span class="font-16 semi-font fables-main-text-color">TOTAL</span>
                                    <span class="font-14 semi-font fables-second-text-color float-right">$200.00</span>
                                    <hr>
                                    <div class="text-center">
                                        <a href="#" class="fables-second-background-color fables-btn-rounded  text-center white-color py-2 px-3 font-14 bg-hover-transparent border fables-second-border-color fables-second-hover-color">View my cart</a>
                                        <a href="#" class="fables-second-text-color border fables-second-border-color fables-btn-rounded text-center white-color p-2 px-4 font-14 fables-second-hover-background-color">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="open-search fables-third-text-color right  top-header-link px-3 px-md-2 px-lg-4 fables-second-hover-color border-0 max-line-height">
                            <span class="fables-iconsearch-icon"></span>
                        </a>
                        <a href="signin.html" class="fables-third-text-color fables-second-hover-color font-13 top-header-link px-3 px-md-2 px-lg-4 max-line-height"><span class="fables-iconuser"></span></a>



                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- /End Fables Navigation -->

    <!-- Start Header -->
    <div class="fables-header fables-after-overlay">
        <div class="container">
            <h2 class="fables-page-title fables-second-border-color">Ubah Data Surat</h2>
        </div>
    </div>
    <!-- /End Header -->

    <!-- Start Breadcrumbs -->
    <div class="fables-light-background-color">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="fables-breadcrumb breadcrumb px-0 py-3">
                    <li class="breadcrumb-item"><a href="resepsionis.php" class="fables-second-text-color">Access Receptionist</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ubah Data Surat</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /End Breadcrumbs -->



    <!--$%adsense%$-->
    <main class="cd__main">
        <!-- Start DEMO HTML (Use the following code into your project)-->

        <form method="post">

            <div class="mb-3">
                <label for="no_kunjungan" class="form-label"><b>No.Kunjungan :</b></label>
                <input type="text" class="form-control" name="no_kunjungan" id="no_kunjungan" required value="<?= $tamu["no_kunjungan"] ?>">
            </div>

            <div class="mb-3">
                <label for="atas_nama" class="form-label"><b>Nama Pengunjung :</b></label>
                <input type="text" class="form-control" name="atas_nama" id="atas_nama" required value="<?= $tamu["atas_nama"] ?>">
            </div>

            <div class="mb-3">
                <label for="jekel" class="form-label"><b>Jenis Kelamin :</b></label><br>
                <select class="form-control" name="jekel" id="jekel" required placeholder="Silahkan Pilih" required>
                    <option hidden>Jenis Kelamin...</option>
                    <option value="L" <?php if ($tamu['jekel'] == 'L') echo 'selected' ?>>1. Laki - Laki</option>
                    <option value="P" <?php if ($tamu['jekel'] == 'P') echo 'selected' ?>>2. Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="pihak_instansi" class="form-label"><b>Pihak Instansi Pengirim :</b></label>
                <input type="text" class="form-control" name="pihak_instansi" id="pihak_instansi" required value="<?= $tamu["pihak_instansi"] ?>">
            </div>

            <div class="mb-3">
                <label for="alamat_instansi" class="form-label"><b>Alamat Instansi :</b></label>
                <input type="text" class="form-control" name="alamat_instansi" id="alamat_instansi" required value="<?= $tamu["alamat_instansi"] ?>">
            </div>

            <div class="mb-3">
                <label for="tgl" class="form-label"><b>Tanggal Penerimaan :</b></label>
                <input type="date" class="form-control" name="tgl" id="tgl" required value="<?= $tamu["tgl"] ?>">
            </div>

            <div class="mb-3">
                <label for="jaminan_identitas" class="form-label"><b>Jaminan Identitas :</b></label><br>
                <select class="form-control" name="jaminan_identitas" id="jaminan_identitas" required placeholder="Silahkan Pilih" required>
                    <option hidden>Jaminan Identitas...</option>
                    <option value="SIM" <?php if ($tamu['jaminan_identitas'] == 'SIM') echo 'selected' ?>>1. SIM</option>
                    <option value="KTP" <?php if ($tamu['jaminan_identitas'] == 'KTP') echo 'selected' ?>>2. KTP</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="jenis_kepentingan" class="form-label"><b>Jenis Kepentingan :</b></label><br>
                <select class="form-control" name="jenis_kepentingan" id="jenis_kepentingan" required placeholder="Silahkan Pilih" required>
                    <option hidden>Jenis Kepentingan...</option>
                    <option value="urgent" <?php if ($tamu['jenis_kepentingan'] == 'urgent') echo 'selected' ?>>1. Urgent</option>
                    <option value="tidak urgent" <?php if ($tamu['jenis_kepentingan'] == 'tidak urgent') echo 'selected' ?>>2. Tidak Urgent</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tujuan_kedatangan" class="form-label"><b>Tujuan Kunjungan :</b></label><br>
                <select class="form-control" name="tujuan_kedatangan" id="tujuan_kedatangan" required placeholder="Silahkan Pilih" required>
                    <option hidden>Tujuan Kunjungan...</option>
                    <option value="Penyerahan Dokumen" <?php if ($tamu['tujuan_kedatangan'] == 'Penyerahan Dokumen') echo 'selected' ?>>1. Penyerahan Dokumen</option>
                    <option value="Rapat Kerja Sama" <?php if ($tamu['tujuan_kedatangan'] == 'Rapat Kerja Sama') echo 'selected' ?>>2. Rapat Kerja Sama</option>
                    <option value="Pengajuan Kerja Sama" <?php if ($tamu['tujuan_kedatangan'] == 'Pengajuan Kerja Sama') echo 'selected' ?>>3. Pengajuan Kerja Sama</option>
                    <option value="Pelaksanaan Konseling" <?php if ($tamu['tujuan_kedatangan'] == 'Pelaksanaan Konseling') echo 'selected' ?>>4. Pelaksanaan Konseling</option>
                    <option value="Tidak Dapat Disampaikan" <?php if ($tamu['tujuan_kedatangan'] == 'Tidak Dapat Disampaikan') echo 'selected' ?>>5. Tidak Dapat Disampaikan <i>(informasi objektif)</i></option>
                </select>
            </div>

            <div class="mb-3">
                <label for="notes_kedatangan" class="form-label"><b>Notes Kunjungan :</b></label>
                <input type="text" class="form-control" name="notes_kedatangan" id="notes_kedatangan" required value="<?= $tamu["notes_kedatangan"] ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </main>





    <!-- Start Footer 2 Background Image  -->
    <div class="fables-footer-image fables-after-overlay white-color py-4 py-lg-5 bg-rules">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-2 mb-5 text-center">
                    <h2 class="font-30 semi-font mb-5">Newsletter</h2>
                    <form class="form-inline position-relative">
                        <div class="form-group fables-subscribe-formgroup">
                            <input type="email" class="form-control fables-subscribe-input fables-btn-rouned" placeholder="Your Email">
                        </div>
                        <button type="submit" class="btn fables-second-background-color fables-btn-rouned fables-subscribe-btn">Subscribe</button>
                    </form>

                </div>
                <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                    <a href="#" class="fables-second-border-color border-bottom pb-3 d-block mb-3 mt-minus-13"><img src="../../assets/custom/images/fables-logo.png" alt="fables template"></a>
                    <p class="font-15 fables-third-text-color">
                        This Company Profile is compiled with the aim of providing information and insight to the parties concerned, especially the Users of Consulting Services, both in the government and private environment, regarding: company data, organization and management of the company, and proofs of the legality of the Company.
                        <br><br>
                        In dealing with any job or activity, CV. TRI PILAR PRINCIPAL CONSULTANT as a Consulting Service Provider will provide the best service to the Users of Consulting Services. For that CV.
                    </p>

                </div>

                <div class="col-12 col-sm-6 col-lg-4" id="test">
                    <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3">Contact us</h2>
                    <div class="my-3">
                        <h4 class="font-16 semi-font"><span class="fables-iconmap-icon fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> Address Information</h4>
                        <p class="font-14 fables-fifth-text-color mt-2 ml-4">level13, 2Elizabeth St, Melbourne, Victor 2000</p>
                    </div>
                    <div class="my-3">
                        <h4 class="font-16 semi-font"><span class="fables-iconphone fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> Call Now </h4>
                        <p class="font-14 fables-fifth-text-color mt-2 ml-4">+333 111 111 000</p>
                    </div>
                    <div class="my-3">
                        <h4 class="font-16 semi-font"><span class="fables-iconemail fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> Mail </h4>
                        <p class="font-14 fables-fifth-text-color mt-2 ml-4">adminsupport@website.com</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3 mb-3">EXPLORE OUR SITE</h2>
                    <ul class="nav fables-footer-links">
                        <li><a href="../../about.php">Profil</a></li>
                        <li><a href="../../contactus1.php">Contact Us</a></li>
                        <li><a href="../../blog-cat.php">Blog</a></li>
                        <li><a href="../../produk.php">Store</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </div>

    <div class="copyright fables-main-background-color mt-0 border-0 white-color">
        <ul class="nav fables-footer-social-links just-center fables-light-footer-links">
            <li><a href="#" target="_blank"><i class="fab fa-google-plus-square"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-pinterest-square"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
        </ul>
        <p class="mb-0">Copyright © Fables 2018. All rights reserved.</p>

    </div>

    <!-- /End Footer 2 Background Image -->


    <script src="../../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../../assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
    <script src="../../assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
    <script src="../../assets/vendor/WOW-master/dist/wow.min.js"></script>
    <script src="../../assets/vendor/popper/popper.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
    <script src="../../assets/vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../assets/vendor/timeline/jquery.timelify.js"></script>
    <script src="../../assets/custom/js/custom.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <!-- Data Table JS -->
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <!-- Script JS -->
    <script>
        new DataTable('#example');
    </script>
    <!--$%analytics%$-->
</body>

</html>