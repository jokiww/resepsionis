<?php
session_start();

if (!isset($_SESSION['login'])) {
    echo "
    <script language='JavaScript'>
    swal('Sorry!', 'Silahkan Login Terlebih Dahulu.', 'error').then(function(){ 
        window.location.href = '../login.php';
       }
    );    
</script>";
exit;
}

$db = mysqli_connect("localhost", "root", "", "resepsionis");

if (isset($_POST['submit'])) {
    $no_kunjungan = ($_POST["no_kunjungan"]);
    $Nama = ($_POST["atas_nama"]);
    $jekel = ($_POST["jekel"]);
    $pihak = ($_POST["pihak_instansi"]);
    $alamat = ($_POST["alamat_instansi"]);
    $tgl = ($_POST["tgl"]);
    $jaminan_identitas = ($_POST["jaminan_identitas"]);
    $jenis_kepentingan = ($_POST["jenis_kepentingan"]);
    $tujuan_kedatangan = ($_POST["tujuan_kedatangan"]);
    $notes_kedatangan = ($_POST["notes_kedatangan"]);

    $query = "INSERT INTO tamu values ('$no_kunjungan', '$Nama' , '$jekel' , '$pihak' , '$alamat', '$tgl' , '$jaminan_identitas' , '$jenis_kepentingan' , '$tujuan_kedatangan' , '$notes_kedatangan')";

    mysqli_query($db, $query);

    if (mysqli_affected_rows($db) > 0) {
        echo "<script language='JavaScript'>
            swal('Success!', 'Your data have been saved. Thank you!', 'success').then(function(){ 
                    window.location.href = '../tamu/tamu.php';
                   }
                );
            </script>";
    } else {
        echo "<script language='JavaScript'>
            swal('Sorry!', 'Opps, something went wrong. Please try again later.', 'error').then(function(){ 
                window.location.href = '../tamu/tamu.php';
               }
            );    
        </script>";
    }
}
