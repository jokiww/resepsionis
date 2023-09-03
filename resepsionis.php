

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">


    <title> Access Receptionist </title>
    <!-- animate.css-->
    <link href="assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- Load Screen -->
    <link href="assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="assets/custom/css/fables-icons.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet">
    <!-- FANCY BOX -->
    <link href="assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet">
    <!-- OWL CAROUSEL  -->
    <link href="assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- Timeline -->
    <link rel="stylesheet" href="assets/vendor/timeline/timeline.css">
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="assets/custom/css/custom-responsive.css" rel="stylesheet">
    <!-- SWEET ALERT -->
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Javascript -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>


</head>

<body>
<?php 
session_start();

if (!isset($_SESSION['login'])) {
    echo "
    <script language='JavaScript'>
    swal('Sorry!', 'Silahkan Login Terlebih Dahulu.', 'error').then(function(){ 
        window.location.href = 'login.php';
       }
    );    
</script>";
exit;
}


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
                                <img src="assets/custom/images/england.png" alt="england flag" class="mr-1"> English</a>
                            <a class="dropdown-item white-color font-13 fables-second-hover-color" href="#">
                                <img src="assets/custom/images/France.png" alt="england flag" class="mr-1"> French</a>
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

                        <a class="navbar-brand pl-0" href="index.html"><img src="assets/custom/images/fables-logo.png" alt="Fables Template" class="fables-logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fables-iconmenu-icon text-white font-16"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="fablesNavDropdown">

                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </div>
    <!-- /End Fables Navigation -->

    <!-- Start Header -->
    <div class="fables-header fables-after-overlay">
        <div class="container">
            <h2 class="fables-page-title fables-second-border-color">Access Receptionist</h2>
        </div>
    </div>
    <!-- /End Header -->

    <!-- Start Breadcrumbs -->
    <div class="fables-light-background-color">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="fables-breadcrumb breadcrumb px-0 py-3">
                    <li class="breadcrumb-item"><a href="index.php" class="fables-second-text-color">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Access Receptionist</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /End Breadcrumbs -->

    <!-- Start page content -->


    <div class="fables-choose-background fables-after-overlay py-4 py-md-5 bg-rules overflow-hidden px-3 px-md-0">
        <div class="container position-relative z-index">
            <div class="row">
                <div class="col-12 col-lg-6 p-0 image-container translate-effect-right wow fadeInLeft mb-3 mb-md-0" data-wow-delay="1s" data-wow-duration="1.5s" style="border-radius: 2vh 0vh 0vh 2vh;">
                    <img src="assets/custom/images/choose-img.jpg" alt="" class="w-100">
                </div>
                <div class="col-12 col-lg-6 bg-white px-6 py-3 py-md-5 wow fadeInRight" data-wow-delay="1s" data-wow-duration="1.5s" style="border-radius: 0vh 2vh 2vh 0vh;;">
                    <h2 class="font-30 font-weight-bold fables-second-text-color">RESEPSIONIS MENU</h2>
                    <p class="fables-main-text-color font-14 my-3">
                        Harap mengisi segala data dengan hati-hati dan atas persetujuan dari pihak atasan, segala informasi yang diberikan bersifat terbuka antar pihak.
                    </p>
                    <div id="accordion">
                        <div class="card border-0 mb-2">
                            <div class="card-header p-0 border bg-transparent rounded-0" id="headingOne">
                                <h5 class="mb-0 position-relative">
                                    <span class="fables-second-background-color white-color d-inline-block position-absolute fables-lus-icon pt-2 text-center">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <button class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Data Kedatangan Tamu
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                                    Segala informasi di'inputkan ke dalam data di bawah,dan segala informasi <b>kedatangan tamu</b> sudah di lampirkan secara terbuka dan mohon dijaga kerahasiaan segala data informasi yang diberikan dan di'inputkan
                                </div>
                                <div class="d-flex justify-content-center">
                                        <a href="tamu/tamu.php">
                                            <button type="button" class="btn btn-info">
                                                Info Data
                                            </button>
                                        </a>
                                    </div>
                            </div>
                        </div>

                        <div class="card border-0 mb-2">
                            <div class="card-header bg-transparent p-0 border rounded-0" id="headingTwo">
                                <h5 class="mb-0 position-relative">
                                    <span class="fables-second-background-color white-color d-inline-block position-absolute fables-lus-icon pt-2 text-center">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <button class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Data Penerimaan Surat / Paket
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                                    Segala informasi di'inputkan ke dalam data di bawah,dan segala informasi <b>kedatangan surat / paket</b> sudah di lampirkan secara terbuka dan mohon dijaga kerahasiaan segala data informasi yang diberikan dan di'inputkan
                                </div>
                                    <div class="d-flex justify-content-center">
                                        <a href="surat/surat.php">
                                            <button type="button" class="btn btn-info">
                                                Info Data
                                            </button>
                                        </a>
                                    </div>
                            </div>
                        </div>

                        <div class="card border-0 mb-2">
                            <div class="card-header p-0 border bg-transparent rounded-0" id="headingThree">
                                <h5 class="mb-0 position-relative">
                                    <span class="fables-second-background-color white-color d-inline-block position-absolute fables-lus-icon pt-2 text-center">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <button class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Data Penerimaan Telepon Masuk
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                                    Segala informasi di'inputkan ke dalam data di bawah,dan segala informasi <b>panggilan masuk telepon dari pihak luar perusahaan</b> sudah di lampirkan secara terbuka dan mohon dijaga kerahasiaan segala data informasi yang diberikan dan di'inputkan
                                </div>
                                <div class="d-flex justify-content-center">
                                        <a href="tlp/tlp.php">
                                            <button type="button" class="btn btn-info">
                                                Info Data
                                            </button>
                                        </a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- /End page content -->


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
                    <a href="#" class="fables-second-border-color border-bottom pb-3 d-block mb-3 mt-minus-13"><img src="assets/custom/images/fables-logo.png" alt="fables template"></a>
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
                        <li><a href="about.php">Profil</a></li>
                        <li><a href="contactus1.php">Contact Us</a></li>
                        <li><a href="blog-cat.php">Blog</a></li>
                        <li><a href="produk.php">Store</a></li>
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


    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
    <script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
    <script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
    <script src="assets/vendor/popper/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
    <script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/timeline/jquery.timelify.js"></script>
    <script src="assets/custom/js/custom.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('select').selectize({
                sortField: 'text'
            });
        });
    </script>

</body>

</html>