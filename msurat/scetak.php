<?php
//import koneksi ke database
?>
<html>

<head>
    <title>DATA TELEPON</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>


    <!-- animate.css-->
    <link href="../assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- Load Screen -->
    <link href="../assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="../assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="../assets/custom/css/fables-icons.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet"> -->
    <!-- FANCY BOX -->
    <link href="../assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet">
    <!-- OWL CAROUSEL  -->
    <link href="../assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- Timeline -->
    <link rel="stylesheet" href="assets/vendor/timeline/timeline.css">
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="../assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="../assets/custom/css/custom-responsive.css" rel="stylesheet">
    <!-- SWEET ALERT -->
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- ICON -->
    <script src="https://kit.fontawesome.com/fd1a95cfd8.js" crossorigin="anonymous"></script>
    <!-- Javascript -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>


    <!-- Style CSS -->
    <!-- <link rel="stylesheet" href="./assets/custom/css/style.css" /> -->
    <!-- Demo CSS (No need to include it into your project) -->
    <link rel="stylesheet" href="../assets/custom/css/demo.css" />
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
</head>

<body>
    <div class="container">
    <h2><center><b>DATA PENERIMAAN SURAT</b></center></h2>
			<i><center>(Data Surat Terkait Kerja Sama Untuk Perusahaan Dan Belah Pihak Namun Bersifat Rahasia)</center></i>
            <br><hr>
        <div class="data-tables datatable-dark">

        <table id="example" class="table table-striped text-center table-bordered" style="width: 100%">
        <thead>
          <tr class="table-dark ">
            <th class="text-center">Nomor Induk Pegawai (NIP)</th>
            <th class="text-center">Atas Nama Pengirim</th>
            <th class="text-center">Pihak Instansi Pengirim</th>
            <th class="text-center">Alamat Instansi Pengirim</th>
            <th class="text-center">Tanggal Penerimaan Surat</th>
          </tr>
        </thead>
        <tbody>

        <?php
                    $db = mysqli_connect("localhost", "root", "", "resepsionis");
                    $result = mysqli_query($db, "SELECT * FROM surat ");


                    while ($row = mysqli_fetch_array($result)) {


                    ?>

            <tr class="table-light">
              <td class="col-2"><?= $row["NIP"]; ?></td>
              <td class="col-2"><?= $row["atas_nama"]; ?></td>
              <td class="col-2"><?= $row["pihak_instansi"]; ?></td>
              <td class="col-2"><?= $row["alamat_instansi"]; ?></td>
              <td class="col-2"><?= $row["tgl"]; ?></td>
              
            </tr>

          <?php
          }
          ?>
        </tbody>
      </table>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>



</body>

</html>