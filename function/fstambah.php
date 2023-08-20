<?php
$db = mysqli_connect("localhost", "root", "", "resepsionis");

if (isset($_POST['submit'])) {
    $NIP = ($_POST["NIP"]);
    $Nama = ($_POST["atas_nama"]);
    $pihak = ($_POST["pihak_instansi"]);
    $alamat = ($_POST["alamat_instansi"]);
    $tgl = ($_POST["tgl"]);

    $query = "INSERT INTO surat values ('$NIP', '$Nama' , '$pihak' , '$alamat', '$tgl')";

    mysqli_query($db, $query);

    if (mysqli_affected_rows($db) > 0) {
        echo "<script language='JavaScript'>
            swal('Success!', 'Your data have been saved. Thank you!', 'success').then(function(){ 
                    window.location.href = '../surat/surat.php';
                   }
                );
            </script>";
    } else {
        echo "<script language='JavaScript'>
            swal('Sorry!', 'Opps, something went wrong. Please try again later.', 'error').then(function(){ 
                window.location.href = '../surat/surat.php';
               }
            );    
        </script>";
    }
}
