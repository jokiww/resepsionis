<?php
$db = mysqli_connect("localhost", "root", "", "resepsionis");

if (isset($_POST['submit'])) {
    $id_tlp = ($_POST["id_tlp"]);
    $Nama = ($_POST["atas_nama"]);
    $jekel = ($_POST["jekel"]);
    $pihak = ($_POST["pihak_instansi"]);
    $alamat = ($_POST["alamat_instansi"]);
    $tgl = ($_POST["tgl"]);
    $no_tlp = ($_POST["no_tlp"]);
    $jenis_kepentingan = ($_POST["jenis_kepentingan"]);
    $penujuan_tlp = ($_POST["penujuan_tlp"]);
    $notes_tlp = ($_POST["notes_tlp"]);

    $query = "INSERT INTO tlp values ('$id_tlp', '$Nama' , '$jekel' , '$pihak' , '$alamat', '$tgl' , '$no_tlp' , '$jenis_kepentingan' , '$penujuan_tlp' , '$notes_tlp')";

    mysqli_query($db, $query);

    if (mysqli_affected_rows($db) > 0) {
        echo "<script language='JavaScript'>
            swal('Success!', 'Your data have been saved. Thank you!', 'success').then(function(){ 
                    window.location.href = '../tlp/tlp.php';
                   }
                );
            </script>";
    } else {
        echo "<script language='JavaScript'>
            swal('Sorry!', 'Opps, something went wrong. Please try again later.', 'error').then(function(){ 
                window.location.href = '../tlp/tlp.php';
               }
            );    
        </script>";
    }
}
